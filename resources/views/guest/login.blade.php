@extends('layout.app')

@section('title', $mode === 'register' ? 'Create Account' : 'Login')

@section('guest')
    <div class="row justify-content-center py-5">
        <div class="col-lg-10">
            <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-5 bg-dark text-white p-4 p-lg-5 d-flex flex-column justify-content-center">
                        <div class="display-6 mb-3">📘</div>
                        <h2 class="fw-bold">Welcome to SMS</h2>
                        <p class="text-white-50 mb-0">Manage students, teachers, and subjects in one clean and organized place.</p>
                    </div>

                    <div class="col-md-7 p-4 p-lg-5">
                        <div class="text-center mb-4">
                            <h3 class="fw-semibold">
                                {{ $mode === 'register' ? 'Create an account' : 'Login to your account' }}
                            </h3>
                            <p class="text-muted mb-0">
                                {{ $mode === 'register' ? 'Join SMS to get started quickly.' : 'Access your dashboard securely.' }}
                            </p>
                        </div>

                        <form id="authForm" novalidate method="POST" action="{{ $mode === 'register' ? route('register.submit') : route('login.submit') }}">
                            @csrf

                            @if($errors->any() && $mode !== 'register')
                                <div class="alert alert-danger py-2 mb-3" role="alert">
                                    {{ $errors->first() }}
                                </div>
                            @endif

                            @if($mode === 'register')
                                <div class="mb-3">
                                    <label class="form-label">Full Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                        <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter your name">
                                    </div>
                                    <div class="form-text text-danger d-none" id="nameError"></div>
                                </div>
                            @endif

                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter your email">
                                </div>
                                <div class="form-text text-danger d-none" id="emailError"></div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                                </div>
                                <div class="form-text text-danger d-none" id="passwordError"></div>
                            </div>

                            @if($mode === 'register')
                                <div class="mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-shield-lock-fill"></i></span>
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm your password">
                                    </div>
                                    <div class="form-text text-danger d-none" id="confirmPasswordError"></div>
                                </div>
                            @endif

                            <button type="submit" class="btn btn-dark w-100 rounded-pill">
                                {{ $mode === 'register' ? 'Register' : 'Login' }}
                            </button>
                        </form>

                        <div class="text-center mt-3">
                            @if($mode === 'register')
                                <p class="small text-muted mb-0">
                                    Already have an account? <a href="{{ route('login') }}" class="text-decoration-none">Login</a>
                                </p>
                            @else
                                <p class="small text-muted mb-0">
                                    Don't have an account? <a href="{{ route('register') }}" class="text-decoration-none">Register</a>
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
