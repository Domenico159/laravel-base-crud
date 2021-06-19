@extends('layouts.layout_main')


@section('content')

    <main class="pt-5 container">
        <h1 class="mb-5 mt-3">New Cartoon</h1>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form class="mt-3 pb-5" action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="mb-3">
                        <label class="control-label" for="title">Title</label>
                        <input name="title" class="form-control" id="title" type="text">
                    </div>

                    <div class="mb-3">
                        <label class="control-label" for="description">Description</label>
                        <textarea name="description" class="form-control" id="description"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="control-label" for="image">Url image</label>
                        <input name="image" class="form-control" id="image" type="text">
                    </div>


                    <div class="mb-3">
                        <label class="control-label" for="series">Series</label>
                        <input name="series" class="form-control" id="series" type="text">
                    </div>


                    <div class="mb-3">
                        <label class="control-label" for="type">Type</label>
                        <input name="type" class="form-control" id="type" type="text">
                    </div>


                    <div class="mb-3">
                        <label class="control-label" for="sale_date">Sale date</label>
                        <input name="sale_date" class="form-control" id="sale_date" type="text">
                    </div>


                    <div class="mb-3">
                        <label class="control-label" for="price">Price</label>
                        <input name="price" class="form-control" id="price" type="text">
                    </div>

                    <button class="btn btn-primary" type="submit">
                        Create
                    </button>

                </form>
            </div>
        </div>

    </main>

@endsection
