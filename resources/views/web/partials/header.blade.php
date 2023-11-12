<header class="header-wrapper section">
    <div class="header-top bg-theme-two section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="header-top-info">
                        <p class="text-white">Call us - <a >{{ config('website.call-us') }}</a></p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="header-buttons">
                        <a class="header-btn btn" href="{{route('properties.create')}}">Add Property</a>
                        <a class="header-btn btn-border" href="register.html">Register</a>
                        <a class="header-btn" href="login.html">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-section section">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-2 col-6">
                    <div class="header-logo">
                        <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
                    </div>
                </div>

                <div class="col-lg-10 col-6">
                    <div class="header-mid_right-bar">
                        <nav class="main-menu d-lg-block d-none">
                            <ul>
                                <li class="has-dropdown"><a href="/">Home</a></li>
                                <li class="has-dropdown"><a href="service.html">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="service.html">Services</a></li>
                                        <li><a href="single-service.html">Single Services</a></li>
                                    </ul>
                                </li>
                                <li><a href="features.html">Features</a></li>
                                <li class="has-dropdown"><a href="{{route('properties.index')}}">Properties</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('properties.index')}}">Properties</a></li>

                                        @auth
                                            <li><a href="{{ route('myProperty', auth()->user()->id) }}">Your Properties</a></li>
                                        @endauth

                                    </ul>
                                </li>
                                <li class="has-dropdown"><a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li class="has-dropdown menu-item-has-children"><a href="blog.html">Blog Page</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Blog Page</a></li>
                                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about-us.html">About Page</a></li>
                                        <li><a href="create-agency.html">Create agency</a></li>
                                        <li><a href="login.html">Login Page</a></li>
                                        <li><a href="register.html">Register Page</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown"><a href="{{route('web.agents')}}">Agent</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('web.agents')}}">Agent</a></li>
{{--                                        <li><a href="{{route('agent.details')}}">Agent Details</a></li>--}}
                                    </ul>
                                </li>
                                <li><a href="{{route('contact.index')}}">Contact</a></li>
                            </ul>
                        </nav>
                        <div id="search-overlay-trigger" class="search-icon">
                            <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <div class="mobile-menu order-12 d-block d-lg-none col"></div>

            </div>
        </div>
    </div>
    <!-- Header Section End -->
</header>
