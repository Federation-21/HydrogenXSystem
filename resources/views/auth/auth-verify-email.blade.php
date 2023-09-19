@php
    $customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/blankLayout')

@section('title', 'Verify Your Email')

@section('vendor-style')
    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/@form-validation/umd/styles/index.min.css') }}" />
@endsection

@section('page-style')
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/@form-validation/umd/bundle/popular.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/pages-auth.js') }}"></script>
@endsection

@section('content')
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <!-- verify email basic -->
                <div class="card mb-0">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center mb-4 mt-2">
                            <a href="{{ url('/') }}" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">
                                    <img src="{{ asset('assets/img/logo/solo-coloured.png') }}" alt="Brand Logo"
                                        class="img-fluid" />
                                </span>
                                <span
                                    class="app-brand-text demo text-body fw-bold ms-1">Codebumble Inc.</span>
                            </a>
                        </div>
                        <!-- /Logo -->

                        @if (session('status') == 'verification-link-sent')
                            <div class="alert alert-success p-1 text-center">
                                A new email verification link has been emailed to you!
                            </div>
                        @else
                            <h2 class="card-title fw-bolder mb-1">Verify your email ✉️</h2>
                            <p class="card-text mb-2">
                                We've sent a link to your registered Email Address<span class="fw-bolder"></span> Please
                                follow the
                                link inside to continue.
                            </p>

                            <a href="{{ asset('/') }}" class="btn btn-outline-primary w-100">Skip for now</a>

                            <p class="mt-2 text-center">
                                <span>Didn't receive an email? </span>

                            <form action="{{ route('verification.send') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary w-100">&nbsp;Resend</button>
                            </form>

                            <p class="mt-2 text-center">Or</p>

                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary w-100">&nbsp;Logout</button>
                            </form>
                            </p>
                        @endif
                    </div>
                </div>
                <!-- / verify email basic -->
            </div>
        </div>
    @endsection
