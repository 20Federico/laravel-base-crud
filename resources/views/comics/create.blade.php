@extends('layouts.basic')

@section('page_title', 'Comics | create')

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
    <h1 class="mb-5">Create a new comic</h1>
    <form action="{{ route('comics.store') }}" method="post">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea type="text" class="form-control" id="description" name="description">
          {{old('description')}}
        </textarea>  
      </div>
      <div class="mb-3">
        <label for="thumb" class="form-label">Thumb</label>
        <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb')}}">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}">
      </div>
      <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control" id="series" name="series" value="{{old('series')}}">
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" id="type" name="type" value="{{old('type')}}">
      </div>
      <div class="mb-3">
        <label for="sale_date" class="form-label">Sale Date</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
      </div>
      <button type="submit" class="btn btn-primary my-3">Submit</button>
    </form>
  </div>
@endsection
