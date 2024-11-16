@extends('layout.app')

@section('meta') @endsection

@section('title') Index @endsection

@section('styles')
<!-- Page CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/cards-statistics.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/cards-analytics.css') }}" />
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row g-6">
        <!-- Gamification Card -->
        <!-- <div class="col-md-12 col-xxl-8"> -->
        <div class="col-md-12 col-xxl-12">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-md-6 order-2 order-md-1">
                        <div class="card-body">
                            <h4 class="card-title mb-4">
                                Congratulations
                                <span class="fw-bold">John!</span> 🎉
                            </h4>
                            <p class="mb-0">
                                <!-- You have done 68% 😎 more sales today. -->
                            </p>
                            <p>Check your your profile.</p>
                            <a href="javascript:;" class="btn btn-primary">View Profile</a>
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-md-end order-1 order-md-2">
                        <div class="card-body pb-0 px-0 pt-2">
                            <img src="{{ asset('assets/img/illustrations/illustration-john-light.png') }}" height="186"
                                class="scaleX-n1-rtl" alt="View Profile"
                                data-app-light-img="illustrations/illustration-john-light.png"
                                data-app-dark-img="illustrations/illustration-john-dark.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Gamification Card -->
    </div>
</div>

@endsection

@section('scripts')
<!-- Page JS -->
<script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
@endsection