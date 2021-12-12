@extends('layouts.front')

@section('content')

    <!-- breadcrum -->
    <section style="background-color:#d4e8fd;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Electronics</a></li>
                            <li class="breadcrumb-item active text-primary font-weight-bolder"
                                aria-current="page">{{ $product->name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrum -->

    <!-- product-->
    <section>
        <div class="container">
            <div class="row">
                <!-- product image -->
                <div class="col-md-6">
                    <div class="tab-content mt-3" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                             aria-labelledby="pills-home-tab"><img src="{{ asset('assets/img/cover.jpg') }}"></div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                             aria-labelledby="pills-profile-tab"><img src="{{ asset('assets/img/cover.jpg') }}"></div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                             aria-labelledby="pills-contact-tab"><img src="{{ asset('assets/img/cover.jpg') }}"></div>
                    </div>
                    <ul class="nav nav-pills mb-3 pt-5" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                               role="tab" aria-controls="pills-home" aria-selected="true"><img
                                    src="{{ asset('assets/img/cover.jpg') }}" style="height:32px; width:auto;"></a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                               role="tab" aria-controls="pills-profile" aria-selected="false"><img
                                    src="{{ asset('assets/img/cover.jpg') }}" style="height:32px; width:auto;"></a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                               role="tab" aria-controls="pills-contact" aria-selected="false"><img
                                    src="{{ asset('assets/img/cover.jpg') }}" style="height:32px; width:auto;"></a>
                        </li>
                    </ul>
                </div>
                <!-- end of product image -->

                <div class="col-md-6">
                    <h2 class="font-weight-bolder text-primary mt-3 mb-3">{{ $product->name }}</h2>
                    <h4><span class="font-weight-bolder">{{ number_format($product->price) }} XAF</span> <span
                            class="text-sm text-muted"
                            style="text-decoration:line-through; font-size:14pt;">2,000 XAF</span>
                    </h4>
                    <p class="text-success" style="font-size:10pt;"><span><svg xmlns="http://www.w3.org/2000/svg"
                                                                               width="16" height="16"
                                                                               fill="currentColor"
                                                                               class="bi bi-file-earmark-text"
                                                                               viewBox="0 0 16 16">
  <path
      d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
  <path
      d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
</svg></span>
                    </p>
                    <!-- description -->
                    <p>
                        {!! $product->description !!}
                    </p>
                    <!-- end of description -->

                    <!-- order buttons -->
                    <p><a href="{{ route('cart.add',$product->id) }}">
                            <button class="btn btn-primary"><span><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                       height="16" fill="currentColor"
                                                                       class="bi bi-basket" viewBox="0 0 16 16">
  <path
      d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
</svg></span> Add to cart
                            </button>
                        </a> <a href="#"><a class="btn btn-success btn-sm"
                                            href="https://wa.me/{{$product->shop->owner->phone}}?text=Hello i just order this product {{ route('product.details',[$slug,$product->id]) }}"
                                            target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> WhatsApp
                                Me</a></a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- end of product -->

    <!-- description -->
    <section class="bg-white pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4 class="font-weight-bolder">Description</h4>
                    <p>
                        {!! $product->description !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end of description -->
@endsection
