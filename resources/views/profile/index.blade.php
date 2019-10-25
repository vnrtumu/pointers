@extends('layouts.master')

@section('main-content')

<!-- Main content -->
<div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Widgets</span> - Content</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                        <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                        <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
                    </div>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{ url('/home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <span class="breadcrumb-item active">Profile</span>
                    </div>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>
            </div>
        </div>
        <!-- /page header -->

        <!-- Content area -->
        <div class="content">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <!-- User details (with sample pattern) -->
                        <div class="card">
                            <div class="card-body bg-blue text-center card-img-top" style="background-image: url(http://demo.interface.club/limitless/assets/images/bg.png); background-size: contain;">
                                <div class="card-img-actions d-inline-block mb-3">
                                    <img class="img-fluid rounded-circle" src="../../../../global_assets/images/placeholders/placeholder.jpg" width="170" height="170" alt="">
                                </div>
                                <h6 class="font-weight-semibold mb-0">Victoria Davidson</h6>
                                <span class="d-block opacity-75">Head of UX</span>
                            </div>
                        </div>
                        <!-- /user details (with sample pattern) -->
                    </div>
                    <div class="col-md-8">
                        <!-- User details (with sample pattern) -->
                        <div class="card">
                            <div class="card-body bg-blue text-center card-img-top" style="background-image: url(http://demo.interface.club/limitless/assets/images/bg.png); background-size: contain;">
                                <h2>Personal Details</h2>
                            </div>
                            <div class="card-body border-top-0">
                                <div class="d-sm-flex flex-sm-wrap mb-3">
                                    <div class="font-weight-semibold">Name:</div>
                                    <div class="ml-sm-auto mt-2 mt-sm-0">Victoria Anna Davidson</div>
                                </div>
                                <div class="d-sm-flex flex-sm-wrap mb-3">
                                    <div class="font-weight-semibold">Phone number:</div>
                                    <div class="ml-sm-auto mt-2 mt-sm-0">+3630 8911837</div>
                                </div>
                                <div class="d-sm-flex flex-sm-wrap mb-3">
                                    <div class="font-weight-semibold">Email:</div>
                                    <div class="ml-sm-auto mt-2 mt-sm-0"><a href="#">corporate@domain.com</a></div>
                                </div>
                                <div class="d-sm-flex flex-sm-wrap">
                                    <div class="font-weight-semibold">Location</div>
                                    <div class="ml-sm-auto mt-2 mt-sm-0"><a href="#">personal@domain.com</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- /user details (with sample pattern) -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /content area -->


        <!-- Footer -->
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                    <i class="icon-unfold mr-2"></i>
                    Footer
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-footer">
                <span class="navbar-text">
                    &copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
                </span>

                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
                    <li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
                    <li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
                </ul>
            </div>
        </div>
        <!-- /footer -->

    </div>
    <!-- /main content -->


@endsection

@section('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        var id  = {{ Auth::user()->id }};
        $(document).load(function(){
            url: {{ route('profile') }},
            type: "POST",
            data: {'id' = id},
            success: function(data){
                alert(data.value1);
                alert(data.value2);
            }
        })
    </script>
@endsection

