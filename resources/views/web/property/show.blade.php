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
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
