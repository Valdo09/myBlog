@extends('base');

@section('content')
    <div class="jumbotron">
        <h1 class="display-3 text-center">Articles</h1>
       @livewire('filters', ['categories' => $categories])
      
    </div>
    
   {{--<div class="d-flex justify-content-center mt-5">
        {{$articles->links('vendor.pagination.custom')}}
    <div>--}}
@endsection