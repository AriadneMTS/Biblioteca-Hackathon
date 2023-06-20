<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = ['ra', 'nome', 'endereco', 'cidade', 'uf', 'telefone', 'curso']; 


    public function index()

    {

    $Alunos = Aluno::all();
    return response()->json($Alunos);
    
   }

}
