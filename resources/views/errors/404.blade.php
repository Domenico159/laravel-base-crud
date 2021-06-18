@extends('layouts.layout_main')


@section('content')
    <main class="pt-5 container text-center">
        <h1 class="mt-5">:(</h1>
        <h2 class="mt-5">Ops.....page not found </h2>

        <a class="btn btn-success mt-5" href="{{ route('comics.index') }}">
            Return to home
        </a>
    </main>
@endsection
