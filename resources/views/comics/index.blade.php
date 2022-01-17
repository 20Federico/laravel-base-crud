@extends('layouts.default')

@section('page_title', 'Comics | Index')

@section('main_content')
  <div class="container py-5">
    <div class="text-center">
      <a href="{{route('comics.create')}}" class="btn btn-primary mb-5">ADD NEW COMIC</a>
    </div>
    <div class="row row-cols-4 gap-3">
      @foreach ($comics as $comic)
      <div class="card" style="width: 18rem; background-color: rgb(221, 220, 220)">
        <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
        <div class="card-body text-dark">      
          <h5 class="card-title">{{$comic->title}}</h5>
          <p class="card-text text-truncate">{{$comic->description}}</p>
          <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">MORE INFO</a>
          <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-success">EDIT</a>
          <a href="{{route('comics.destroy', $comic->id)}}" class="btn btn-danger">DELETE</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
@endsection



