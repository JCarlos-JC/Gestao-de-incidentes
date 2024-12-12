<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidente extends Model
{
    use HasFactory;
    protected $fillable = [
    'descricao',
    'arquivo',
    'local',
    'nome',
    'pessoa_contacto',
    'nivel',
    'estado',
    ];

    
}
