@extends('layouts.master')

@section('main-content')
    <!-- Main content -->
	<div class="content-wrapper">

                <!-- Page header -->
                <div class="page-header page-header-light">
                    <div class="page-header-content header-elements-md-inline">
                        <div class="page-title d-flex">
                            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">All Users</span></h4>
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
                                <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                                <span class="breadcrumb-item active">All Users</span>
                            </div>
                            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content">

                    <!-- Style combinations -->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">All Registered Users</h5>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                    <a class="list-icons-item" data-action="reload"></a>
                                </div>
                            </div>
                        </div>

                        <table class="table datatable-basic table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="10%">Picture</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>MObile No</th>
                                    <th>Address</th>
                                    <th>City</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td><img src="{{ asset('images/profiles/'.$user->profile) }}" class="rounded-circle" width="32" height="32" alt=""></td>
                                        <td>{{ $user->name }}</td>
                                        <td><a href="#">{{ $user->email }}</a></td>
                                        <td>{{ $user->mobile_no }}</td>
                                        <td>{{ $user->address }}</td>
                                        <td>{{ $user->city }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /style combinations -->

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
