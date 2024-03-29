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

                <div class="options-cont">
                    <div>
                        <a class='edit' href="{{route('comics.edit', $comic->id)}}">EDIT</a>
                    </div>
                    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type='submit' class='delete' id="delete-button">DELETE</button>
                    </form>

                </div>
            </div>

        </div>

    </div>
</main>


<script>

const deleteButton = document.getElementById('delete-button');

deleteButton.addEventListener('click',function() {
    alert('Are You Sure To Delete This Comic? The Action Is Irreversible');
});

</script>

@endsection
