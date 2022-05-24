<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MaisonneuveEtudiant;
use App\Models\Ville;
use App\Models\User;
use Hash;



class MaisonneuveEtudiantController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = MaisonneuveEtudiant::all();
        return view('etudiants.index', ['etudiants'=>$etudiants]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $villes = Ville::all();
        return view('etudiants.create', ['villes'=>$villes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nom' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            ]);
        $user = new User;
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();
        
        $newEtudiant = MaisonneuveEtudiant::create([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'phone' => $request->tele,
            'email' => $request->email,
            'date_de_naissance' => $request->dt,
            'ville_id' => $request->ville,
            'user_id' => $user->id,
        ]); 


        return redirect('etudiants/'.$newEtudiant->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MaisonneuveEtudiant  $id
     * @return \Illuminate\Http\Response
     */
    public function show(MaisonneuveEtudiant $id)
    {
        $ville = Ville::find($id->ville_id);
        return  view ('etudiants.show', ['etudiant'=>$id, 'ville'=>$ville]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MaisonneuveEtudiant  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(MaisonneuveEtudiant $id)
    {
        $villes = Ville::all();
        return view('etudiants.edit', ['etudiant' => $id , 'villes'=>$villes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MaisonneuveEtudiant  $etud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaisonneuveEtudiant $etud)
    {
        $etud->update([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'phone' => $request->tele,
            'email' => $request->email,
            'date_de_naissance' => $request->dt,
            'ville_id' => $request->ville,
        ]);
        return redirect(route('etudiants.show', $etud->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MaisonneuveEtudiant  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaisonneuveEtudiant $id)
    {
        $id->delete();
        return redirect(route('etudiants'));
    }


}
