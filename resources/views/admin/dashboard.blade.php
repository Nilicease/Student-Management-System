@extends('layout.app')

@section('title', 'Admin Dashboard')

@section('admin')
    <div class="py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold mb-1">Admin Dashboard</h2>
                <p class="text-muted mb-0">Overview of users, teachers, students, subjects, and courses.</p>
            </div>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-md-3">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body">
                        <h6 class="text-muted">Users</h6>
                        <h3 class="fw-bold">0</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body">
                        <h6 class="text-muted">Teachers</h6>
                        <h3 class="fw-bold">0</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body">
                        <h6 class="text-muted">Students</h6>
                        <h3 class="fw-bold">0</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body">
                        <h6 class="text-muted">Subjects</h6>
                        <h3 class="fw-bold">0</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body">
                <h5 class="fw-semibold mb-3">Quick Summary</h5>
                <p class="text-muted mb-0">This dashboard is ready for future data integration and management actions.</p>
            </div>
        </div>
    </div>
@endsection
