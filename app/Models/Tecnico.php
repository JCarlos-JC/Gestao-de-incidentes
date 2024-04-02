<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    use HasFactory;

protected $fillable = [
    'nome',
    'departamento_id',
];

public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

}
