@extends('dashboard.partials.master')
@section('content')

    <!-- begin :: Subheader -->
    <div class="toolbar">

        <div class="container-fluid d-flex flex-stack">

            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                 data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                 class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">

                <!-- begin :: Title -->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Properties</h1>
                <!-- end   :: Title -->

                <!-- begin :: Separator -->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!-- end   :: Separator -->


            </div>

        </div>

    </div>
    <!-- end   :: Subheader -->

    <div class="card">
        <!-- begin :: Card body -->
        <div class="card-body p-0">
            <!-- begin :: Form -->
            <form class="form" method="post">
                @csrf
                <!-- begin :: Card header -->
                <div class="card-header d-flex align-items-center">
                    <h3 class="fw-bolder text-dark"> Property Details</h3>
                </div>
                <!-- end   :: Card header -->

                <!-- begin :: Inputs wrapper -->
                <div class="px-8 py-4">


                    <!-- begin :: Row -->
                    <div class="row mb-8">

                        <!-- begin :: Column -->
                        <div class="col-md-6 fv-row">

                            <label class="fs-5 fw-bold mb-2">Title</label>
                            <div class="form-floating">
                                <input type="text" disabled class="form-control" value="{{ $property->title }}">

                            </div>

                        </div>
                        <!-- end   :: Column -->

                        <!-- begin :: Column -->
                        <div class="col-md-6 fv-row">

                            <label class="fs-5 fw-bold mb-2">Price</label>
                            <div class="form-floating">
                                <input type="text" disabled class="form-control" value="{{ $property->price }}"/>

                            </div>

                        </div>
                        <!-- end   :: Column -->

                    </div>
                    <!-- end   :: Row -->

                    <!-- begin :: Row -->
                    <div class="row mb-8">

                        <!-- begin :: Column -->
                        <div class="col-md-6 fv-row">

                            <label class="fs-5 fw-bold mb-2">Description</label>
                            <div class="form-floating">
                                <input type="text" disabled class="form-control" value="{{ $property->description }}">

                            </div>



                        </div>

                        <div class="col-md-6 fv-row">

                            <label class="fs-5 fw-bold mb-2">Location</label>
                            <div class="form-floating">
                                <input type="text" disabled class="form-control" value="{{ $property->location }}">

                            </div>



                        </div>
                        <!-- end   :: Column -->

                    </div>
                    <div class="row mb-8">

                        <!-- begin :: Column -->
                        <div class="col-md-6 fv-row">

                            <label class="fs-5 fw-bold mb-2">Type</label>
                            <div class="form-floating">
                                <input type="text" disabled class="form-control" value="{{ $property->type }}">

                            </div>



                        </div>

                        <div class="col-md-6 fv-row">

                            <label class="fs-5 fw-bold mb-2">Status</label>
                            <div class="form-floating">
                                <input type="text" disabled class="form-control" value="{{ $property->status }}">

                            </div>



                        </div>
                        <!-- end   :: Column -->

                    </div>
                    <div class="row mb-8">

                        <!-- begin :: Column -->
                        <div class="col-md-6 fv-row">

                            <label class="fs-5 fw-bold mb-2"> No.Bedroom</label>
                            <div class="form-floating">
                                <input type="text" disabled class="form-control" value="{{ $property->bedroom }}">

                            </div>



                        </div>

                        <div class="col-md-6 fv-row">

                            <label class="fs-5 fw-bold mb-2">No.Bathroom</label>
                            <div class="form-floating">
                                <input type="text" disabled class="form-control" value="{{ $property->bathroom }}">

                            </div>



                        </div>
                        <!-- end   :: Column -->

                    </div>
                    <div class="row mb-8">

                        <!-- begin :: Column -->
                        <div class="col-md-6 fv-row">

                            <label class="fs-5 fw-bold mb-2"> No.garage</label>
                            <div class="form-floating">
                                <input type="text" disabled class="form-control" value="{{ $property->garage }}">

                            </div>



                        </div>

                        <div class="col-md-6 fv-row">

                            <label class="fs-5 fw-bold mb-2">Area</label>
                            <div class="form-floating">
                                <input type="text" disabled class="form-control" value="{{ $property->area }}">

                            </div>



                        </div>
                        <!-- end   :: Column -->

                    </div>


                    <!-- end   :: Row -->


                </div>
                <!-- end   :: Inputs wrapper -->

                <!-- begin :: Form footer -->
                <div class="form-footer p-8 text-end">

                    <!-- begin :: Submit btn -->
                    <a class="btn btn-primary" href="{{ route('dashboard.property.index') }}">
                        Back
                    </a>
                    <!-- end   :: Submit btn -->

                </div>
                <!-- end   :: Form footer -->
            </form>
            <!-- end   :: Form -->
        </div>
        <!-- end   :: Card body -->
    </div>

@endsection
