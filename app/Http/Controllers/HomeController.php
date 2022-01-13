<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class HomeController extends Controller
{
  public function index() {
    $data = Comic::all();

    return view('comics.index', compact('data'));
  }
}