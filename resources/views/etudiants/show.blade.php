@extends('layouts.app')
@section('content')
    


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="exampleModalLabel">@lang('lang.Supprimer')</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      @lang('lang.msgSupp')
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">@lang('lang.Supprimer')</button>
        </form>
      </div>
    </div>
  </div>
</div>

<hr>
<div class="container" style="text-align: center;">

<div>

      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
  
      <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">{{ ucfirst($etudiant->nom) }}</strong>
          <h3 class="mb-0">{{ ucfirst($etudiant->nom) }}</h3>
          <div class="mb-1 text-muted">{{$etudiant->phone}}</div>
          <p class="card-text mb-auto">Adresse : {{$etudiant->adresse}}</p>
          <p class="card-text mb-auto">Date de naisance : {{$etudiant->date_de_naissance}}</p>
          <p class="card-text mb-auto">Email : {{$etudiant->email}}</p>
          <p class="card-text mb-auto">Ville : {{$ville->nom}}</p>

          <br><br>
          <a href="{{ route('etudiants.edit', $etudiant->id)}}" class="btn btn-outline-primary">@lang('lang.Modifier') </a>
          <br>
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                     @lang('lang.Supprimer')
          </button>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>

        </div>
      </div>
    </div>
</div>

@endsection