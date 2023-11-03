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
                    <h2>Agent</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{route('web.home')}}">Home</a></li>
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

        <div class="row">
            @foreach($agents as $agent)
            <div class="col-lg-3 col-sm-6">
                <!-- Our Agents Start -->
                <div class="our-agents mt-30">
                    <div class="agents-image">
                        <img src="{{ getImagePath(imageName:$agent->image,folder:'agents')}}" alt="">

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
                        <h4>{{$agent->name}}</h4>
                        <p>{{$agent->title}}</p>
                    </div>
                </div>
                <!-- Our Agents End -->
            </div>
            @endforeach
        </div>
        <ul class="page-pagination mt-40">
            @if ($agents->onFirstPage())
                <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
            @else
                <li><a href="{{ $agents->previousPageUrl() }}"><i class="fa fa-angle-left"></i></a></li>
            @endif

            @for ($i = 1; $i <= $agents->lastPage(); $i++)
                @if ($i == $agents->currentPage())
                    <li class="active"><a href="#">0{{ $i }}</a></li>
                @else
                    <li><a href="{{ $agents->url($i) }}">0{{ $i }}</a></li>
                @endif
            @endfor

            @if ($agents->hasMorePages())
                <li><a href="{{ $agents->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a></li>
            @else
                <li class="disabled"><a href="#"><i class="fa fa-angle-right"></i></a></li>
            @endif
        </ul>

    </div>

</div>
<!-- Our Agents Section End -->
@endsection

@push('scripts')

@endpush
