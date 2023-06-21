<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
   
    public function index()
    {
        $dados = Aluno::get();

        return Response()->json($dados);
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(string $id)
    {
        $aluno = Aluno::find($id);

        return view('Aluno.show', [
            'aluno' => $aluno
        ]);
    }

    
    public function edit(string $id)
    {
        $aluno = Aluno::find($id);
        return view('alunos.edit', [
            'aluno'=> $aluno
        ]);
    }

    
    public function update(Request $request, string $id)
    {
        $aluno = Aluno::find($id);
        return view('alunos.edit', [
            'aluno'=> $aluno
        ]);
        
    }

   
    public function destroy(string $id)
    {
        Aluno::destroy($id);
        return Response()->json(null, 204);
    }
}
