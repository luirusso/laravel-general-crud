@extends('layouts.main')

@section('content')
    <section class="container">
        <h1 class="mb-5">
            Edit "{{ $product->title }}" from Archive
        </h1>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="{{ route('products.update', $product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">
                            Title
                        </label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $product->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">
                            Description
                        </label>
                        <textarea class="form-control" id="description" name="description" rows="6">{{ $product->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">
                            Thumb
                        </label>
                        <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $product->thumb}}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">
                            Price
                        </label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Add Product
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection