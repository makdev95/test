@section('title')
PLATEFORM B2B - Comptes
@endsection
@extends('layouts.main')
@section('style')

@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Annonces</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="#">Validation</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Annonces</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <button class="btn btn-primary">Add Widget</button>
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
        @foreach($annonces as $annonce)
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-light m-b-30">
                <div class="card-header"><h5 class="card-title">{{ $annonce->titre }}</h5></div>
                <div class="card-body">
                    <p class="card-text">{{ 'Publié le : '.$annonce->date_pub }}</p>
                    <p class="card-text">{{ $annonce->description }}</p>
                    <p class="card-text">{{ 'Par : '.$annonce->user->name }}</p>
                    <div class="custom-control custom-switch">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="statut">
                        <label class="custom-control-label" for="statut">Valider</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- End col -->
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@section('script')

@endsection