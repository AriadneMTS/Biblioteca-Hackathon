<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'coordenador', 'duracao']; 

    public function alunos() {
        return $this->hasMany(Alunos::class);
    }

}
