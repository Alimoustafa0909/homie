@extends('web.partials.master')
@push('styles')

@endpush
@section('content')
<body>
<!--  search overlay -->
<div class="search-overlay" id="search-overlay">

    <div class="search-overlay__header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 ml-auto col-4">
                    <!-- search content -->
                    <div class="search-content text-right">
                        <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-overlay__inner">
        <div class="search-overlay__body">
            <div class="search-overlay__form">
                <form action="#">
                    <input type="text" placeholder="Search">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End of search overlay -->

<!-- Breadcrumb -->
<div class="breadcrumb-area section" style="background-image: url(assets/images/bg/breadcrumb.jpg)">
    <div class="container">
        <div class="breadcrumb pt-75 pb-75 pt-sm-70 pb-sm-40">
            <div class="row">
                <div class="col">
                    <h2>Service</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{route('web.home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Service</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb -->

<!-- About Section Start -->
<div class="about-section section pt-100 pt-md-80 pt-sm-60">
    <div class="container">
        <div class="row gy-5 align-items-center">

            <div class="col-lg-6 col-md-5">
                <div class="about-properties">
                    <img src="assets/images/about/service.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="about-content">
                    <h2>We always try to provide best <br> services for our customers...</h2>
                    <p>{{config('website.about')}}</p>

                    <div class="row gy-4 row-25">
                       @foreach($random_services as $rand)
                        <div class="col-md-6 col-sm-6">
                            <div class="about-feature">
                                <div class="icon"><img src="{{ getImagePath(imageName:$rand->image,folder:'services')}}" alt=""></div>
                                <div class="content">
                                    <h4>{{$rand->name}}</h4>
                                    <p>{{$rand->description}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- About Section End -->

<!-- Service Section Start -->
<div class="service-section section pt-100 pt-md-80 pt-sm-60">
    <div class="container">

        <div class="section-title text-center  mb-60 mb-md-15 mb-sm-15">
            <h2>Services that we provide</h2>
            <p> {{config('website.about')}}</p>
        </div>

        <div class="row">
          @foreach($services as $service)
            <div class="col-lg-4 col-sm-6">
                <div class="service-item mb-35">
                    <div class="icon"><img src="{{ getImagePath(imageName:$service->image,folder:'services')}}" alt=""></div>
                    <div class="content fix">
                        <h3>{{$service->name}}</h3>
                        <p>{{$service->description}}</p>
                    </div>
                </div>
            </div>
          @endforeach

        </div>

    </div>
</div>
<!-- Service Section End -->

<!-- Brand Section Start -->
<div class="brand-section section pt-100 pt-md-80 pt-sm-60 pb-100 pb-md-80 pb-sm-60">
    <div class="container">

        <div class="row brand-active">
            <div class="col px-3">
                <div class="single-brand">
                    <a href="#"><img src="assets/images/brand/01.png" alt=""></a>
                </div>
            </div>
            <div class="col px-3">
                <div class="single-brand">
                    <a href="#"><img src="assets/images/brand/02.png" alt=""></a>
                </div>
            </div>
            <div class="col px-3">
                <div class="single-brand">
                    <a href="#"><img src="assets/images/brand/03.png" alt=""></a>
                </div>
            </div>
            <div class="col px-3">
                <div class="single-brand">
                    <a href="#"><img src="assets/images/brand/04.png" alt=""></a>
                </div>
            </div>
            <div class="col px-3">
                <div class="single-brand">
                    <a href="#"><img src="assets/images/brand/05.png" alt=""></a>
                </div>
            </div>
            <div class="col px-3">
                <div class="single-brand">
                    <a href="#"><img src="assets/images/brand/02.png" alt=""></a>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Brand Section End -->

</body>
@endsection

@push('scripts')

@endpush

