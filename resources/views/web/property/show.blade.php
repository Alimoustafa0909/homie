@extends('web.partials.master')
@push('styles')

@endpush
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-primary">My Properties</h4>
                    </div>
                    <div class="card-body">
                        @if($properties->count() > 0)
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th> Title</th>
                                    <th> Description</th>
                                    <th> Price</th>
                                    <th> Status</th>
                                    <th> Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($properties as $property)
                                    <tr>
                                        <td><img src="{{ getImagePath(imageName:$property->image,folder:'property')}}"
                                                 width="60" height="60"></td>
                                        <td>{{ ($property->title)}}</td>
                                        <td>{{ $property->description}}</td>
                                        <td>{{ $property->price}}</td>
                                        <td>{{ $property->status }}</td>
                                        <td>
                                            <a href="." class="btn btn-light-dark"> Edit</a>
                                            <a href="." class="btn btn-light-primary"> Delete</a>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                    </div>
                    @else
                        <h1> There is no Orders For You </h1>
                        <a type="button"> Continue Shopping</a>
                    @endif

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
    <div class="breadcrumb-area section" style="background-image: url({{asset('assets/images/bg/breadcrumb.jpg')}})">
        <div class="container">
            <div class="breadcrumb pt-75 pb-75 pt-sm-70 pb-sm-40">
                <div class="row">
                    <div class="col">
                        <h2>Properties Details</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Properties Details</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

    <!--// Breadcrumb -->

    <!-- Page Conttent -->
    <main class="page-content section">

        <!-- Featured Properites Start -->
        <div class="properites-sidebar-wrap pt-100 pt-md-80 pt-sm-60 pb-100 pb-md-80 pb-sm-60">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8 col-xl-9">

                        <div class="blog-details-warpper">
                            <div class="details-image mt-30">
                                <img src="{{getImagePath(imageName:$property->image,folder:'property')}}" alt="">
                            </div>
                            <div class="details-contents-wrap">

                                <h3>{{$property->title}}</h3>

                                <p class="mt-10">{{ config('website.about') }} </p>

                                <h4>Description</h4>

                                <p>{{$property->description}}</p>



                                <div class="propertice-details pt-25">
                                    <div class="properties-details-title mb-10">
                                        <h4>Condition</h4>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="single-info">
                                                <strong>Areas:</strong><span>{{$property->area}}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-6">
                                            <div class="single-info">
                                                <strong>Bedroom:</strong><span>{{$property->bedroom}}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="single-info">
                                                <strong>Bathroom:</strong><span> {{$property->bathroom}}</span>
                                            </div>
                                        </div>


                                        <div class="col-md-4 col-sm-6">
                                            <div class="single-info">
                                                <strong>Garage:</strong><span> {{$property->garage}}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-6">
                                            <div class="single-info">
                                                <strong>Address:</strong><span>{{$property->location}}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="single-property-price">
                                                <strong>Price: {{$property->price}} $</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="propertice-details pt-25">
                                    <div class="properties-details-title mb-10">
                                        <h4>Amenities</h4>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-4 col-6">

                                            <ol>
                                                @if(isset($features))
                                                @foreach ($features as $value)
                                                    <li >{{ $value }}</li>
                                                @endforeach
                                                    @endif
                                            </ol>
                                        </div>

                                    </div>
                                </div>


                            </div>

                            <div class="comments-area pt-70 pt-md-50 pt-sm-50 pt-xs-50">
                                <h4>Comments</h4>

                                <ul class="comment-list">
                                    <li>
                                        <div class="comment">
                                            <div class="image"><img src="assets/images/review/01.png" alt=""></div>
                                            <div class="content">
                                                <h5>Luci Chunni</h5>
                                                <div class="d-flex flex-wrap justify-content-between">
                                                    <span class="time">6 hour ago</span>
                                                </div>
                                                <div class="decs">
                                                    <p>There are some business lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiu tepunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudt </p>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="child-comment">
                                            <li>
                                                <div class="comment">
                                                    <div class="image"><img src="assets/images/review/02.png" alt=""></div>
                                                    <div class="content">
                                                        <h5>Devid Bepari</h5>
                                                        <div class="d-flex flex-wrap justify-content-between">
                                                            <span class="time">10 hour ago</span>
                                                        </div>
                                                        <div class="decs">
                                                            <p>There are some business lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiu tempunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="comment">
                                            <div class="image"><img src="assets/images/review/03.png" alt=""></div>
                                            <div class="content">
                                                <h5>Neha Jhograti</h5>
                                                <div class="d-flex flex-wrap justify-content-between">
                                                    <span class="time">6 hour ago</span>
                                                </div>
                                                <div class="decs">
                                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and ising pain borand I will give you a complete account of the system</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <h4>Leave a Comments</h4>

                                <div class="comment-form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb-30"><input type="text" placeholder="Your Name"></div>
                                            <div class="col-md-6 col-12 mb-30"><input type="email" placeholder="Email"></div>
                                            <div class="col-md-6 col-12 mb-30"><input type="text" placeholder="Phone"></div>
                                            <div class="col-md-6 col-12 mb-30"><input type="text" placeholder="Subject"></div>
                                            <div class="col-12 mb-30"><textarea placeholder="Message"></textarea></div>
                                            <div class="col-12"><button class="btn send-btn btn-circle">Send</button></div>
                                        </div>
                                    </form>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="widgets">
                            <div class="single-widget widget-search">
                                <h4 class="widget-title">
                                    <span>Find your home</span>
                                </h4>
                                <div class="search-wrap sidebar-wigets-search">
                                    <form action="#">
                                        <div class="row row-10">

                                            <div class="col-lg-6 col-md-4 col-sm-6 col-12 mt-20">
                                                <select class="nice-select">
                                                <option>For Rent</option>
                                                <option>For Sale</option>
                                            </select>
                                            </div>



                                            <div class="col-lg-6 col-md-4 col-sm-6 col-12 mt-20">
                                                <select class="nice-select">
                                                <option>All Types</option>
                                                <option>Types One</option>
                                                <option>Types Two</option>
                                                <option>Types Three</option>
                                            </select>
                                            </div>

                                            <div class="col-lg-6 col-md-4 col-sm-6 col-12 mt-20">
                                                <select class="nice-select">
                                                <option>Area(sqft)</option>
                                                <option>800(sqft)</option>
                                                <option>1200(sqft)</option>
                                                <option>1600(sqft)</option>
                                            </select>
                                            </div>

                                            <div class="col-lg-6 col-md-4 col-sm-6 col-12 mt-20">
                                                <select class="nice-select">
                                                <option>Bedroom</option>
                                                <option>0 Bedroom</option>
                                                <option>1 Bedroom</option>
                                                <option>2 Bedroom</option>
                                                <option>3 Bedroom</option>
                                                <option>4 Bedroom</option>
                                            </select>
                                            </div>

                                            <div class="col-lg-6 col-md-4 col-sm-6 col-12 mt-20">
                                                <select class="nice-select">
                                                <option>Bathroom</option>
                                                <option>0 Bathroom</option>
                                                <option>1 Bathroom</option>
                                                <option>2 Bathroom</option>
                                                <option>3 Bathroom</option>
                                                <option>4 Bathroom</option>
                                            </select>
                                            </div>

                                            <div class="col-lg-8 mt-20">
                                                <div id="price-range"></div>
                                            </div>

                                            <div class="col-lg-12 mt-20">
                                                <div class="serche-input-box  ml-auto mr-auto">
                                                    <input type="submit" value="search">
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="single-widget widget">
                                <h4 class="widget-title">
                                    <span>New Added Property</span>
                                </h4>
                                <div class="single-propertiy-wigets">
                                    <div class="row">
                                        @foreach($latest as $last)
                                        <div class="col-lg-12 col-md-4">
                                            <div class="single-propertiy mt-30">
                                                <a href="#"><img src="{{getImagePath(imageName:$last->image,folder:'property')}}" alt=""></a>
                                                <div class="propertiy-det-box">
                                                    <h4><a href="#">{{$last->title}}</a></h4>
                                                    <p>Price ${{$last->price}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>

                            <div class="single-widget widget">
                                <h4 class="widget-title">
                                    <span>Our Agent</span>
                                </h4>

                                <div class="row our-widget-agent mt-10">
                                    <div class="col-6">
                                        <div class="widget-agent">
                                            <div class="image">
                                                <a href="#"><img src="assets/images/agents/side-01.jpg" alt=""></a>
                                            </div>
                                            <div class="name">
                                                <h5>Bayazid Smith</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="widget-agent">
                                            <div class="image">
                                                <a href="#"> <img src="assets/images/agents/side-02.jpg" alt=""></a>
                                            </div>
                                            <div class="name">
                                                <h5>Bayazid Smith</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="widget-agent">
                                            <div class="image">
                                                <a href="#"><img src="assets/images/agents/side-03.jpg" alt=""></a>
                                            </div>
                                            <div class="name">
                                                <h5>Bayazid Smith</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="widget-agent">
                                            <div class="image">
                                                <a href="#"><img src="assets/images/agents/side-04.jpg" alt=""></a>
                                            </div>
                                            <div class="name">
                                                <h5>Bayazid Smith</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-widget widget-tag">
                                <h4 class="widget-title">
                                    <span>Tag</span>
                                </h4>
                                <ul class="tag mt-20">
                                    <li><a href="#">Real Estate</a></li>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Duplex</a></li>
                                    <li><a href="#">Villa</a></li>
                                    <li><a href="#">Appartment</a></li>
                                    <li><a href="#">Property</a></li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Featured Properites End -->

    </main>
    <!--// Page Conttent -->
@endsection
@push('scripts')
@endpush
