@extends('layouts.front')

@section('content')
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
                        Top Shops
                    </h4>
                </div>
                <div class="col-md-4">
                    <p class="text-right"><a href="#">
                            <button class="btn btn-primary btn-sm animate-right-3">See All</button>
                        </a></p>
                </div>
            </div>
            <div class="row">

                @forelse($shops as $shop)
                    <div class="col-lg-3 col-md-6 col-xs-6 mb-4">
                        <a href="#">
                            <div class="card shadow">
                                <img src=" {{ asset('assets/img/cover.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <p class="font-weight-bolder">{{ $shop->name }} <span
                                                    class="badge badge-danger font-weight-bolder p-1">New</span>
                                            </p>
                                        </div>
                                    </div>
                                    <a href="{{ route('shops.show',$shop->slug) }}" class="btn btn-paypal">Go to shop</a>
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
                        Popular Shops
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
                            <img src="./assets/img/cover.jpg" class="card-img-top">
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
