@section('title')
Theta - Product Detail
@endsection
@extends('layouts.main')
@section('style')
<!-- Summernote css -->
<link href="{{ asset('assets/plugins/summernote/summernote-bs4.css') }}" rel="stylesheet" type="text/css" />
<!-- Dropzone css -->
<link href="{{ asset('assets/plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Création d'une annonce</h4>
            <div class="breadcrumb-list">

            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <button onclick="event.preventDefault(); document.getElementById('form-annonce').submit();" class="btn btn-primary">Publier</button>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-8 col-xl-9">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Annonces Detaill</h5>
                </div>
                <div class="card-body">
                    <form id="form-annonce" method="post" action="{{ route('annonces.store') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="productTitle" class="col-sm-12 col-form-label">Titre</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control font-20" name="titre" placeholder="Titre">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="productTitle" class="col-sm-12 col-form-label">Quantité</label>
                                <input type="number" class="form-control" name="quantite" placeholder="1">
                            </div>
                            <div class="col-md-3">
                                <label for="productTitle" class="col-sm-12 col-form-label">Prix</label>
                                <input type="number" class="form-control" name="cout" placeholder="0">
                            </div>
                            <div class="col-md-6">
                                <label for="productTitle" class="col-sm-12 col-form-label">Date disponible</label>
                                <input type="date" class="form-control" name="date_pub" placeholder="Titre">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Description</label>
                            <div class="col-sm-12">
                                <textarea class="summernote" name="description" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-4 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Image</h5>
                </div>
                <div class="card-body">
                    <div class="ecommerce-upload">
                        <form action="#" class="dropzone dz-clickable">
                            <div class="dz-default dz-message">
                                <p class="dash-analytic-icon"><i class="feather icon-plus primary-rgba text-primary"></i></p>
                                <span>Upload Product Featured Image</span>
                            </div>
                        </form>
                        <img src="assets/images/dashboard/cloud.svg" class="img-fluid" alt="cloud">
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@section('script')
<!-- Summernote js -->
<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- Dropzone js -->
<script src="{{ asset('assets/plugins/dropzone/dist/dropzone.js') }}"></script>
<!-- eCommerce Page js -->
<script src="{{ asset('assets/js/custom/custom-ecommerce-product-detail-page.js') }}"></script>
@endsection
