<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    
    public function index()
    {
        $cursos = Curso::get();

        return Response()->json($cursos);
        
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $curso = Curso::find($id);

        if(!$curso) {
            return Response()->json(null, 404);
        };

        return Response()->json($curso);
    }

    
    public function edit(string $id)
    {
        
    }

   
    public function update(Request $request, string $id)
    {
        $dados = $request->except("_token");

        $curso = Curso::find($id);

        $curso->update($dados);

        return Response()->json(null, 204);
    }

    
    public function destroy(string $id)
    {
        Curso::destroy($id);
        return Response()->json(null, 204);
    }
}
