@extends('layouts.layout_main')


@section('content')

    <main class="pt-5 container">
        <h1 class="mb-5 mt-3">Comics</h1>

        @if (session('deleted'))
            <div class="alert alert-success">
                <strong>{{ session('deleted') }}</strong>
                Succesfully deleted item.
            </div>
        @endif

        <table class="table mb-5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Series</th>
                    <th>Sale date</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th colspan="3">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($comics as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->series }}</td>
                        <td>{{ $item->sale_date }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->price }} €</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('comics.show', $item->id) }}">
                                SHOW
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('comics.edit', $item->id) }}">
                                EDIT
                            </a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('comics.destroy', $item->id) }}">
                                @csrf
                                @method('DELETE')

                                <input class="btn btn-danger" type="submit" value="DELETE">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="links d-flex justify-content-center">
            {{ $comics->links() }}
        </div>

    </main>

@endsection
