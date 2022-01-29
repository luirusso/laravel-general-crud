@extends('layouts.main')

@section('content')
    <section class="container h-100">
        <h1 class="mb-5">
            Products Archive
        </h1>

        <a href="{{ route('products.create') }}" class="btn btn-primary mb-4">+ Add New Product</a>

        {{-- CONFIRM DELETION MESSAGE --}}
        @if (session('deleted'))
            <div class="alert alert-success">
                <strong>
                    Article "{{ session('deleted') }}" successfully deleted.
                </strong>
            </div>
        @endif

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
                            <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <input type="submit" class="btn btn-danger" value="Delete" onclick="return confirm('Are you sure?')">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection