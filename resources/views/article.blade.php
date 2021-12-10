@extends('base')
@section('content')
<div class="jumbotron">
    <h2 class="display-4 text-center">{{$articles->title}}</h2>
    <div class="d-flex justify-content-center my-3">
        <a href="{{route('articles')}}" class="btn btn-primary" >
        <i class="fas fa-arrow-left"></i>
        Retour
        </a>

    </div>
    <h5 class="text-center my-3 pt-3">{{$articles->subtitle}}</h5>
    <div class="d-flex justify-content-center">
        <span class="badge bg-dark">{{$articles->category->label}}</span>
    </div>
    
    


</div>
<div class="container mt-5">

    <p class="text-center row justify-content-center">
        <img src="{{$articles->image}}" class="w-25 my-5" alt="">
        {{Illuminate\mail\Markdown::parse($articles->content)}}
    </p>
</div>

    
@endsection 