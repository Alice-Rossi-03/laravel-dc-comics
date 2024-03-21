@extends('layouts.app')

@section('title', 'Edit The Comic')

@section('content')

    <main>
        <div class="container-1">
            <div class="current-series">EDIT THE COMIC:</div>

            <form action="{{ route('comics.update', $comic->id) }}" method="POST">

                @csrf
                @method('PUT')

                <input type="text" name="title" id="title" placeholder="Insert The Title:"
                    value="{{ old('title') ?? $comic->title }}" >
                @error('title')
                    <div class="display-error">{{$message}} </div>
                @enderror

                <textarea name="description" id="description" cols="30" rows="10" placeholder="Insert The Description:">{{ old('description') ?? $comic->description }}</textarea>
                @error('description')
                <div class="display-error">{{$message}} </div>
                @enderror

                <input type="text" name="thumb" id="thumb" placeholder="Insert The Comic Thumb:" value="{{ old('thumb') ?? $comic->thumb }}">
                @error('thumb')
                    <div class="display-error">{{$message}} </div>
                @enderror

                <input type="number" name="price" id="price" placeholder="Insert The Price:" min="0" value="{{ old('price') ?? $comic->price }}" >
                @error('price')
                    <div class="display-error">{{$message}} </div>
                @enderror

                <input type="text" name="series" id="series" placeholder="Insert The Series:" value="{{ old('series') ?? $comic->series }}">
                @error('series')
                    <div class="display-error">{{$message}} </div>
                @enderror

                <input type="date" name="sale_date" id="sale_date" placeholder="Insert A Sale Date:" value="{{ old('sale_date') ?? $comic->sale_date }}" >
                @error('date')
                <div class="display-error">{{$message}} </div>
                @enderror

                <input type="text" name="type" id="type" placeholder="Insert The Comic Type:" value="{{ old('type') ?? $comic->type }}">
                @error('type')
                <div class="display-error">{{$message}} </div>
                @enderror

                <button class='addNewComic' type="submit">UPDATE</button>
            </form>

        </div>
    </main>

@endsection
