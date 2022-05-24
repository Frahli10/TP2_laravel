@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Modifier Votre Article  </h1>
                    <hr>
                    <form method="POST">
                        @csrf
                        @method('PUT')
                        <div class="container">
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="title">Titre</label>
                                <input type="text" id="title" class="form-control" name="titre"
                                     value="{{ $article->titre }}" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="title">Contenu</label>
                                <textarea  id="title" class="form-control" name="contenu"
                                      required>{{ $article->contenu }}</textarea>
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
@endsection