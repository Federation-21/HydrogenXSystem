@php
    $customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/blankLayout')

@section('title', 'Login Basic - Pages')

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
                        <a href="{{ route('home') }}" class="brand-logo align-items-center justify-center">

                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 47.45 47.45" height="38">
                                <defs>
                                    <linearGradient id="linear-gradient" x1="11.02" y1="11.1" x2="18.08"
                                        y2="15.18" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#7367f0" />
                                        <stop offset="1" stop-color="#8f85f3" />
                                    </linearGradient>
                                    <linearGradient id="New_Gradient_Swatch_1" x1="29.41" y1="11.1" x2="36.44"
                                        y2="15.15" xlink:href="#linear-gradient" />
                                    <linearGradient id="New_Gradient_Swatch_1-2" x1="11.62" y1="27.69"
                                        x2="28.99" y2="37.72" xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-2" x1="31.63" y1="7.91" x2="47.45"
                                        y2="7.91" xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-3" x1="0" y1="7.91" x2="15.82"
                                        y2="7.91" xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-4" x1="31.63" y1="39.54" x2="47.45"
                                        y2="39.54" xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-5" x1="0" y1="39.54" x2="15.82"
                                        y2="39.54" xlink:href="#linear-gradient" />
                                </defs>
                                <g id="Layer_2" data-name="Layer 2">
                                    <g id="Layer_1-2" data-name="Layer 1">
                                        <path d="M10.47,13.12a4.06,4.06,0,1,1,4.06,4.06A4.05,4.05,0,0,1,10.47,13.12Z"
                                            style="fill:url(#linear-gradient)" />
                                        <path d="M37,13.12a4.06,4.06,0,1,1-4.06-4A4.06,4.06,0,0,1,37,13.12Z"
                                            style="fill:url(#New_Gradient_Swatch_1)" />
                                        <path
                                            d="M27.44,37.58C21.5,40.77,14.78,33.81,12.35,28A2,2,0,1,1,16,26.46c1.82,4.37,4.89,5.18,12.12,6.54C28.09,33,34.1,34,27.44,37.58Z"
                                            style="fill:url(#New_Gradient_Swatch_1-2)" />
                                        <path
                                            d="M45.47,15.82a2,2,0,0,1-2-2V5.93a2,2,0,0,0-2-2H33.61a2,2,0,1,1,0-3.95h7.91a5.94,5.94,0,0,1,5.93,5.93v7.91A2,2,0,0,1,45.47,15.82Z"
                                            style="fill:url(#linear-gradient-2)" />
                                        <path
                                            d="M2,15.82a2,2,0,0,1-2-2V5.93A5.94,5.94,0,0,1,5.93,0h7.91a2,2,0,1,1,0,4H5.93a2,2,0,0,0-2,2v7.91A2,2,0,0,1,2,15.82Z"
                                            style="fill:url(#linear-gradient-3)" />
                                        <path
                                            d="M41.52,47.45H33.61a2,2,0,1,1,0-4h7.91a2,2,0,0,0,2-2V33.61a2,2,0,1,1,4,0v7.91A5.94,5.94,0,0,1,41.52,47.45Z"
                                            style="fill:url(#linear-gradient-4)" />
                                        <path
                                            d="M13.84,47.45H5.93A5.94,5.94,0,0,1,0,41.52V33.61a2,2,0,1,1,4,0v7.91a2,2,0,0,0,2,2h7.91a2,2,0,1,1,0,4Z"
                                            style="fill:url(#linear-gradient-5)" />
                                    </g>
                                </g>
                            </svg>
                            <h2 class="brand-text text-primary ms-1 mb-0">Prodigy</h2>
                        </a>

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