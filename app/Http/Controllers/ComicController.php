<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validatedData= $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'thumb' => 'required|max:255',
        'price' => 'required|numeric',
        'series' => 'required|max:255',
        'sale_date' => 'required|date',
        'type' => 'required',
      ]);
      
      $newComic = new Comic();
      $newComic->title = $validatedData['title'];
      $newComic->description = $validatedData['description'];
      $newComic->thumb = $validatedData['thumb'];
      $newComic->price = $validatedData['price'];
      $newComic->series = $validatedData['series'];
      $newComic->sale_date = $validatedData['sale_date'];
      $newComic->type = $validatedData['type'];
      $newComic->save();

      return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
      return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
      return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
      $vData= $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'thumb' => 'required|max:255',
        'price' => 'required|numeric',
        'series' => 'required|max:255',
        'sale_date' => 'required|date',
        'type' => 'required',
      ]);

      $comic->update($vData);

      return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
      $comic->delete();

      return redirect()->route('comics.index');
    }
}
