@extends('layouts.app')

@section('title', 'Single Comic')

@section('content')

<main>
    <div class="container-1">

        <div class="current-series">CHOSEN COMIC:</div>

        <div class="card">
            <figure>
                <img src="{{$comic->thumb}}" alt="{{$comic->thumb}}">
            </figure>
            <div>
                <h2>{{$comic->title}}</h2>
                <p>{{$comic->description}}</p>
                <small><b>Price:</b> {{$comic->price}} €</small>
            </div>

        </div>

    </div>
</main>

@endsection
