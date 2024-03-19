@extends('layouts.app')

@section('title', 'Add A New Comic')

@section('content')

<main>
    <div class="container-1">
        <div class="current-series">ADD A NEW COMIC:</div>

        <form action="{{route('comics.store')}}" method="POST">

            @csrf

            <input type="text" name="title" id="title" placeholder="Insert The Title:">
            <input type="textarea" name="description" id="description" placeholder="Insert The Description:">
            <input type="text" name="thumb" id="thumb" placeholder="Insert The Comic Thumb:">
            <input type="number" name="price" id="price" placeholder="Insert The Price:" min="0">
            <input type="text" name="series" id="series" placeholder="Insert The Series:">
            <input type="date" name="sale_date" id="sale_date" placeholder="Insert A Sale Date:">
            <input type="text" name="type" id="type" placeholder="Insert The Comic Type:">

            <button class='addNewComic' type="submit">SEND</button>
        </form>

    </div>
</main>

@endsection
