<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants = Etudiant::all();
    return view('etudiants.index', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('etudiants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $etudiant = new Etudiant();
    $etudiant->nom = $request->nom;
    $etudiant->age = $request->age;
    $etudiant->note = $request->note;
    $etudiant->save();
    
    return redirect('/etudiants');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $etudiant = Etudiant::find($id);
    return view('etudiants.edit', compact('etudiant'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $etudiant = Etudiant::find($id);
    $etudiant->nom = $request->nom;
    $etudiant->age = $request->age;
    $etudiant->note = $request->note;
    $etudiant->save();
    return redirect('/etudiants');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         Etudiant::where('id', $id)->delete();
    return redirect('/etudiants');
    }
}
