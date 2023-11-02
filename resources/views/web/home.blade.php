@extends('web.partials.master')
@push('styles')

@endpush
@section('content')
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

    <!-- Hero Section Start -->
    <div class="hero-section section">

        <div class="hero-slider hero-slider-one">
            <div class="hero-slide-item" style="background-image: url(assets/images/hero/hero-1.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">

                            <div class="hero-content ">
                                <h1>Desilva De Villa</h1>
                                <h3 class="text-white mt-15">24 North Street, California, USA</h3>
                                <p>3520 sqft, 5 Bed, 3 Bath, 2 Garage</p>
                                <div class="hero-price">
                                    <h2 class="text-white">For Sale $54,000</h2>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <div class="about-section section pt-100 pt-md-80 pt-sm-60">
        <div class="container">
            <div class="row gy-5 justify-content-between align-items-center">

                <div class="col-lg-4 offset-lg-1 col-md-5">
                    <div class="about-properties-area">
                        <div class="about-slider_bg"></div>
                        <div class="about-properties-slider">
                            <div class="about-properties-item">
                                <div class="image"><img src="assets/images/about/about-1.jpg" alt=""></div>
                            </div>

                            <div class="about-properties-item">
                                <div class="image"><img src="assets/images/about/about-2.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-7">
                    <div class="about-content">
                        <h2>We never compromize <br> with quality work...</h2>
                        <p>Ortiz is one of the most popular real estate company all around USA. You can find your dream property or build property </p>

                        <div class="row gy-4 row-25">

                            <div class="col-md-6 col-sm-6">
                                <div class="about-feature">
                                    <div class="icon"><img src="assets/images/icons/feature-1.png" alt=""></div>
                                    <div class="content">
                                        <h4>Minimum Cost</h4>
                                        <p>Privide low cost that help all more build real estate</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="about-feature">
                                    <div class="icon"><img src="assets/images/icons/feature-2.png" alt=""></div>
                                    <div class="content">
                                        <h4>Best Marketing</h4>
                                        <p>Privide low cost that help all more build real estate</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="about-feature">
                                    <div class="icon"><img src="assets/images/icons/feature-3.png" alt=""></div>
                                    <div class="content">
                                        <h4>Easy to Search</h4>
                                        <p>You can find your property to simply and easy way</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="about-feature">
                                    <div class="icon"><img src="assets/images/icons/feature-4.png" alt=""></div>
                                    <div class="content">
                                        <h4>Secure</h4>
                                        <p>You can find your property to simply and easy way</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Featured Properites Start -->
    <div class="featured-properites-section section pt-100 pt-md-80 pt-sm-60">
        <div class="container">

            <div class="section-title text-center mb-30 mb-md-20 mb-sm-20">
                <h2>Property for Sale</h2>
            </div>

            <div class="row">

                @foreach($properties_sale as $property)
                <div class="col-lg-3 col-sm-6">
                    <!-- single-property Start -->
                    <div class="single-property mt-30">
                        <div class="property-img">
                            <a href="properties-details.html">
                                <img src="{{getImagePath(imageName: $property->image,folder: 'property')}}" width="300" height="300">
                            </a>
                            <span class="level-stryker">{{$property->status}}</span>
                        </div>
                        <div class="property-desc">
                            <h4><a href="properties-details.html">{{$property->title}} </a></h4>
                            <p>
                                <span class="location">{{$property->location}},</span>
                                <span class="property-info">{{$property->area}} Sqft, {{$property->bedroom}} Bedroom, {{$property->bathroom}} Bathroom, {{$property->garage}} Garage </span>
                            </p>
                            <div class="price-box">
                                <p>Price ${{$property->price}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- single-property End -->
                </div>
                @endforeach
            </div>

        </div>
    </div>
    <!-- Featured Properites End -->

    <!-- Choose Section Start -->
    <div class="choose-section section pt-100 pt-md-80 pt-sm-60">
        <div class="container">
            <div class="row gy-5 align-items-center">

                <div class="col-lg-5">
                    <div class="choose-properties">

                        <div class="choose-provide">

                            <span class="discount-stryker">35% Discount</span>

                            <div class="image-1">
                                <img src="assets/images/propertes/choose-02.jpg" alt="">
                                <div class="price-box">
                                    <p>Price $1,53,000</p>
                                </div>
                            </div>
                            <div class="image-2">
                                <img src="assets/images/propertes/choose-01.jpg" alt="">
                                <div class="price-box">
                                    <p>Price $89,000</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="about-content">
                        <h2>We never compromize <br> with quality work...</h2>
                        <p>Ortiz is one of the most popular real estate company all around USA. You can find your dream property or build property </p>

                        <div class="row row-25">
                            <div class="col-sm-6">
                                <div class="about-feature mb-35">
                                    <div class="icon"><img src="assets/images/icons/feature-5.png" alt=""></div>
                                    <div class="content-two">
                                        <h4>Royel touch paint</h4>
                                        <p>Paint is the mirron of beautifull house build property with us </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="about-feature mb-35">
                                    <div class="icon"><img src="assets/images/icons/feature-6.png" alt=""></div>
                                    <div class="content-two">
                                        <h4>Fully Furnished</h4>
                                        <p>Well decorated and fully fuhed properties is available for all</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="about-feature mb-35">
                                    <div class="icon"><img src="assets/images/icons/feature-7.png" alt=""></div>
                                    <div class="content-two">
                                        <h4>Latest Interior design</h4>
                                        <p>All interior are latest and luxus mirron of beauty dream </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="about-feature mb-35">
                                    <div class="icon"><img src="assets/images/icons/feature-8.png" alt=""></div>
                                    <div class="content-two">
                                        <h4>Non stop security</h4>
                                        <p>Security in our property area is the main priority for our all</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Choose Section End -->

    <!-- Featured Properites Start -->
    <div class="featured-properites-section section pt-100 pt-md-80 pt-sm-60">
        <div class="container">

            <div class="section-title text-center mb-30 mb-md-20 mb-sm-20">
                <h2>Property for Rent</h2>
            </div>

            <div class="row">
                @foreach($properties_rent as $property)
                    <div class="col-lg-3 col-sm-6">
                        <!-- single-property Start -->
                        <div class="single-property mt-30">
                            <div class="property-img">
                                <a href="properties-details.html">
                                    <img src="{{getImagePath(imageName: $property->image,folder: 'property')}}" width="300" height="300">
                                </a>
                                <span class="level-stryker">{{$property->status}}</span>
                            </div>
                            <div class="property-desc">
                                <h4><a href="properties-details.html">{{$property->title}} </a></h4>
                                <p>
                                    <span class="location">{{$property->location}},</span>
                                    <span class="property-info">{{$property->area}} Sqft, {{$property->bedroom}} Bedroom, {{$property->bathroom}} Bathroom, {{$property->garage}} Garage </span>
                                </p>
                                <div class="price-box">
                                    <p>Price ${{$property->price}}</p>
                                </div>
                            </div>
                        </div>
                        <!-- single-property End -->
                    </div>
                @endforeach

            </div>

        </div>
    </div>
    <!-- Featured Properites End -->

    <!-- Ortiz Banner Area Start-->
    <div class="ortiz-banner-area section pt-100 pt-md-80 pt-sm-60">
        <div class="container">
            <div class="banner-inner-box">
                <img src="assets/images/banner/banner-01.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- Ortiz Banner Area End-->

    <!-- Our Agents Section Start -->
    <div class="our-agents-section section pt-100 pt-md-80 pt-sm-60 pb-100 pb-md-80 pb-sm-60 ">
        <div class="container">

            <div class="section-title text-center mb-30 mb-md-20 mb-sm-20">
                <h2>Our Agents</h2>
                <p> one of the most popular real estate company all around USA. You
                    <br> can find your dream property or build property with us</p>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <!-- Our Agents Start -->
                    <div class="our-agents mt-30">
                        <div class="agents-image">
                            <img src="assets/images/agents/agents-01.jpg" alt="">

                            <div class="agents-info">
                                <h3>View Details</h3>
                                <div class="agents-social">
                                    <ul>
                                        <li><a href="https://www.skype.com/en/"><i class="fa fa-skype"></i></a></li>
                                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="agents-contents">
                            <h4>Jassica Thomson</h4>
                            <p>Real Estate Agent</p>
                        </div>
                    </div>
                    <!-- Our Agents End -->
                </div>

                <div class="col-lg-3 col-sm-6">
                    <!-- Our Agents Start -->
                    <div class="our-agents mt-30">
                        <div class="agents-image">
                            <img src="assets/images/agents/agents-06.jpg" alt="">

                            <div class="agents-info">
                                <h3>View Details</h3>
                                <div class="agents-social">
                                    <ul>
                                        <li><a href="https://www.skype.com/en/"><i class="fa fa-skype"></i></a></li>
                                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="agents-contents">
                            <h4>Thomas Eilliams</h4>
                            <p>Real Estate Agent</p>
                        </div>
                    </div>
                    <!-- Our Agents End -->
                </div>

                <div class="col-lg-3 col-sm-6">
                    <!-- Our Agents Start -->
                    <div class="our-agents mt-30">
                        <div class="agents-image">
                            <img src="assets/images/agents/agents-03.jpg" alt="">

                            <div class="agents-info">
                                <h3>View Details</h3>
                                <div class="agents-social">
                                    <ul>
                                        <li><a href="https://www.skype.com/en/"><i class="fa fa-skype"></i></a></li>
                                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="agents-contents">
                            <h4>Sayana Sarlin</h4>
                            <p>Real Estate Agent</p>
                        </div>
                    </div>
                    <!-- Our Agents End -->
                </div>

                <div class="col-lg-3 col-sm-6">
                    <!-- Our Agents Start -->
                    <div class="our-agents mt-30">
                        <div class="agents-image">
                            <img src="assets/images/agents/agents-04.jpg" alt="">

                            <div class="agents-info">
                                <h3>View Details</h3>
                                <div class="agents-social">
                                    <ul>
                                        <li><a href="https://www.skype.com/en/"><i class="fa fa-skype"></i></a></li>
                                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="agents-contents">
                            <h4>Kuddus Boyati</h4>
                            <p>Real Estate Agent</p>
                        </div>
                    </div>
                    <!-- Our Agents End -->
                </div>

            </div>

        </div>
    </div>
    <!-- Our Agents Section End -->

    <!-- Testimonial Section Start -->
    <div class="testimonial-section section pt-100 pt-md-80 pt-sm-60">
        <div class="testimonial-bg" style="background-image: url(assets/images/bg/testimonial.jpg);"></div>
        <div class="container">
            <div class="testimonial-slider">
                <div class="col px-3">
                    <div class="single-testimonial">
                        <div class="testimonial-author">
                            <div class="image">
                                <img src="assets/images/testimonial/outher-01.jpg" alt="">
                            </div>
                            <div class="outhor-info">
                                <h4>Lora Momen Smith</h4>
                                <p>CEO, Momens Group</p>
                            </div>
                        </div>
                        <div class="testimonial-dec">
                            <p>one of the most popular real estate company all around USA. You can find your dream property or the build erty with us. We always provide importance</p>
                        </div>
                    </div>
                </div>
                <div class="col px-3">
                    <div class="single-testimonial">
                        <div class="testimonial-author">
                            <div class="image">
                                <img src="assets/images/testimonial/outher-02.jpg" alt="">
                            </div>
                            <div class="outhor-info">
                                <h4>Zakuline Fernandez </h4>
                                <p>CEO, Momens Group</p>
                            </div>
                        </div>
                        <div class="testimonial-dec">
                            <p>one of the most popular real estate company all around USA. You can find your dream property or the build erty with us. We always provide importance</p>
                        </div>
                    </div>
                </div>
                <div class="col px-3">
                    <div class="single-testimonial">
                        <div class="testimonial-author">
                            <div class="image">
                                <img src="assets/images/testimonial/outher-01.jpg" alt="">
                            </div>
                            <div class="outhor-info">
                                <h4>Lora Momen Smith</h4>
                                <p>CEO, Momens Group</p>
                            </div>
                        </div>
                        <div class="testimonial-dec">
                            <p>Ortiz is one of the most popular real estate company all around USA. You can find your dream property or the build erty with us. We always provide importance</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->

    <!-- Latest Blog Section Start -->
    <div class="latest-blog-section section pt-100 pt-md-80 pt-sm-60 pb-100 pb-md-80 pb-sm-60">
        <div class="container">

            <div class="section-title text-center mb-30 mb-md-20 mb-sm-20">
                <h2>Latest Blog Post</h2>
                <p> one of the most popular real estate company all around USA. You <br> can find your dream property or build property with us</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Single latest blog Start -->
                    <div class="single-latest-blog mt-30">
                        <div class="latest-blog-image">
                            <a href="blog-details.html"><img src="assets/images/blog/blog-s-01.jpg" alt=""></a>
                        </div>
                        <div class="latest-blog-contents">
                            <h4><a href="blog-details.html">Duplex Appartment Latest Design</a></h4>
                            <p><span>May 10, 2019</span> / <span>10 pm</span></p>
                            <p>Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete </p>
                            <a class="read-more" href="blog-details.html">Read More</a>
                        </div>
                    </div>
                    <!-- Single latest blog End -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Single latest blog Start -->
                    <div class="single-latest-blog mt-30">
                        <div class="latest-blog-image">
                            <a href="blog-details.html"><img src="assets/images/blog/blog-s-02.jpg" alt=""></a>
                        </div>
                        <div class="latest-blog-contents">
                            <h4><a href="blog-details.html">Real Estate Fesitval - 2020</a></h4>
                            <p><span>May 08, 2019</span> / <span>03 pm</span></p>
                            <p>Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete </p>
                            <a class="read-more" href="blog-details.html">Read More</a>
                        </div>
                    </div>
                    <!-- Single latest blog End -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Single latest blog Start -->
                    <div class="single-latest-blog mt-30">
                        <div class="latest-blog-image">
                            <a href="blog-details.html"><img src="assets/images/blog/blog-s-03.jpg" alt=""></a>
                        </div>
                        <div class="latest-blog-contents">
                            <h4><a href="blog-details.html">Latest Architectural Real Estate</a></h4>
                            <p><span>May 10, 2019</span> / <span>4 pm</span></p>
                            <p>Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete </p>
                            <a class="read-more" href="blog-details.html">Read More</a>
                        </div>
                    </div>
                    <!-- Single latest blog End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Latest Blog Section End -->

@endsection

@push('scripts')

@endpush
