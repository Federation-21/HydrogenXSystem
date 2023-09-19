@php
    $customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/blankLayout')

@section('title', 'I Forgot My Password')

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
                <!-- Forgot Password basic -->
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
                        @if (session('status'))
                            <div class="alert alert-info p-1 text-center">
                                {{ session('status') }}
                            </div>
                        @else
                            <h4 class="card-title mb-1">Forgot Password? 🔒</h4>
                            <p class="card-text mb-2">Enter your email and we'll send you instructions to reset your
                                password</p>

                            @if ($errors->any())
                                <div class="alert alert-danger py-1">
                                    @foreach ($errors->all() as $error)
                                        <div class="fw-bold text-center">{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif


                            <form class="auth-forgot-password-form mt-2" action="{{ route('password.email') }}"
                                method="POST">
                                @csrf
                                <div class="mb-1">
                                    <label for="forgot-password-email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="forgot-password-email" name="email"
                                        placeholder="john@example.com" aria-describedby="forgot-password-email"
                                        tabindex="1" autofocus required />
                                </div>
                                <button class="btn btn-primary w-100" tabindex="2" type="submit">Send reset
                                    link</button>
                            </form>
                        @endif

                        <p class="mt-2 text-center">
                            <a href="{{ route('login') }}"> <i data-feather="chevron-left"></i> Back to login </a>
                        </p>
                    </div>
                </div>
                <!-- /Forgot Password basic -->
            </div>
        </div>
    @endsection
