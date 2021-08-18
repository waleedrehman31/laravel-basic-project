@extends('app')

@section('content')
    <div class="container px-4 px-lg-5 my-5">
        <div class="">
            <h1 class="display-4 fw-bolder">New Product</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="name">Name</label>
                <br/>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control"/>
                <br/>

                <label for="price">Price ($)</label>
                <br/>
                <input type="text" name="price" value="{{ old('price') }}" class="form-control"/>
                <br/>

                <label for="description">Description</label>
                <br/>
                <textarea name="description" class="form-control">{{ old('description') }}</textarea>
                <br/>

                <label for="catogery_id">Category</label>
                <br/>
                <select name="catogery_id" id="catogery_id" class="form-control">
                    @foreach($catogeries as $catogery)
                        <option value="{{$catogery->id}}"
                                @if($catogery->id == old("catogery_id") ) selected @endif>{{$catogery->name}}</option>
                    @endforeach
                </select>
                <br/>

                <label for="photo">Photo</label>
                <br/>
                <input type="file" name="photo" class="form-control"/>
                <br/>

                <input type="submit" value="Save" class="btn btn-primary"/>
            </form>
        </div>
    </div>
@endsection

