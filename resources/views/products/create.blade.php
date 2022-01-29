@extends('layouts.main')

@section('content')
    <section class="container">
        <h1 class="mb-5">
            Add New Product to Archive
        </h1>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">
                            Title
                        </label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">
                            Description
                        </label>
                        <textarea class="form-control" id="description" name="description" rows="6"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">
                            Thumb
                        </label>
                        <input type="text" class="form-control" id="thumb" name="thumb">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">
                            Price
                        </label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Add Product
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection