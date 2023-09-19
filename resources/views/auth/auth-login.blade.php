@php
    $customizerHidden = 'customizer-hide';

@endphp

@extends('layouts/blankLayout')

@section('title', 'Login')

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
                <!-- Login -->
                <div class="card">
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
                        <h4 class="mb-1 pt-2">Welcome to The CodeBumble! 👋</h4>
                        <p class="mb-4">Please sign-in to your account and start the adventure</p>


                        @if (session('success'))
                            <div class="alert alert-success p-1 text-center">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('status'))
                            <div class="alert alert-info p-1 text-center">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger p-1 text-center">
                                {{ session('error') }}
                            </div>
                        @endif

                        @if ($errors->any() && !Session::has('error'))
                            <div class="alert alert-danger py-1">
                                @foreach ($errors->all() as $error)
                                    <div class="fw-bold text-center">{{ $error }}</div>
                                @endforeach
                            </div>
                        @endif

                        @php
                            if (Session::has('attempt-failed')) {
                                if (Session::get('end_time') < time()) {
                                    session()->forget('attempt-failed', 'end_time');
                                }
                            }
                        @endphp


                        @if (Session::has('attempt-failed'))
                            <div class="alert alert-danger p-1 text-center">
                                {{ Session::get('attempt-failed') }}
                                {{ substr((Session::get('end_time') - time()) / 60, 0, 2) }} Minutes left
                            </div>
                        @else
                            <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email or Username</label>
                                    <input type="text" class="form-control" id="email" name="username"
                                        placeholder="Enter your email or username" autofocus>
                                </div>
                                <div class="mb-3 form-password-toggle">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="password">Password</label>
                                        <a href="{{ route('password.request') }}">
                                            <small>Forgot Password?</small>
                                        </a>
                                    </div>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control" name="password"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="password" />
                                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember-me">
                                        <label class="form-check-label" for="remember-me">
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                                </div>
                            </form>

                            <p class="text-center">
                                <span>New on our platform?</span>
                                <a href="{{ route('register') }}">
                                    <span>Create an account</span>
                                </a>
                            </p>

                            <div class="divider my-4">
                                <div class="divider-text">or</div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
                                    <i class="tf-icons fa-brands fa-facebook-f fs-5"></i>
                                </a>

                                <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
                                    <i class="tf-icons fa-brands fa-google fs-5"></i>
                                </a>

                                <a href="javascript:;" class="btn btn-icon btn-label-twitter">
                                    <i class="tf-icons fa-brands fa-twitter fs-5"></i>
                                </a>
                            </div>
                        @endif


                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>
@endsection
