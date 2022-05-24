@extends('layouts.app')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forum/</span> Document Page</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">@lang('lang.msg34')</h5>
        </div>
        <div class="card-body">
            <form method="post" action="/documents/create" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" >@lang('lang.titre')</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="titre"  placeholder=" ">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" >Document</label>
                <div class="col-sm-10">
                        <input class="form-control" type="file" name="file">
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">@lang('lang.ajouter')</button>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>


@forelse($documents as $document)
<hr>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">{{ ucfirst($document->titre)}}</h5>
    <p class="card-text">
      {{$document->document}}
    </p>
    <p class="card-text"><small class="text-muted">Last updated {{$document->updated_at}}</small></p>
    @if($document->user_id == $user_id)
    <a href="{{ route('documents.edit', $document->id) }}"><button type="button" class="btn rounded-pill btn-info">update</button></a>
    <a href="{{ route('documents.delete', $document->id) }}"><button type="button" class="btn rounded-pill btn-danger">delete</button></a><br>
    @endif
    

  </div>
</div>


@empty
    <li>Aucun document</li>
@endforelse 

    

    
    
</div>



@endsection