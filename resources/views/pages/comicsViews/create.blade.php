@extends('layouts.app')

@section('title', 'Add A New Comic')

@section('content')

    <main>
        <div class="container-1">
            <div class="current-series">ADD A NEW COMIC:</div>

            <form action="{{ route('comics.store') }}" method="POST">

                @csrf

                <input type="text" name="title" id="title" placeholder="Insert The Title:" value="{{ old('title') }}">
                @error('title')
                    <div class="display-error">{{ $message }} </div>
                @enderror

                <textarea name="description" id="description" cols="30" rows="10" placeholder="Insert The Description:">{{ old('description') }}</textarea>
                @error('description')
                    <div class="display-error">{{ $message }} </div>
                @enderror

                <input type="text" name="thumb" id="thumb" placeholder="Insert The Comic Thumb:"
                    value="{{ old('thumb') }}">
                @error('thumb')
                    <div class="display-error">{{ $message }} </div>
                @enderror

                <input type="number" name="price" id="price" placeholder="Insert The Price:" min="0"
                    value="{{ old('price') }}">
                @error('price')
                    <div class="display-error">{{ $message }} </div>
                @enderror

                <input type="text" name="series" id="series" placeholder="Insert The Series:"
                    value="{{ old('series') }}">
                @error('series')
                    <div class="display-error">{{ $message }} </div>
                @enderror

                <input type="date" name="sale_date" id="sale_date" placeholder="Insert A Sale Date:"
                    value="{{ old('sale_date') }}">
                @error('date')
                    <div class="display-error">{{ $message }} </div>
                @enderror

                <input type="text" name="type" id="type" placeholder="Insert The Comic Type:"
                    value="{{ old('type') }}">
                @error('type')
                    <div class="display-error">{{ $message }} </div>
                @enderror

                <button class='addNewComic' type="submit">SEND</button>
            </form>

        </div>
    </main>

@endsection
