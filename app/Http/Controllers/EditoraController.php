<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Editora;
use Illuminate\Http\Request;

class EditoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Editora::get();

        return Response()->json($dados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->except('_token');

        $editora = Editora::create($dados);

        return Response()->json($editora, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $editora = Editora::find($id);

        if(!$editora) {
            return Response()->json(null, 404);
        }

        return Response()->json($editora);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = $request->except('_token');

        $editora = Editora::find($id);

        $editora->update($dados);

        return Response()->json(null, 204);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Editora::destroy($id);

        return Response()->json(null, 204);
    }
}
