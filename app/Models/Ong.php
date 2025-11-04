<?php

// app/Models/Ong.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ong extends Model
{
    protected $fillable = [
        'org_name','cnpj','founding_year','email','phone','website','address','state','city','cep',
        'areas','mission','beneficiaries',
        'volunteer_types','desired_skills','current_projects','frequency','active_volunteers',
        'contact_name','contact_role',
        'password','newsletter',
    ];

    protected $casts = [
        'areas' => 'array',
        'volunteer_types' => 'array',
        'newsletter' => 'boolean',
    ];

    protected $hidden = ['password'];
}

