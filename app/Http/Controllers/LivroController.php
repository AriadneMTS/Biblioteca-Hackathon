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

        return Response()->json($livros);
        
    }


    public function create()
    {
        
    }

   

    public function store(Request $request)
    {
        $dados = $request->except('_token');

        $livro = Livro::create($dados);

        return Response()->json($livro, 201);
    }

   

    public function show(string $id)
    {
        $livro = Livro::find($id);

        if(!$livro) {
            return Response()->json(null, 404);
        };

        return Response()->json($livro);



       
    }

   

    public function edit(int $id)
    {
        
    }

    

    public function update(string $id, Request $request)
    {
        $dados = $request->except("_token");

        $livro = Livro::find($id);

        $livro->update($dados);

        return Response()->json(null, 204);
        
    }

   
    public function destroy(int $id)
    {
        Livro::destroy($id);
        return Response()->json(null, 204);
    }
}
