@extends('web.partials.master')
@push('styles')

@endpush
@section('content')

    <div class="breadcrumb-area section" style="background-image: url(assets/images/bg/breadcrumb.jpg)">
        <div class="container">
            <div class="breadcrumb pt-75 pb-75 pt-sm-70 pb-sm-40 pt-xs-70 pb-xs-40">
                <div class="row">
                    <div class="col">
                        <h2>Add Properties</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Add Properties</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main class="page-content section">

        @if( session()->has('message') )
            <div class="alert alert-success" role="alert">
                {{session()->get('message')}}
            </div>
        @endif

        <!-- Featured Properites Start -->
        <div class="add-properites-wrap pt-110 pt-110 pt-md-90 pt-sm-70 pt-xs-60 pb-110 pb-md-90 pb-sm-70 pb-xs-60">
            <form action="{{ route('properties.store') }}" method="post"    enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="add-property-box step-1">
                                <div class="step-title mb-30">
                                    <h3>Step # 1</h3>
                                </div>
                                <div class="basic-information-box">
                                    <div class="information-title mb-30">
                                        <h4>Basic Information</h4>
                                    </div>
                                    <div class="basic-information-form">
                                        <div class="row">
                                            <div class="col-lg-9 col-md-7 col-12 mb-25">
                                                <div class="input-file">
                                                    <label>Property Title</label>
                                                    <input name="title" type="text" placeholder="Enter your title here">
                                                    @error('title')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-5 col-12  mb-25">
                                                <div class="input-file">
                                                    <label>Price</label>
                                                    <input name="price" type="text" placeholder="Price $">
                                                    @error('price')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-12  mb-25">
                                                <div class="information-text">
                                                    <label>Property Description</label>
                                                    <textarea name="description" placeholder="Write here"></textarea>
                                                    @error('description')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-property-box step-2 pt-30">
                                <div class="step-title mb-30">
                                    <h3>Step # 2</h3>
                                </div>
                                <div class="information-title mb-30">
                                    <h4>Basic Information</h4>
                                </div>
                                <div class="details-information-box">
                                    <div class="property-search-wrap">
                                        <div class="row row-17">

                                            <div class="col-lg-6 col-md-5 col-12  mb-25">
                                                <div class="input-file">
                                                    <label>Location</label>
                                                    <input name="location" type="text" placeholder="Location">
                                                    @error('location')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror

                                                </div>
                                            </div>


                                            <div class="col-lg-6 col-md-6 col-12 mb-25">
                                                <label>Property Type</label>
                                                <select name="type" class="nice-select">
                                                    <option>Department</option>
                                                    <option>Villa</option>
                                                    <option> House (With Garden)</option>
                                                </select>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-12 mb-25">
                                                <label>Status</label>
                                                <select name="status" class="nice-select">
                                                    <option>For Buy</option>
                                                    <option>For Sale</option>
                                                    <option>For Rent</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="row row-10">

                                            <div class="col-lg-3 col-md-6 col-12 mb-25">
                                                <label>No. of Bedroom</label>
                                                <select name="bedroom" class="nice-select">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>

                                                </select>
                                            </div>

                                            <div class="col-lg-3 col-md-6 col-12 mb-25">
                                                <label>No. of Bathroom</label>
                                                <select name="bathroom" class="nice-select">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select>
                                            </div>

                                            <div class="col-lg-3 col-md-6 col-12 mb-25">
                                                <label>No. of Garage</label>
                                                <select name="garage" class="nice-select">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </div>

                                            <div class="col-lg-3 col-md-6 col-12 mb-25">
                                                <label>Area</label>
                                                <input name="area" type="text" placeholder="Area (quft)">
                                                @error('area')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror


                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="add-property-box step-3 pt-30">
                                <div class="step-title">
                                    <h3>Step # 3</h3>
                                </div>
                                <div class="image-upload-inner mt-30">
                                    <div class="information-title mb-25">
                                        <h4>Image gallery</h4>
                                    </div>
                                    <div class="image-upload-box">
                                        <label class="custom-file-upload">
                                            <span><i class="fa fa-folder-open"></i> Browse Images</span> <input
                                                name="image" type="file">
                                            @error('image')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror

                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="add-property-box step-4 pt-30">
                                <div class="row">
                                    <div class="col-lg-4 col-md-5 col-12">
                                        <div class="property-features mt-30">
                                            <div class="information-title mb-30">
                                                <h4>Property Features</h4>
                                            </div>
                                        </div>
                                        {{--   This @PHP function because i want every two options become on different row and also
                                               also to make the check box work correctly --}}
                                        @php
                                            $index = 0;
                                        @endphp

                                        @foreach($featuresEnum as $option)
                                            @if($index % 2 == 0)
                                                <div class="row">
                                                    @endif
                                                    <div class="col-lg-6 col-md-6 col-6">
                                                        <div class="feature-check box1">
                                                            <input id="remember-{{$index}}" name="features[]" value="{{$option}}" type="checkbox">
                                                            <label for="remember-{{$index}}">{{$option}}</label>
                                                        </div>
                                                    </div>
                                                    @if($index % 2 != 0 || $loop->last)
                                                </div>
                                            @endif
                                            @php
                                                $index++;
                                            @endphp
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                            <div class="add-property-submit mt-60">
                                <button type="submit">ADD PROPERTY</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div><!-- Featured Properites End -->

    </main>

@endsection

@push('scripts')

@endpush
