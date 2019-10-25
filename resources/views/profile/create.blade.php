@extends('layouts.master')

@section('main-content')
	<!-- Main content -->
	<div class="content-wrapper">

                <!-- Page header -->
                <div class="page-header page-header-light">
                    <div class="page-header-content header-elements-md-inline">
                        <div class="page-title d-flex">
                            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Forms</span> - Basic Inputs</h4>
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
                                <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                                <a href="form_inputs.html" class="breadcrumb-item">Forms</a>
                                <span class="breadcrumb-item active">Basic inputs</span>
                            </div>

                            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                        </div>

                        <div class="header-elements d-none">
                            <div class="breadcrumb justify-content-center">
                                <a href="#" class="breadcrumb-elements-item">
                                    <i class="icon-comment-discussion mr-2"></i>
                                    Support
                                </a>

                                <div class="breadcrumb-elements-item dropdown p-0">
                                    <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-gear mr-2"></i>
                                        Settings
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                                        <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                                        <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content">

                    <!-- Form inputs -->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">Add Profile</h5>
                        </div>

                        <div class="card-body">

                            <form action="{{ route('profile.store') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <fieldset class="mb-3">
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">User Name</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control text-violet" readonly value="{{ Auth::user()->name }}">
                                            <input type="hidden" name="user_id" class="form-control text-violet" readonly value="{{ Auth::user()->id }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Email Address</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control text-violet" readonly value="{{ Auth::user()->email }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Mobile Number</label>
                                        <div class="col-lg-10">
                                            <input type="text" name="mobile_no" class="form-control text-violet"  value="" placeholder="Mobile Number">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Job</label>
                                        <div class="col-lg-10">
                                            <input type="text" name="job" class="form-control text-violet"  value="" placeholder="Enter your Job">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Address</label>
                                        <div class="col-lg-10">
                                            <textarea name="address" id="" cols="30" rows="3" class="form-control text-violet" placeholder="Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">City</label>
                                        <div class="col-lg-10">
                                            <input type="text" name="city" class="form-control text-violet"  value="" placeholder="Enter your City">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">File input color</label>
                                        <div class="col-lg-10">
                                            {{-- <input type="file" name="profile" class="form-control-uniform-custom"> --}}
                                            <input type="file" name="upload_image" id="upload_image" />
                                            <textarea style="display:none;" name="profile" id="profile"></textarea>
                                        </div>
                                    </div>
                                    <div id="uploaded_image"></div>
                                    <div id="imageContainer">
                                        <img id="preview" src="" alt="">
                                    </div>

                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form inputs -->
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

    <div id="uploadimageModal" class="modal" role="dialog">
        <div class="modal-dialog">
         <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title">Upload & Crop Image</h4>
               </div>
               <div class="modal-body">
                 <div class="row">
              <div class="col-md-8 text-center">
               <div id="image_demo" style="width:350px; margin-top:30px"></div>
              </div>
              <div class="col-md-4" style="padding-top:30px;">
               <br />
               <br />
               <br/>
               <button class="btn btn-success crop_image">Crop & Upload Image</button>
            </div>
           </div>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
            </div>
           </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('js/croppie.js') }}"></script>
<script>

// $image_crop = $('#image_demo').croppie({
//     enableExif: true,
//     viewport: {
//       width:200,
//       height:200,
//       type:'square' //circle
//     },
//     boundary:{
//       width:300,
//       height:300
//     }
//   });

//   $('#upload_image').on('change', function(){
//     var reader = new FileReader();
//     reader.onload = function (event) {
//       $image_crop.croppie('bind', {
//         url: event.target.result
//       }).then(function(){
//         console.log('jQuery bind complete');
//       });
//     }
//     reader.readAsDataURL(this.files[0]);
//     $('#uploadimageModal').modal('show');
//   });

//   $('.crop_image').click(function(event){
//     $image_crop.croppie('result', {
//       type: 'canvas',
//       size: 'viewport'
//     }).then(function(response){
//       $.ajax({
//         url:"upload.php",
//         type: "POST",
//         data:{"image": response},
//         success:function(data)
//         {
//           $('#uploadimageModal').modal('hide');
//           $('#uploaded_image').html(data);
//         }
//       });
//     })
//   });




    $image_crop = $('#image_demo').croppie({
        enableExif: true,
        viewport: {
            width: 200,
            height: 200,
            type: 'circle'
        },
        boundary: {
            width: 300,
            height: 300
        }
    });

    $('#upload_image').on('change', function(){
        var reader = new FileReader();
        reader.onload = function (event) {
            $image_crop.croppie('bind', {
                url: event.target.result
            }).then(function(){
                // $uploadCrop.croppie('setZoom', 0);
                // console.log('jQuery bind complete');
            });
        }
        reader.readAsDataURL(this.files[0]);
        $('#uploadimageModal').modal('show');
    });
    $('.crop_image').click(function(event){
        $image_crop.croppie('result', {
        type: 'canvas',
        size: 'viewport'
        }).then(function(response){
            $('#uploadimageModal').modal('hide');
             $("#preview").attr('src', response);
             $("#profile").text(response);
        });
    });
</script>

@endsection

