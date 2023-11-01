@extends('web.partials.master')
@push('styles')

@endpush
@section('content')

    <main class="page-content section">

        <!-- Featured Properites Start -->
        <div class="featured-properites-section section pt-100 pt-md-80 pt-sm-60 pb-100 pb-md-80 pb-sm-60">
            <div class="container">

                <ul class="properties-list nav justify-content-end">
                    <li class="active"><a class="active" href="#all" data-bs-toggle="tab">ALL</a></li>
                    <li><a href="#buy" data-bs-toggle="tab">FOR BUY</a></li>
                    <li><a href="#sale" data-bs-toggle="tab">FOR SALE</a></li>
                    <li><a href="#rent" data-bs-toggle="tab">FOR RENT</a></li>
                </ul>

                <div class="tab-content">
                    {{--     Start  All Properties            --}}
                    <div class="tab-pane active" id="all">
                        <div class="row">
                            @foreach($properties as $property)
                                <div class="col-lg-3 col-md-4 col-12">
                                    <!-- single-property Start -->
                                    <div class="single-property mt-30">
                                        <div class="property-img">
                                            <a href="properties-details.html">
                                                <img src="{{ getImagePath(imageName:$property->image,folder:'property')}}"
                                                     width="300" height="300">
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
                    {{--        End All Properties            --}}

                    {{--        Start Buy Properties            --}}
                    <div class="tab-pane" id="buy">
                        <div class="row">
                            @foreach($properties_buy as $property)
                                <div class="col-lg-3 col-md-4 col-12">
                                    <!-- single-property Start -->
                                    <div class="single-property mt-30">
                                        <div class="property-img">
                                            <a href="properties-details.html">
                                                <img src="{{ getImagePath(imageName:$property->image,folder:'property')}}"
                                                     width="300" height="300">
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
                    {{--         End Buy Properties           --}}

                    {{--        Start Sale Properties            --}}
                    <div class="tab-pane" id="sale">
                        <div class="row">
                            @foreach($properties_sale as $property)
                                <div class="col-lg-3 col-md-4 col-12">
                                    <!-- single-property Start -->
                                    <div class="single-property mt-30">
                                        <div class="property-img">
                                            <a href="properties-details.html">
                                                <img src="{{ getImagePath(imageName:$property->image,folder:'property')}}"
                                                     width="300" height="300">
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
                    {{--        End Buy Properties            --}}
                    {{--        Start Rent Properties            --}}
                    <div class="tab-pane" id="rent">
                        <div class="row">
                            @foreach($properties_rent as $property)
                                <div class="col-lg-3 col-md-4 col-12">
                                    <!-- single-property Start -->
                                    <div class="single-property mt-30">
                                        <div class="property-img">
                                            <a href="properties-details.html">
                                                <img src="{{ getImagePath(imageName:$property->image,folder:'property')}}"
                                                     width="300" height="300">
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
                    {{--        End Buy Properties            --}}
                </div>
            </div>
        </div>
        <!-- Featured Properites End -->

    </main>
@endsection

@push('scripts')

@endpush
