@extends('layouts.app')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forum/</span> Articles Page</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">@lang('lang.msg33')</h5>
        </div>
        <div class="card-body">
            <form method="post" action="/articles/create">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" >@lang('lang.titre')</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="titre"  placeholder="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" >@lang('lang.contenu')</label>
                <div class="col-sm-10">
                <textarea name="contenu" class="form-control" placeholder=" " aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
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


@forelse($articles as $article)
<hr>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">{{ ucfirst($article->titre)}}</h5>
    <p class="card-text">
      {{$article->contenu}}
    </p>
    <p class="card-text"><small class="text-muted">Last updated {{$article->updated_at}}</small></p>
    @if($article->user_id == $user_id)
    <a href="{{ route('articles.edit', $article->id) }}"><button type="button" class="btn rounded-pill btn-info">update</button></a>
    <a href="{{ route('articles.delete', $article->id) }}"><button type="button" class="btn rounded-pill btn-danger">delete</button></a><br>
    @endif
    

  </div>
</div>


@empty
    <li>Aucun Article</li>
@endforelse 

    

    
    
</div>



@endsection