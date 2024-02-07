<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('guest.comic.index', compact('comics'));
    }


    public function create()
    {
        return view('guest.comic.create');
    }


    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);
        return View('guest.comic.show', compact('comic'));
    }

    public function store(Request $request)
    {
        $newComicData=$request->all();

        $newComic= new Comic();
        $newComic->title=$newComicData['title'];
        $newComic->description = $newComicData['description'];
        $newComic->price = $newComicData['price'];
        $newComic->type = $newComicData['type'];
        $newComic->series = $newComicData['series'];
        $newComic->sale_date=$newComicData['sale_date'];
        $newComic->thumb = $newComicData['thumb'];
        $newComic->save();
        return redirect()->route('guest.comic.show', $newComic->id);
    }
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('guest.comic.edit', compact('comic'));
    }
    public function update(request $request , string $id){

        $data=$request->all();
        $comic = Comic::findOrFail($id);
        $comic -> update($data);
        return redirect()->route('guest.comic.show', $comic->id);

    }

}
