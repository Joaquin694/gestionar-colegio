<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\AsistenciaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $asistencias = Asistencia::paginate();

        return view('asistencia.index', compact('asistencias'))
            ->with('i', ($request->input('page', 1) - 1) * $asistencias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $asistencia = new Asistencia();

        return view('asistencia.create', compact('asistencia'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AsistenciaRequest $request): RedirectResponse
    {
        Asistencia::create($request->validated());

        return Redirect::route('asistencias.index')
            ->with('success', 'Asistencia created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $asistencia = Asistencia::find($id);

        return view('asistencia.show', compact('asistencia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $asistencia = Asistencia::find($id);

        return view('asistencia.edit', compact('asistencia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AsistenciaRequest $request, Asistencia $asistencia): RedirectResponse
    {
        $asistencia->update($request->validated());

        return Redirect::route('asistencias.index')
            ->with('success', 'Asistencia updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Asistencia::find($id)->delete();

        return Redirect::route('asistencias.index')
            ->with('success', 'Asistencia deleted successfully');
    }
}
