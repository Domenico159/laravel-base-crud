@extends('layouts.layout_main')


@section('content')

    <main class="pt-5 container">
        <h1 class="mb-5 mt-3">{{ $item->title }}</h1>
        <div class="box d-flex">
            <img class="img-fluid" src="{{ $item->image }}" alt="{{ $item->title }}">
            <div class="text m-5">
                <h2>Series : {{ $item->series }}</h2>
                <h3>Type : {{ $item->type }}</h3>
                <h3>Sale date : {{ $item->sale_date }}</h3>
                <h3>Price : {{ $item->price }} €</h3>
            </div>
        </div>
        <p class="mt-3">{{ $item->description }}</p>

        <a class="btn btn-success" href="{{ route('comics.index') }}">Back to home</a>

    </main>

@endsection
