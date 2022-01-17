@extends('layouts.default')

@section('page_title', 'Comics | Index')

@section('main_content')
  <div class="container m-5 p-5 text-center">
    <a href="{{route('comics.index')}}" class="btn btn-primary"> VEDI LISTA COMICS </a>
  </div>
@endsection
