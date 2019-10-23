@extends('layouts.master')




@section('main-content')

<div class="container mt-3">
    <div class="col-md-12">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <div class="row">

            <div class="col-md-3">
                <!-- User card with thumb and social icons at the bottom -->
                <div class="card">
                    <div class="card-body text-center">
                        <div class="card-img-actions d-inline-block mb-3">
                            <img class="img-fluid rounded-circle" src="global_assets/images/placeholders/placeholder.jpg" width="170" height="170" alt="">
                            <div class="card-img-actions-overlay card-img rounded-circle">
                                <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                                    <i class="icon-arrow-right7"></i>
                                </a>
                            </div>
                        </div>

                        <h6 class="font-weight-semibold mb-0">Nathan Jacobson</h6>
                        <span class="d-block text-muted">Lead UX designer</span>
                    </div>

                    {{-- <div class="card-footer d-flex justify-content-around text-center p-0">
                        <a href="#" class="list-icons-item flex-fill p-2" data-popup="tooltip" data-container="body" title="Google Drive">
                            <i class="icon-google-drive top-0"></i>
                        </a>
                        <a href="#" class="list-icons-item flex-fill p-2" data-popup="tooltip" data-container="body" title="Twitter">
                            <i class="icon-twitter top-0"></i>
                        </a>
                        <a href="#" class="list-icons-item flex-fill p-2" data-popup="tooltip" data-container="body" title="Github">
                            <i class="icon-github top-0"></i>
                        </a>
                        <a href="#" class="list-icons-item flex-fill p-2" data-popup="tooltip" data-container="body" title="Dribbble">
                            <i class="icon-dribbble top-0"></i>
                        </a>
                    </div> --}}
                </div>
                <!-- /user card with thumb and social icons at the bottom -->
            </div>
        </div>
    </div>
</div>
@endsection
