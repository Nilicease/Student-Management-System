@extends('layout.app')

@section('title', 'Logout')

@section('admin')
    <div class="py-4">
        <div class="card border-0 shadow-sm rounded-4 text-center p-5">
            <h2 class="fw-bold mb-3">Logout</h2>
            <p class="text-muted">This area is ready for the logout action.</p>
            <a href="{{ url('/') }}" class="btn btn-dark">Go Home</a>
        </div>
    </div>
@endsection
