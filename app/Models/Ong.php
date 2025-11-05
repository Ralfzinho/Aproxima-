<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class Ong extends Model
{
    use HasFactory;

    protected $table = 'ongs';

    // Valores permitidos (reutilizados na validação)
    public const VOLUNTEER_TYPES = ['presencial','remoto','especializado','pontual'];
    public const FREQUENCIES     = ['diaria','semanal','mensal','eventual'];
    public const UFS             = ['AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO'];

    protected $fillable = [
        'org_name','email','password','cnpj','founding_year',
        'phone','website','address','state','city','cep',
        'mission','beneficiaries',
        'volunteer_types','frequency',
        'desired_skills','current_projects','active_volunteers',
        'contact_name','contact_role',
        'newsletter',
    ];

    protected $casts = [
        'volunteer_types' => 'array',
        'newsletter'      => 'boolean',
        'founding_year'   => 'integer',
    ];

    public function causas()
    {
        return $this->belongsToMany(Causa::class, 'ong_causa', 'ong_id', 'causa_id')->withTimestamps();
    }

    /**
     * Valida os dados do cadastro de ONG.
     * Mantemos a validação fora das rotas (padrão que você pediu).
     */
    public static function validateCadastro(array $input): array
    {
        $rules = [
            // Identificação
            'org_name'          => ['required','string','max:180'],
            'email'             => ['required','email','max:180','unique:ongs,email'],
            'password'          => ['required','string','min:8','confirmed'], // exige password_confirmation
            'cnpj'              => ['required','regex:/^\d{14}$/','unique:ongs,cnpj'],
            'founding_year'     => ['nullable','integer','between:1800,'.date('Y')],

            'phone'             => ['nullable','string','max:30'],
            'website'           => ['nullable','url'],

            // Endereço
            'address'           => ['nullable','string','max:255'],
            'state'             => ['nullable','in:'.implode(',', self::UFS)],
            'city'              => ['nullable','string','max:120'],
            'cep'               => ['nullable','string','max:10'],

            // Operacional
            'mission'           => ['required','string'],
            'beneficiaries'     => ['nullable','string','max:50'],

            // Option A (JSON multi): múltipla seleção com itens permitidos
            'volunteer_types'   => ['required','array','min:1'],
            'volunteer_types.*' => ['required','in:'.implode(',', self::VOLUNTEER_TYPES)],

            'frequency'         => ['nullable','in:'.implode(',', self::FREQUENCIES)],
            'desired_skills'    => ['nullable','string'],
            'current_projects'  => ['required','string'],
            'active_volunteers' => ['nullable','string','max:20'],

            'contact_name'      => ['required','string','max:120'],
            'contact_role'      => ['required','string','max:120'],

            'newsletter'        => ['sometimes','boolean'],

            // Pivot de causas
            'causas'            => ['required','array','min:1'],
            'causas.*'          => ['integer','exists:causas,id'],
        ];

        // Mensagens opcionais (deixa padrão do Laravel se não precisar)
        $messages = [
            'password.confirmed' => 'A confirmação de senha não confere.',
            'cnpj.regex'         => 'Informe o CNPJ com 14 dígitos (somente números).',
        ];

        return Validator::make($input, $rules, $messages)->validate();
    }

    /**
     * Cria a ONG com sanitizações e vincula as causas (pivot).
     */
    public static function createCadastro(array $data): self
    {
        // Sanitizações
        $data['cnpj']            = preg_replace('/\D+/', '', $data['cnpj'] ?? '');
        $data['password']        = Hash::make($data['password']);
        $data['newsletter']      = (bool) ($data['newsletter'] ?? false);
        $data['volunteer_types'] = array_values(array_unique($data['volunteer_types'] ?? []));

        // Guarda as causas e remove do payload de criação
        $causas = $data['causas'] ?? [];
        unset($data['causas'], $data['password_confirmation']);

        // Cria a ONG
        $ong = self::create($data);

        // Sincroniza pivot
        if (!empty($causas)) {
            $ong->causas()->sync($causas);
        }

        return $ong;
    }
}
