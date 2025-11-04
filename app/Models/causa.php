<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class causa extends Model
{
    use HasFactory;
    protected $table = "causas";
    protected $fillable = ['nome', 'descricao'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'interesse_usuario','causa_id','user_id')->withTimestamps();
    }
}