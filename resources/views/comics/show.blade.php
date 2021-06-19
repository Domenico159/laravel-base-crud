@extends('layouts.layout_main')


@section('content')

    <main class="pt-5 container">
        <h1 class="mb-5 mt-3">{{ $item->title }}</h1>
        <div class="actions d-flex mb-3">
            <a class="btn btn-warning m-2" href="{{ route('comics.edit', $item->id) }}">
                EDIT
            </a>
            <form method="POST" action="{{ route('comics.destroy', $item->id) }}">
                @csrf
                @method('DELETE')

                <input class="btn btn-danger m-2" type="submit" value="DELETE">
            </form>
        </div>
        <div class="box d-flex">
            <img class="img-fluid" src="{{ $item->image }}" alt="{{ $item->title }}">
            <div class="text m-5">
                <h2>Series : {{ $item->series }}</h2>
                <h3>Type : {{ $item->type }}</h3>
                <h3>Sale date : {{ $item->sale_date }}</h3>
                <h3>Price : {{ $item->price }} €</h3>
            </div>
        </div>
        <div class="description">
            <p class="mt-3">{{ $item->description }}</p>
        </div>

        <a class="btn btn-success" href="{{ route('comics.index') }}">Back to home</a>

    </main>

@endsection
