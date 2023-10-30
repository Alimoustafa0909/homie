@extends('web.partials.master')
@push('styles')

@endpush
@section('content')
<!-- search overlay -->
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
<div class="breadcrumb-area section" style="background-image: url({{asset('assets/images/bg/breadcrumb.jpg')}})">
    <div class="container">
        <div class="breadcrumb pt-75 pb-75 pt-sm-70 pb-sm-40">
            <div class="row">
                <div class="col">
                    <h2>Contact us</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb -->

<!-- Our Agents Section Start -->
<div class="contact-section section pt-100 pt-md-80 pt-sm-60 pb-100 pb-md-80 pb-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-us-wrap">
                    <div class="contact-title pb-30">
                        <h4>GET IN <span>TOUCH</span></h4>
                        <p>Ortiz is the best theme for elit, sed do eiusmod tempor dolor sit ame tse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minim veniam, quis nostrud exercitation oris nisi </p>
                    </div>

                    <div class="contact-info">
                        <ul>
                            <li>
                                <div class="contact-text d-flex align-items-center">
                                    <i class="glyph-icon flaticon-placeholder"></i>
                                    <p>256, 1st AVE, Manchester <br>125 , Noth England</p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-text d-flex align-items-center">
                                    <i class="glyph-icon flaticon-call"></i>
                                    <p>
                                        <span>Telephone : <a href="#"> +88 (012) 356 958 45</a></span>
                                        <span>Telephone : <a href="#"> +88 (012) 356 958 45</a></span>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-text d-flex align-items-center">
                                    <i class="glyph-icon flaticon-earth"></i>
                                    <p>
                                        <span>Email : <a href="#">info@example.com</a></span>
                                        <span>Web : <a href="#">www.example.com</a></span>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-us-wrap">
                    <h4>Leave a Message</h4>

                    <div class="contact-form">
                        <form id="contact-form" action="https://htmldemo.net/ortiz/ortiz/assets/php/mail.php">
                            <div class="row row-10">
                                <div class="col-md-6 col-12 mb-30"><input name="name" type="text" placeholder="Your Name"></div>
                                <div class="col-md-6 col-12 mb-30"><input name="email" type="email" placeholder="Email"></div>
                                <div class="col-12 mb-30"><textarea name="message" placeholder="Message"></textarea></div>
                                <div class="col-12"><button class="btn send-btn btn-circle">Send</button></div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@push('scripts')
@endpush



