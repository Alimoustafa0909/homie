@extends('web.partials.master')
@push('styles')

@endpush
@section('content')
    <!-- Page Conttent -->
    <main class="page-content section">
        @if( session()->has('message') )
            <div class="alert alert-success" role="alert">
                {{session()->get('message')}}
            </div>
    @endif
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
                                    @foreach($comments as $comment)
                                    <li>
                                        <div class="comment">
                                            <div class="image"><img src="{{getImagePath(imageName:$comment->image,folder:'comments')}}" alt=""></div>
                                            <div class="content">
                                                <h5>{{$comment->name}}</h5>
                                                <div class="d-flex flex-wrap justify-content-between">
                                                    <span class="time">{{$comment->created_at->diffForHumans()}}</span>
                                                </div>
                                                <div class="decs">
                                                    <p> {{$comment->message}} </p>
                                                </div>
                                            </div>
                                        </div>

                                    </li>
                                 @endforeach
                                </ul>

                                <h4>Leave a Comments</h4>

                                <div class="comment-form">
                                    <form action="{{route('comments.store')}}" method="post" enctype="multipart/form-data">

                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb-30"><input type="text" name="name" placeholder="Your Name">
                                                @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 col-12 mb-30"><input type="email" name="email" placeholder="Email">
                                                @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 col-12 mb-30"><input type="text" name="phone" placeholder="Phone">
                                                @error('phone')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror</div>
                                            <div class="col-md-6 col-12 mb-30"><input type="text" name="subject" placeholder="Subject">
                                                @error('subject')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror</div>
                                            <div class="col-md-6 col-12 mb-30"><input hidden="hidden" type="file" name="image" value="{{auth()->user()->image??null}}">
                                                @error('image')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-12 mb-30"><textarea name="message" placeholder="Message"></textarea>
                                                @error('message')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror</div>
                                            <div class="col-12"><button type="submit" class="btn send-btn btn-circle">Send</button></div>
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
