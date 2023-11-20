@extends('web.partials.master')
@push('styles')

@endpush
@section('content')
<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block;
        }
    </style>

    <main class="page-content section">

        @if( session()->has('success') )
            <div class="alert alert-success" role="alert">
                {{session()->get('success  ')}}
            </div>
        @endif

        <!-- Featured Properites Start -->
        <div class="featured-properites-section section pt-100 pt-md-80 pt-sm-60 pb-100 pb-md-80 pb-sm-60">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="header-left">
                        {{-- Search Component --}}
                        @livewire('header-search-component')
                        {{-- End Search Component --}}
                    </div>

                </div>

                <div class="tab-content">
                    {{--     Start  All Properties            --}}
                    <div class="tab-pane active" id="all">
                        <div class="row">
                            @foreach($properties as $property)
                                <div class="col-lg-3 col-md-4 col-12">
                                    <!-- single-property Start -->
                                    <div class="single-property mt-30">
                                        <div class="property-img">
                                            <a href="{{route('properties.show',$property)}}">
                                                <img src="{{ getImagePath(imageName:$property->image,folder:'property')}}"
                                                     width="300" height="300">
                                            </a>
                                            <span class="level-stryker">{{$property->status}}</span>
                                        </div>
                                        <div class="property-desc">
                                            <h4><a href="{{route('properties.show',$property)}}">{{$property->title}} </a></h4>
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

                    {{--        End Buy Properties            --}}
                </div>
            </div>
        </div>

        <!-- Featured Properites End -->
    </main>
</div>


@endsection

@push('scripts')

@endpush

