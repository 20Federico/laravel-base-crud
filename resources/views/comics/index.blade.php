@extends('layouts.default')

@section('page_title', 'Comics | Index')

@section('main_content')
  <div class="container py-5">
    <div class="row row-cols-4 gap-3">
      @foreach ($comics as $comic)
      <div class="card" style="width: 18rem; background-color: rgb(221, 220, 220)">
        <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
        <div class="card-body text-dark">      
          <h5 class="card-title">{{$comic->title}}</h5>
          <p class="card-text text-truncate">{{$comic->description}}</p>
          <a href="{{route('comics.show')}}" class="btn btn-primary">Details</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
@endsection



