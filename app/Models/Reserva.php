<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = ['aluno_id', 'livro_id', 'dataInicio', 'dataFim', 'observacao'];

    public function livro() {
        return $this->belongsTo(Livro::class);
    }

    public function aluno() {
        return $this->belongsTo(Aluno::class);
    }

}
