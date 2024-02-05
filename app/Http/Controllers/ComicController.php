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
    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);
        return View('guest.comic.show', compact('comic'));
    }
}
