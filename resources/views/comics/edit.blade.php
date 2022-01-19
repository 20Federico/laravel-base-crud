@extends('layouts.basic')

@section('page_title', 'Comics | edit')

@section('main')
  <div class="container py-5">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
    <h1 class="mb-5">Edit comic <strong>{{$comic->title}}</strong></h1>
    <form action="{{ route('comics.update', $comic->id) }}" method="post">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea type="text" class="form-control" id="description" name="description">
          {{$comic->description}}
        </textarea>  
      </div>
      <div class="mb-3">
        <label for="thumb" class="form-label">Thumb</label>
        <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}">
      </div>
      <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
      </div>
      <div class="mb-3">
        <label for="sale_date" class="form-label">Sale Date</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
      </div>
      <button type="submit" class="btn btn-primary my-3">Submit</button>
    </form>
  </div>
@endsection
