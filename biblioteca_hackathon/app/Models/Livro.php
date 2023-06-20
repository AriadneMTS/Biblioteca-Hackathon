<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'sutitulo', 'isbn', 'autor', 'editora', 'local', 'ano']; 

    public function autor() {
        return $this->belongsTo(Autor::class);
    }

    public function editora() {
        return $this->belongsTo(Editora::class);
    }

    public function reservas() {
        return $this->hasMany(Reserva::class);
    }

}
