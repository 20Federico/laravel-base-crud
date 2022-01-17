@extends('layouts.default')

@section('page_title', 'Comics | show')

@section('main_content')
  <div class="container py-5">
    <div class="row row-cols-2">
      <div class="col">
        <div>
          <h3>{{$comic->title}}</h3>
          <p class="text-start">
            {{$comic->description}}
          </p>
          <p><i>SERIES:</i> {{$comic->series}}</p>
          <p><i>TYPE:</i> {{$comic->type}}</p>
          <p><i>PRICE:</i> {{$comic->price}}</p>
          <p><i>SALE DATE:</i> {{$comic->sale_date}}</p>
          {{-- <a href="{{route('comics.show')}}" class="btn btn-primary">Details</a> --}}
        </div>
      </div>
      <div class="col">
        <div class="text-center">
          <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
        </div>
      </div>
    </div>
  </div>
@endsection
