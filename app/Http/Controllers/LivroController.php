<?php

namespace App\Http\Controllers;
use App\Models\Livro;
use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    
    public function index()
    {
        $livros = Livro::get();

        return view('livros.index', [
            'livros' => $livros
        ]);
    }


    public function create()
    {
        return view('livros.create');
    }

   

    public function store(Request $request)
    {
        $dados = $request->except('_token');

        Livro::create($dados);

        return redirect('/livros');
    }

   

    public function show(int $id)
    {
        $livro = Livro::find($id);

        return view('livros.show', [
            'livro' => $livro
        ]);
    }

   

    public function edit(int $id)
    {
        $livro = Livro::find($id);
        return view('livros.edit', [
            'livro'=> $livro
        ]);
    }

    

    public function update(int $id, Request $request)
    {
        $dados = $request->except("_token");
        $aluno = Livro::find($id);
        $aluno->update([

            "titulo" => $dados['titulo'],
            "subtitulo" => $dados['subtitulo'],
            "isbn" => $dados['isbn'],
            "autor" => $dados['autor'],
            "editora" => $dados['editora'],
            "local" => $dados['local'],
            "ano" => $dados['ano']

        ]);

        return redirect('/livros');
    }

   
    public function destroy(int $id)
    {
        Livro::destroy($id);
        return Response()->json(null, 204);
    }
}
