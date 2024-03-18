@extends('layouts.app')

@section('title', 'Comics')

@section('content')

<main>
    <div class="container-1">

        <div class="current-series">CURRENT SERIES</div>

        @foreach ( $comics as $element)
        <div class="comic">
            <img src="{{ $element->thumb }}" alt="{{ $element->title }}">
            <div class="title" style="cursor: pointer;">
                <a href="{{route('comics.show', ['comic' => $element['id']])}}" class="comic-title">{{ $element->title }}</a>
            </div>

        </div>
        @endforeach


        <a href="#">Load More</a>
    </div>
</main>

@endsection
