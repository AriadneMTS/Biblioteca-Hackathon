<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use App\Models\Livro;
use Illuminate\Http\Request;

class AlunoController extends Controller
{

    public function index()
    {
        $dados = Aluno::with('curso')->get();

        return Response()->json($dados);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $dados = $request->except('_token');

        $aluno = Aluno::create($dados);

        return Response()->json($aluno, 201);
    }


    public function show(string $id)
    {
        $aluno = Aluno::find($id);
        if(!$aluno) {
            return Response()->json(null, 404);
        }

        return Response()->json($aluno);
    }


    public function edit(string $id)
    {

    }


    public function update(Request $request, string $id)
    {
        $dados = $request->except('_token');

        $aluno = Aluno::find($id);

        $aluno->update($dados);

        return Response()->json(null, 204);

    }


    public function destroy(string $id)
    {
        Aluno::destroy($id);
        return Response()->json(null, 204);
    }

    public function getByRa(string $ra) {
        $aluno = Aluno::where('ra', $ra)->with('curso')->get();

        if(!$aluno) {
            return Response()->json(null, 404);
        }

        return Response()->json($aluno);
    }

    public function getLivrosByRa(string $ra) {
        $aluno = Aluno::where('ra', $ra)->first();
        if(!$aluno) {
            return Response()->json(null, 404);
        }

        $livrosIds = $aluno->reservas->pluck('livro_id');

        $livros = Livro::with('autor', 'editora')->whereIn('id', $livrosIds)->get();

        return Response()->json($livros);
    }
}
