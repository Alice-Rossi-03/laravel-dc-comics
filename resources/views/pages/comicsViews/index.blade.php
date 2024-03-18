@extends('layouts.app')

@section('title', 'Comics')

@section('content')

<main>
    <div class="container-2">

        <div class="current-series">CURRENT SERIES</div>

        <div class="container-3">
            <a href="{{route('comics.create')}}" class="addCom">Add a new comic</a>

            <div class="comics-cont">
                @foreach ( $comics as $element)
                <div class="comic">
                    <img src="{{ $element->thumb }}" alt="{{ $element->title }}">
                    <div class="title" style="cursor: pointer;">
                        <a href="{{route('comics.show', ['comic' => $element['id']])}}" class="comic-title">{{ $element->title }}</a>
                    </div>
                    <div class="options-cont">
                        <a class='edit' href="">EDIT</a>
                        <a class='delete' href="">DELETE</a>
                    </div>


                </div>
            @endforeach
            </div>
        </div>
    </div>
</main>

@endsection
