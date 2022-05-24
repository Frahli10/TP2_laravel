@extends('layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">@lang('lang.welcomeBtnList')</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="list-group">
            @forelse($etudiants as $etudiant)
                <a href="{{ route('etudiants.show', $etudiant->id) }}" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    <img src="{{asset('/images/etud.png')}}" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0">{{ ucfirst($etudiant->nom)}}</h6>
                        <p class="mb-0 opacity-75">Pour plus d'info click ici .</p>
                    </div>
                    <small class="opacity-50 text-nowrap">{{$etudiant->created_at}}</small>
                    </div>
                
                </a>
            @empty
                <li>Aucun etudiant</li>
            @endforelse  
            </div>
</div>
</div>
</div>

    
@endsection