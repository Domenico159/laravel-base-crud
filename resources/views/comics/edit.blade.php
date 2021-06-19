@extends('layouts.layout_main')


@section('content')

    <main class="pt-5 container">
        <h1 class="mb-5 mt-3">Edit {{ $item->title }}</h1>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form class="mt-3 pb-5" action="{{ route('comics.update', $item->id) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="mb-3">
                        <label class="control-label" for="title">Title</label>
                        <input value="{{ $item->title }}" name="title" class="form-control" id="title" type="text">
                    </div>

                    <div class="mb-3">
                        <label class="control-label" for="description">Description</label>
                        <textarea rows="6" name="description" class="form-control"
                            id="description">{{ $item->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="control-label" for="image">Url image</label>
                        <input value="{{ $item->image }}" name="image" class="form-control" id="image" type="text">
                    </div>


                    <div class="mb-3">
                        <label class="control-label" for="series">Series</label>
                        <input value="{{ $item->series }}" name="series" class="form-control" id="series" type="text">
                    </div>


                    <div class="mb-3">
                        <label class="control-label" for="type">Type</label>
                        <input value="{{ $item->type }}" name="type" class="form-control" id="type" type="text">
                    </div>


                    <div class="mb-3">
                        <label class="control-label" for="sale_date">Sale date</label>
                        <input value="{{ $item->sale_date }}" name="sale_date" class="form-control" id="sale_date"
                            type="text">
                    </div>


                    <div class="mb-3">
                        <label class="control-label" for="price">Price</label>
                        <input value="{{ $item->price }}" name="price" class="form-control" id="price" type="text">
                    </div>

                    <button class="btn btn-primary" type="submit">
                        Update
                    </button>

                </form>
            </div>
        </div>

    </main>

@endsection
