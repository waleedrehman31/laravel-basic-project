@extends('app')

@section('content')
    <div class="container px-4 px-lg-5 my-5">
        <div class="">
            <h1 class="display-4 fw-bolder">New Category</h1>
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <label for="name">Name</label>
                <br />
                <input type="text" name="name" value="" class="form-control" />
                <br />
                <input type="submit" value="Save" class="btn btn-primary" />
            </form>
        </div>
    </div>
@endsection

