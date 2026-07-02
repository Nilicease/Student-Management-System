@extends('layout.app')

@section('title', 'Waiting for Approval')

@section('user')
    <div class="row justify-content-center py-5">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-5 text-center">
                    <div class="display-1 mb-3">⏳</div>
                    <h2 class="fw-bold mb-3">Waiting for Approval</h2>
                    <p class="text-muted mb-4">
                        Your account has been registered successfully. Please wait while the administrator reviews and approves your account.
                    </p>
                    <div class="alert alert-warning d-inline-block" role="alert">
                        You will be notified once your account is approved.
                    </div>
                    <div class="mt-4">
                        <a href="{{ url('/') }}" class="btn btn-outline-dark rounded-pill">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
