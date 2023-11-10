@extends('web.partials.master')
@push('styles')

@endpush
@section('content')

    <div class="breadcrumb-area section" style="background-image: url(assets/images/bg/breadcrumb.jpg)">
        <div class="container">
            <div class="breadcrumb pt-75 pb-75 pt-sm-70 pb-sm-40 pt-xs-70 pb-xs-40">
                <div class="row">
                    <div class="col">
                        <h2>Edit Properties</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Edit Properties</li>
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
            <form action="{{ route('properties.update',$property) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="add-property-box step-1">
                                    <div class="basic-information-form">
                                        <div class="row">
                                            <div class="col-lg-9 col-md-7 col-12 mb-25">
                                                <div class="input-file">
                                                    <label>Property Title</label>
                                                    <input name="title" type="text" placeholder="Enter your title here" value="{{ old('title') ?? $property->title }}">
                                                    @error('title')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-5 col-12  mb-25">
                                                <div class="input-file">
                                                    <label>Price</label>
                                                    <input name="price" type="text" placeholder="Price $" value="{{ old('price') ?? $property->price }}" >
                                                    @error('price')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror

                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-12 mb-25">
                                                <div class="information-text">
                                                    <label>Property Description</label>
                                                    <textarea name="description" placeholder="Write here">{{ old('description') ?? $property->description }}</textarea>
                                                    @error('description')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                <div class="details-information-box">
                                    <div class="property-search-wrap">
                                        <div class="row row-17">

                                            <div class="col-lg-6 col-md-5 col-12  mb-25">
                                                <div class="input-file">
                                                    <label>Location</label>
                                                    <input name="location" type="text" value="{{ old('location') ?? $property->location }}" placeholder="Location">
                                                    @error('location')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror

                                                </div>
                                            </div>


                                            <div class="col-lg-6 col-md-6 col-12 mb-25">
                                                <label>Property Type</label>
                                                <select name="type" class="nice-select">
                                                    <option value="Department" {{ old('type') == 'Department' ? 'selected' : ($property->type == 'Department' ? 'selected' : '') }}>Department</option>
                                                    <option value="Villa" {{ old('type') == 'Villa' ? 'selected' : ($property->type == 'Villa' ? 'selected' : '') }}>Villa</option>
                                                    <option value="House (With Garden)" {{ old('type') == 'House (With Garden)' ? 'selected' : ($property->type == 'House (With Garden)' ? 'selected' : '') }}>House (With Garden)</option>
                                                </select>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-12 mb-25">
                                                <label>Status</label>
                                                <select name="status" class="nice-select">
                                                    <option value="For Buy" {{ old('status') == 'For Buy' ? 'selected' : ($property->status == 'For Buy' ? 'selected' : '') }}>For Buy</option>
                                                    <option value="For Sale" {{ old('status') == 'For Sale' ? 'selected' : ($property->status == 'For Sale' ? 'selected' : '') }}>For Sale</option>
                                                    <option value="For Rent" {{ old('status') == 'For Rent' ? 'selected' : ($property->status == 'For Rent' ? 'selected' : '') }}>For Rent</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="row row-10">

                                            <div class="col-lg-3 col-md-6 col-12 mb-25">
                                                <label>No. of Bedroom</label>
                                                <select name="bedroom" class="nice-select">
                                                    <option value="1" {{ old('bedroom') == '1' ? 'selected' : ($property->bedroom == '1' ? 'selected' : '') }}>1</option>
                                                    <option value="2" {{ old('bedroom') == '2' ? 'selected' : ($property->bedroom == '2' ? 'selected' : '') }}>2</option>
                                                    <option value="3" {{ old('bedroom') == '3' ? 'selected' : ($property->bedroom == '3' ? 'selected' : '') }}>3</option>
                                                    <option value="4" {{ old('bedroom') == '4' ? 'selected' : ($property->bedroom == '4' ? 'selected' : '') }}>4</option>
                                                    <option value="5" {{ old('bedroom') == '5' ? 'selected' : ($property->bedroom == '5' ? 'selected' : '') }}>5</option>
                                                </select>
                                            </div>

                                            <div class="col-lg-3 col-md-6 col-12 mb-25">
                                                <label>No. of Bathroom</label>
                                                <select name="bathroom" class="nice-select">
                                                    <option value="1" {{ old('bathroom') == '1' ? 'selected' : ($property->bathroom == '1' ? 'selected' : '') }}>1</option>
                                                    <option value="2" {{ old('bathroom') == '2' ? 'selected' : ($property->bathroom == '2' ? 'selected' : '') }}>2</option>
                                                    <option value="3" {{ old('bathroom') == '3' ? 'selected' : ($property->bathroom == '3' ? 'selected' : '') }}>3</option>
                                                    <option value="4" {{ old('bathroom') == '4' ? 'selected' : ($property->bathroom == '4' ? 'selected' : '') }}>4</option>
                                                </select>
                                            </div>

                                            <div class="col-lg-3 col-md-6 col-12 mb-25">
                                                <label>No. of Garage</label>
                                                <select name="garage" class="nice-select">
                                                    <option value="1" {{ old('garage') == '1' ? 'selected' : ($property->garage == '1' ? 'selected' : '') }}>1</option>
                                                    <option value="2" {{ old('garage') == '2' ? 'selected' : ($property->garage == '2' ? 'selected' : '') }}>2</option>
                                                    <option value="3" {{ old('garage') == '3' ? 'selected' : ($property->garage == '3' ? 'selected' : '') }}>3</option>
                                                </select>
                                            </div>

                                            <div class="col-lg-3 col-md-6 col-12 mb-25">
                                                <label>Area</label>
                                                <input name="area" type="text" placeholder="Area (sqft)" value="{{ old('area') ?? $property->area }}">
                                                @error('area')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="add-property-box step-3 pt-30">

                                <div class="image-preview">
                                    @if($property->image)

                                        <img src="{{ getImagePath(imageName:$property->image,folder:'property')}}"  width="400" height="400" style="display: block; margin: auto;" alt="Current Image">
                                        <p>Upload a new image if you want to change it.</p>
                                    @endif
                                </div>

                                <div class="image-upload-box">
                                    <label class="custom-file-upload">
                                        <span><i class="fa fa-folder-open"></i> Browse Images</span>
                                        <input name="image" type="file">
                                    </label>
                                    @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
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

                                        @php
                                            $index = 0;
                                        @endphp

                                        @foreach($featuresEnum as $option)
                                            @if($index % 2 == 0)
                                                <div class="row">
                                                    @endif
                                                    <div class="col-lg-6 col-md-6 col-6">
                                                        <div class="feature-check box1">
                                                            <input id="feature-{{$index}}" name="features[]" value="{{$option}}" type="checkbox" {{ in_array($option, old('features', [])) ? 'checked' : '' }}>
                                                            <label for="feature-{{$index}}">{{$option}}</label>
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
                                <button type="submit">Edit PROPERTY</button>
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
