@extends('app')

@section('content')
    <div class="container px-4 px-lg-5 my-5">
        <div class="">
            <h1 class="display-4 fw-bolder">Category Edit</h1>
            <form action="{{ route('categories.update', $catogery->id) }}" method="POST">
                @method('PUT')
                @csrf
                <label for="name">Name</label>
                <br />
                <input type="text" name="name" value="{{ $catogery->name }}" class="form-control" />
                <br />
                <input type="submit" value="Update" class="btn btn-primary" />
            </form>
        </div>
    </div>
@endsection
