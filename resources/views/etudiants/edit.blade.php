@extends('layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/etudiants/{{$etudiant->id}}" class="btn btn-outline-primary btn-sm">Retourner</a>
                <div class="mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Modifier les informations d'etudiant </h1>
                    <hr>
                    <form method="POST">
                        @csrf
                        @method('PUT')
                        <div class="container">
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="title">Nom</label>
                                <input type="text" id="title" class="form-control" name="nom"
                                     value="{{ $etudiant->nom }}" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="title">Adresse</label>
                                <input type="text" id="title" class="form-control" name="adresse"
                                     value="{{ $etudiant->adresse }}" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="title">Telephone</label>
                                <input type="text" id="title" class="form-control" name="tele"
                                     value="{{ $etudiant->phone }}" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="title">Email</label>
                                <input type="text" id="title" class="form-control" name="email"
                                     value="{{ $etudiant->email }}" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="title">Date de naissance</label>
                                <input type="text" id="title" class="form-control" name="dt"
                                     value="{{ $etudiant->date_de_naissance }}" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="title">Ville</label>
                                <select name="ville" class="form-control">
                                @forelse($villes as $ville)
                                    <option value="{{$ville->id}}">{{ ucfirst($ville->nom)}}</option>
                                    @empty
                                        <li>Aucune Ville</li>
                                    @endforelse
                                </select>
                               
                            </div>
                           
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Modifier 
                                </button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection