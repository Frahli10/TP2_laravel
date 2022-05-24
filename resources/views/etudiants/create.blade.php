@extends('layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">@lang('lang.msgAjou') </h1>
                    <p>@lang('lang.msgAjou2') </p>

                    <hr>

                    <form method="POST">
                        @csrf
                        <div class="container">
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="title">Nom </label>
                                <input type="text" id="title" class="form-control" name="nom"
                                       placeholder="Entrer le nom du etudiant" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="title">Adresse </label>
                                <input type="text" id="title" class="form-control" name="adresse"
                                       placeholder="Entrer l'adresse du etudiant" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="title">Telephone </label>
                                <input type="tel" id="title" class="form-control" name="tele"
                                       placeholder="Entrer le telephone du etudiant" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="title">Email </label>
                                <input type="email" id="title" class="form-control" name="email"
                                       placeholder="Entrer l'email du etudiant" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="title">Password </label>
                                <input type="password" id="title" class="form-control" name="password"
                                       placeholder="Entrer le mot de passe" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="title">Date de naissance </label>
                                <input type="date" id="title" class="form-control" name="dt"
                                       placeholder="Entrer la date de naissance du etudiant" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="title">Ville </label>
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
                                    Ajouter 
                                </button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    </div
@endsection