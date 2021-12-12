<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body class="bg-soft">
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-light navbar-theme-white mb-4">
    <div class="container position-relative">
        <a class="navbar-brand mr-lg-3" href="#">
            <img class="navbar-brand-dark" src="../../assets/brand/light.svg" alt="menuimage">
            <img class="navbar-brand-light" src="../../assets/brand/dark.svg" alt="menuimage">
        </a>
        <div class="navbar-collapse collapse" id="navbar-default-primary">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col collapse-brand">
                        <a href="#">
                            <img src="../../assets/img/brand/dark.svg" alt="menuimage">
                        </a>
                    </div>
                    <div class="col collapse-close">
                        <i class="fas fa-times" data-toggle="collapse" role="button"
                           data-target="#navbar-default-primary" aria-controls="navbar-default-primary"
                           aria-expanded="false" aria-label="Toggle navigation"></i>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav w-75 ">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search products"
                           aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="button" id="button-addon2">
                                        <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                            </svg>
                                    </span>
                        </button>
                    </div>
                </div>
            </ul>

            <ul class="navbar-nav navbar-nav-hover ml-auto">

                @auth
                    <li class="nav-item">
                        <form action=" {{ url('/logout') }} " method="POST">
                            @csrf
                            <input type="submit" value="Logout"/>
                        </form>
                    </li>
                    @if(isset(auth()->user()->shop->is_active) && auth()->user()->shop->is_active && (auth()->user()->shop->user_id == auth()->user()->id))
                        <li class="nav-item">
                            <a href="{{ route('admin.index') }}" class="nav-link font-weight-bold">Go to your shop</a>
                        </li>
                    @else
                        @if(isset(auth()->user()->shop->is_active) && !auth()->user()->shop->is_active && (auth()->user()->shop->user_id == auth()->user()->id))
                            <li class="nav-item">
                                <a href="#" class="nav-link font-weight-bold">Shop under Verification</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('shops.create') }}" class="nav-link font-weight-bold">Create your
                                    shop</a>
                            </li>
                        @endif
                    @endif
                @else

                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link font-weight-bold">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="{{ route('register') }}">Sign Up</a>
                    </li>
                @endauth
                <li class="nav-item">
                    @auth
                        <a href="{{ route('cart.index') }}" class="nav-link">
                        <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-cart-fill" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                    </span>

                            <span class="pt-1">Cart</span>
                            <div class="badge badge-danger">

                                {{Cart::session(auth()->id())->getContent()->count()}}

                            </div>
                            @endauth
                        </a>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler ml-2" type="button" data-toggle="collapse"
                    data-target="#navbar-default-primary" aria-controls="navbar-default-primary"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</nav>

@if(session('message'))

    <div class="alert alert-success text-center" role="alert">
        <strong>{{ session('message') }}</strong>
    </div>
@endif

@if(session('error'))

    <div class="alert alert-danger text-center" role="alert">
        <strong>{{session('error')}} </strong>
    </div>
@endif
<!-- navbarend-->
@yield('content')

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/headroom.min.js') }}"></script>
<script src="{{ asset('assets/js/countUp.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/smooth-scroll.polyfills.min.js') }}"></script>
<script src="{{ asset('assets/js/prism.js') }}"></script>
<script src="{{ asset('assets/js/chartist.min.js') }}"></script>
<script src="{{ asset('assets/js/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('assets/js/image-uploader.min.js') }}"></script>
<script src="{{ asset('assets/js/rocket.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript">
    $('.input-images').imageUploader();
</script>
<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel();
    });
</script>
@livewireScripts
</body>
</html>
