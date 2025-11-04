<?php

// app/Http/Controllers/OngController.php
namespace App\Http\Controllers;

use App\Models\Ong;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class OngController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            // Passo 1
            'orgName'        => ['required','string','max:255'],
            'cnpj'           => ['required','string','max:20'],
            'foundingYear'   => ['nullable','integer','between:1900,'.date('Y')],
            'email'          => ['required','email','max:255', Rule::unique('ongs','email')],
            'phone'          => ['required','string','max:30'],
            'website'        => ['nullable','url','max:255'],
            'address'        => ['required','string','max:255'],
            'state'          => ['required','string','size:2'],
            'city'           => ['required','string','max:120'],
            'cep'            => ['nullable','string','max:10'],

            // Passo 2
            'areas'          => ['required','array','min:1'],
            'areas.*'        => ['string'],
            'mission'        => ['required','string'],
            'beneficiaries'  => ['nullable','string','max:50'],

            // Passo 3
            'volunteerTypes' => ['required','array','min:1'],
            'volunteerTypes.*'=> ['string'],
            'desiredSkills'  => ['nullable','string'],
            'currentProjects'=> ['required','string'],
            'frequency'      => ['nullable','string','max:20'],
            'activeVolunteers'=>['nullable','string','max:20'],
            'contactName'    => ['required','string','max:120'],
            'contactRole'    => ['required','string','max:120'],

            // Passo 4
            'password'       => ['required','string','min:8', 'regex:/[A-Z]/', 'regex:/[a-z]/', 'regex:/[0-9]/', 'regex:/[!@#$%^&*()_\-=\[\]{};\'":\\|,.<>\/?]/'],
            'confirmPassword'=> ['required','same:password'],
            'newsletter'     => ['nullable','boolean'],
            'terms'          => ['accepted'],
        ]);

        $ong = Ong::create([
            'org_name'         => $data['orgName'],
            'cnpj'             => $data['cnpj'],
            'founding_year'    => $data['foundingYear'] ?? null,
            'email'            => $data['email'],
            'phone'            => $data['phone'],
            'website'          => $data['website'] ?? null,
            'address'          => $data['address'],
            'state'            => strtoupper($data['state']),
            'city'             => $data['city'],
            'cep'              => $data['cep'] ?? null,

            'areas'            => $data['areas'],
            'mission'          => $data['mission'],
            'beneficiaries'    => $data['beneficiaries'] ?? null,

            'volunteer_types'  => $data['volunteerTypes'],
            'desired_skills'   => $data['desiredSkills'] ?? null,
            'current_projects' => $data['currentProjects'],
            'frequency'        => $data['frequency'] ?? null,
            'active_volunteers'=> $data['activeVolunteers'] ?? null,
            'contact_name'     => $data['contactName'],
            'contact_role'     => $data['contactRole'],

            'password'         => Hash::make($data['password']),
            'newsletter'       => (bool)($data['newsletter'] ?? false),
        ]);

        return response()->json([
            'ok' => true,
            'id' => $ong->id,
            'message' => 'ONG cadastrada com sucesso.'
        ], 201);
    }
}
