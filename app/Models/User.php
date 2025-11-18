<?php

namespace App\Models;

use Hash;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     * teste
     * @var list<string>
     */

    public const EXPERIENCIAS = [
        'nunca' => 'Nunca fiz trabalho voluntário',
        'pouca' => 'Pouca experiência (menos de 1 ano)',
        'moderada' => 'Experiência moderada (1–3 anos)',
        'bastante' => 'Bastante experiência (mais de 3 anos)',
    ];

    public const DISPONIBILIDADES = [
        'finais_semana' => 'Finais de Semana',
        'dias_semana' => 'Dias de Semana',
        'noites' => 'Noites',
        'manhas' => 'Manhãs',
        'flexivel' => 'Horário Flexível',
    ];

    public const TEMPOS_SEMANA = [
        'h1_2' => '1-2 horas por semana',
        'h3_5' => '3-5 horas por semana',
        'h6_10' => '6-10 horas por semana',
        'h10_plus' => 'Mais de 10 horas por semana',
    ];
    protected $fillable = [
        'name',
        'email',
        'password',
        'telefone',
        'estado',
        'cidade',
        'dta_nascimento',
        'profissao',
        'habilidades',
        'disponibilidade',
        'experiencia',
        'tempo_semana',
        'tipo',
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'dta_nascimento' => 'date',
            'password' => 'hashed',
        ];
    }

    public function causas(): BelongsToMany
    {
        return $this->belongsToMany(Causa::class, 'interesse_usuario', 'user_id', 'causa_id')->withTimestamps();
    }
    /**
     * Get the user's initials
     */
    public function initials(): string
    {
        return Str::of($this->name)
            ->explode(' ')
            ->take(2)
            ->map(fn($word) => Str::substr($word, 0, 1))
            ->implode('');
    }

    public static function validateVoluntario(array $data): array
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:150'],
            'email' => ['required', 'string', 'email', 'max:150', 'unique:users,email'],
            'password' => ['required', 'confirmed', 'min:8'],
            'telefone' => ['required', 'string', 'max:30'],
            'estado' => ['required', 'string', 'size:2'],
            'cidade' => ['required', 'string', 'max:100'],
            'dta_nascimento' => ['required', 'date'],

            'profissao' => ['nullable', 'string', 'max:120'],
            'habilidades' => ['nullable', 'string'],

            'disponibilidade' => ['required', Rule::in(array_keys(self::DISPONIBILIDADES))],
            'experiencia' => ['required', Rule::in(array_keys(self::EXPERIENCIAS))],
            'tempo_semana' => ['required', Rule::in(array_keys(self::TEMPOS_SEMANA))],

            'causas' => ['required', 'array', 'min:1'],
            'causas.*' => ['integer', 'exists:causas,id'],

            'terms' => ['accepted'],
        ])->validate();
    }

    /**
     * Cria o usuário e vincula causas (pivot interesse_usuario).
     */
    public static function createVoluntario(array $validated): self
    {
        $user = self::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'telefone' => $validated['telefone'],
            'estado' => $validated['estado'],
            'cidade' => $validated['cidade'],
            'dta_nascimento' => $validated['dta_nascimento'],
            'profissao' => $validated['profissao'] ?? null,
            'habilidades' => $validated['habilidades'] ?? null,
            'disponibilidade' => $validated['disponibilidade'],
            'experiencia' => $validated['experiencia'],
            'tempo_semana' => $validated['tempo_semana'],
            // 'tipo'         => 'voluntario', // se quiser fixar
        ]);

        if (!empty($validated['causas'])) {
            $user->causas()->sync($validated['causas']);
        }

        return $user;
    }

}
