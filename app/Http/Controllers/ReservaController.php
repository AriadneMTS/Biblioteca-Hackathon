<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Reserva::with('aluno', 'livro')->get();

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

        $reserva = Reserva::create($dados);

        return Response()->json($reserva, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reserva = Reserva::find($id);

        if(!$reserva) {
            return Response()->json(null, 404);
        };

        return Response()->json($reserva);
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
        $dados = $request->except("_token");

        $reserva = Reserva::find($id);

        $reserva->update($dados);

        return Response()->json(null, 204);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Reserva::destroy($id);
        return Response()->json(null, 204);
    }
}
