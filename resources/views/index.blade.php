@extends('app')

@section('content')
    <!-- Header-->
    <!-- Header-->
    <header class="container bg-dark-20 py-5">
        <div class="row px-4 px-lg-5 my-5 ">
            <div class="list-group  col">
                @foreach ($catagories as $category)
                    <a href="/?category_id={{ $category->id }}" class="list-group-item">{{$category->name}}</a>
                @endforeach
            </div>
            <div class="text-center text-dark col-6">
                <h1 class="display-4 fw-bolder">Shop in style</h1>
                <p class="lead fw-normal text-dark-50 mb-0">With this shop hompeage template</p>
            </div>
            <div class="col"></div>
        </div>
    </header>
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach($products as $product)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                Sale
                            </div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..."/>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $product->name }}</h5>
                                    <!-- Product price-->
                                   <p class="text-lead"> {{ $product->price }}</p>
                                    <p class="card-text">{{ $product->description }}</p>
                                    <hr />
                                    <p class="card-text">Categor: {{ $product->category->name }}</p>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View
                                        options</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
