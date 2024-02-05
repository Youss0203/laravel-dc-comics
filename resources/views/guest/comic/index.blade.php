@extends('layouts.app')

@section('main-content')


    <section class="comics">
        <div class="row">
            <div class="col-4">
                @foreach ($comics as $comic)
                <div class="card" style="width: 18rem;">
                    <img  src="{{ $comic['thumb'] }}" alt="">
                    <p>{{ $comic['series'] }}</p>
                </div>
                @endforeach
            </div>
        </div>

    </section>

    @endsection