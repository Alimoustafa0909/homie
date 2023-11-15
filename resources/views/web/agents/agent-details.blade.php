@extends('web.partials.master')
@push('styles')

@endpush
@section('content')

    <body>

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
                        <h2>{{$agent->name}}</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Agent</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb -->

    <!-- Our Agents Section Start -->
    <div class="our-agents-section section pt-100 pt-md-80 pt-sm-60 pb-100 pb-md-80 pb-sm-60">
        <div class="container">

            @if( session()->has('success') )
                <div class="alert alert-success" role="alert">
                    {{session()->get('success')}}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Our Agents Start -->
                    <div class="our-agents">
                        <div class="agents-image">
                            <img src="{{ getImagePath(imageName:$agent->image,folder:'agents')}}" alt="">
                        </div>
                        <div class="agents-contents">
                            <h4>{{$agent->name}}</h4>
                            <p>{{$agent->title}}</p>
                        </div>
                    </div>
                    <!-- Our Agents End -->
                </div>

                <div class="col-lg-9">
                    <div class="single-agent-details fix d-md-flex align-items-md-center">
                        <div class="agent-info-text">

                            <h4 class="mb-15 mt-30">Biography</h4>
                            <p>{{$agent->biography}}</p>

                            <div class="agent-project-count">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <!-- counter start -->
                                        <div class="counter-2">
                                            <div class="count-inner d-flex align-items-center">
                                                <i class="fa fa-home"></i>
                                                <h3 class="counter-active-2"> 131</h3>
                                            </div>
                                            <p>AWARD WIN</p>
                                        </div>
                                        <!-- counter end -->
                                    </div>
                                    <div class="col-sm-4">
                                        <!-- counter start -->
                                        <div class="counter-2 ">
                                            <div class="count-inner d-flex align-items-center">
                                                <i class="fa fa-key"></i>
                                                <h3 class="counter-active-2">231</h3>
                                            </div>
                                            <p>Happy Clients</p>
                                        </div>
                                        <!-- counter end -->
                                    </div>
                                    <div class="col-sm-4">
                                        <!-- counter start -->
                                        <div class="counter-2">
                                            <div class="count-inner d-flex align-items-center">
                                                <i class="fa fa-smile-o"></i>
                                                <h3 class="counter-active-2">612</h3>
                                            </div>

                                            <p>PROJECT DONE</p>
                                        </div>
                                        <!-- counter end -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="agent-contact-info">
                            <div class="single-contact-text">
                                <h4>Call Me</h4>
                                <a href="#">{{$agent->phone}} </a>

                            </div>
                            <div class="single-contact-text">
                                <h4>Mail Me</h4>
                                <a href="#">{{$agent->email}}</a>

                            </div>
                            <div class="single-contact-text">
                                <h4>Also Find me here</h4>
                                <ul>
                                    <li>
                                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-google-plus"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="row gy-5 pt-60 pt-sm-40">
                <div class="col-lg-5">
                    <div class="agent-contact-warp">
                        <div class="title mb-35">
                            <h3>Wroking Experience</h3>
                            <p>{{$agent->work_experience}}a</p>
                        </div>


                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="agent-contact-warp">

                        <div class="title mb-35">
                            <h3>Contact for any Inquiry</h3>
                        </div>

                        <div class="comment-form">

                            <form action="{{ route('agent.contact',$agent->id) }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-30">
                                        <input name="name" type="text" placeholder="Your Name">
                                        @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-30">
                                        <input name="subject" type="text" placeholder="Subject">
                                        @error('subject')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-30">
                                        <input name="email" type="email" placeholder="Email">
                                        @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 col-12 mb-30">
                                        <input name="phone" type="tel" placeholder="Phone">
                                        @error('phone')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 mb-30">
                                        <textarea name="message" placeholder="Message"></textarea>
                                        @error('message')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn send-btn btn-circle">Send</button>
                                    </div>

                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Our Agents Section End -->

    <!-- Footer Section Start -->

    <!-- Footer Section End -->



    <!-- JS
============================================ -->

    <!-- Map js code here -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM"></script>
    <!-- Plugins JS -->
    <script src="assets/js/plugins.js"></script>
    <!-- Map Active JS -->
    <script src="assets/js/maplace-active.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    </body>

@endsection

@push('scripts')

@endpush
