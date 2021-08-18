@extends('app')

@section('content')
    <div class="container px-4 px-lg-5 my-5">
        <div class="">
            <h1 class="display-4 fw-bolder">Products</h1>
            <br>
            <a href="{{ route('products.create') }}" class="btn btn-info">New Product</a>
            <br/>
            <br/>
            <table class="table">
                <thead>
                <tr>
                    <th>S/No</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>${{$product->price}}</td>
                        <td class="">
                            <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                                @method("DELETE")
                                @csrf
                                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are You Sure')">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </thead>
            </table>
        </div>
    </div>
@endsection
