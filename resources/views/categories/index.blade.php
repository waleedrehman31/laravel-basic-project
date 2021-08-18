@extends('app')

@section('content')
    <div class="container px-4 px-lg-5 my-5">
        <div class="">
            <h1 class="display-4 fw-bolder">Category</h1>
            <br>
            <a href="{{ route('categories.create') }}" class="btn btn-info">New Category</a>
            <br/>
            <br/>
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td class="">
                            <a class="btn btn-primary" href="{{ route('categories.edit', $category->id) }}">Edit</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;">
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
