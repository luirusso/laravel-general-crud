@extends('layouts.main')

@section('content')
    <section class="container h-100">
        <h1 class="mb-5">
            Products Archive
        </h1>

        <a href="{{ route('products.create') }}" class="btn btn-primary mb-4">+ Add New Product</a>

        <table class="table">
            <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Title
                    </th>
                    <th colspan="2">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>
                            {{ $product->id }}
                        </td>
                        <td>
                            <a href="{{ route('products.show', $product->slug) }}">{{ $product->title }}</a>
                        </td>
                        <td>
                            <button class="btn btn-primary">
                                Edit
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-danger">
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection