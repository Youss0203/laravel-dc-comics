@extends('layouts.app')

@section('title', 'Create Comic')

@section('main-content')
    <section id="create" class="container">
        <form action="{{ route('guest.comic.update', $comic->id )}}" method="POST">

            @csrf
            @method('PUT')

            <h1 class="text-center">
                Create new comic
            </h1>
            <div class="form-control">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" value="{{$comic->title}}">
            </div>
            <div class="form-control">
                <label for="description">Description:</label>
                <textarea name="description" id="description" rows="3">{{$comic->description}}"</textarea>
            </div>
            <div class="form-control">
                <label for="price">Price: $</label>
                <input type="number" name="price" id="price" value="{{$comic->price}}">
            </div>
            <div class="form-control">
                <label for="type">Type:</label>
                <input type="text" name="type" id="type" value="{{$comic->type}}">
            </div>
            <div class="form-control">
                <label for="series">Series:</label>
                <input type="text" name="series" id="series" value="{{$comic->series}}">
            </div>
            <div class="form-control">
                <label for="sale_date">Sale date:</label>
                <input type="text" name="sale_date" id="sale_date" value="{{$comic->sale_date}}">
            </div>
            <div class="form-control">
                <label for="thumb">Thumb Url:</label>
                <input type="text" name="thumb" id="thumb" value="{{$comic->thumb}}">
            </div>
            <button type="submit">Modify comic</button>
        </form>
    </section>
@endsection