<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use App\Http\Requests\StoreanggotaRequest;
use App\Http\Requests\UpdateanggotaRequest;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggotas = Anggota::all();
        return view('anggota.index', compact('anggotas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreanggotaRequest $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nomor_telepon' => 'nullable|string|max:20',
            'email' => 'nullable|email|unique:anggotas,email',
        ]);

        Anggota::create($request->all());

        return redirect()->route('anggota.index')
            ->with('success', 'Anggota created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(anggota $anggotas, $id)
    {
        $anggota = $anggotas->find($id);
        return view('anggota.show', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(anggota $anggotas, $id)
    {
        $anggota = $anggotas->find($id);
        return view('anggota.edit', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateanggotaRequest $request, anggota $anggotas,$id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nomor_telepon' => 'nullable|string|max:20',
            'email' => 'nullable|email|unique:anggotas,email,' . $id,
        ]);
        $anggota = $anggotas->find($id);
        $anggota->update($request->all());

        return redirect()->route('anggota.index')
            ->with('success', 'Anggota updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(anggota $anggotas, $id)
    {
        $anggota = $anggotas->find($id);
        $anggota->delete();

        return redirect()->route('anggota.index')
            ->with('success', 'Anggota deleted successfully.');
    }
}
