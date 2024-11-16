@extends('auth.layout.app')

@section('title') Login @endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/@form-validation/form-validation.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}" />
@endsection

@section('content')
<!-- Login -->
<div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg position-relative py-sm-12 px-12 py-6">
    <div class="w-px-400 mx-auto pt-5 pt-lg-0">
        <h4 class="mb-1">Welcome to {{ env('APP_NAME') }}</h4>

        <form id="formAuthentication" class="mb-5" action="/" method="post">
            <div class="form-floating form-floating-outline mb-5">
                <input type="text" class="form-control" id="email" name="email"
                    placeholder="Enter your email address" autofocus />
                <label for="email">Email Address</label>
            </div>
            <div class="mb-5">
                <div class="form-password-toggle">
                    <div class="input-group input-group-merge">
                        <div class="form-floating form-floating-outline">
                            <input type="password" id="password" class="form-control" name="password"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                aria-describedby="password" />
                            <label for="password">Password</label>
                        </div>
                        <span class="input-group-text cursor-pointer"><i class="ri-eye-off-line"></i></span>
                    </div>
                </div>
            </div>
            <div class="mb-5 d-flex justify-content-between mt-5">
                <div class="form-check mt-2">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                </div>
                <a href="/" class="float-end mb-1 mt-2">
                    <span>Forgot Password?</span>
                </a>
            </div>
            <button type="submit" class="btn btn-primary d-grid w-100">Sign in</button>
        </form>
    </div>
</div>
<!-- /Login -->
</div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/pages-auth.js') }}"></script>
@endsection