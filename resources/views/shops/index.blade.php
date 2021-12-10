@extends('layouts.front')

@section('content')

    <!-- Promotion sliders -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <nav class="nav flex-column">
                            <div class="nav-link bg-primary text-white"><span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </span> Category
                            </div>
                            {{--                            @forelse($category as $categories)--}}
                            <a class="nav-link font-weight-bold" href="#">Nom Categorie</a>
                        {{--                        @empty--}}
                        {{--                        @endforelse--}}
                    </div>
                </div>
                <div class="col-md-9">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            {{--                            @forelse($slides as $key => $slide)--}}
                            {{--                                @if($key == 0)--}}
                            <div class="carousel-item active">
                                <img src="#" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <p><a href="#">
                                            <button class="btn btn-primary">Buy now</button>
                                        </a></p>
                                </div>
                            </div>
                            {{--                                @endif--}}
                            {{--                                @if($key >=1 && $key <= 2)--}}
                            <div class="carousel-item">
                                <img src="#" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <p><a href="#">
                                            <button class="btn btn-primary">Buy now</button>
                                        </a></p>
                                </div>
                            </div>
                            {{--                                @endif--}}
                            {{--                                @empty--}}
                            {{--                            @endforelse--}}

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Promotion sliders end -->

    <!-- top deals -->
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4 class="font-weight-bolder">
                    <span class="text-warning">
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                    </span>
                        Top Products
                    </h4>
                </div>
                <div class="col-md-4">
                    <p class="text-right"><a href="#">
                            <button class="btn btn-primary btn-sm animate-right-3">See All</button>
                        </a></p>
                </div>
            </div>
            <div class="row">

                @forelse($products as $product)
                    <div class="col-lg-3 col-md-6 col-xs-6 mb-4">
                        <a href="#">
                            <div class="card shadow">
                                <img src=" {{ asset('assets/img/cover.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <p class="font-weight-bolder">{{ $product->name }} <span
                                                    class="badge badge-danger font-weight-bolder p-1">New</span>
                                            </p>
                                        </div>
                                    </div>
                                    <a href="{{ route('product.details',[$slug,$product->id]) }}" class="btn btn-paypal">details</a>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>
    <!-- top deals end -->

    <!-- top deals -->
    <section class="mt-5 bg-white pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4 class="font-weight-bolder">
                    <span class="text-warning">
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                    </span>
                        Popular Products
                    </h4>
                </div>
                <div class="col-md-4">
                    <p class="text-right"><a href="#">
                            <button class="btn btn-primary btn-sm animate-right-3">See All</button>
                        </a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-xs-6 mb-4">
                    <a href="#">
                        <div class="card shadow">
                            <img src=" {{ asset('assets/img/cover.jpg') }}" class="card-img-top">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <p class="font-weight-bolder">AirPod Pro <span
                                                class="badge badge-danger font-weight-bolder p-1">New</span>
                                        </p>
                                    </div>
                                </div>
                                <h5 class="font-weight-bolder">80,000 CFA</h5>
                                <p class="text-danger text-sm" style="line-height:0.5; text-decoration:line-through;">
                                    90,000 CFA</p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- top deals end -->

@endsection
