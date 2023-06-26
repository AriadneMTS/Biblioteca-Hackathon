<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = ['ra', 'nome', 'endereco', 'cidade', 'uf', 'telefone', 'curso_id']; 

    public function curso() {
        return $this->belongsTo(Curso::class);
    }

    public function reservas() {
        return $this->hasMany(Reserva::class);
    }

    public function livros() {
        return $this->hasManyThrough(Livro::class, Reserva::class);
    }
}
