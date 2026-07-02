@extends('layout.app')

@section('title', 'Admin Profile')

@section('admin')
    <div class="py-4">
        <h2 class="fw-bold mb-3">Profile</h2>
        <p class="text-muted mb-4">Update your profile image and password.</p>

        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body text-center">
                        <div class="rounded-circle bg-dark text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 96px; height: 96px; font-size: 2rem;">
                            A
                        </div>
                        <h5 class="fw-semibold">Admin</h5>
                        <p class="text-muted">Upload an image to personalize your profile.</p>
                        <input type="file" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body">
                        <h5 class="fw-semibold mb-3">Change Password</h5>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">New Password</label>
                                <input type="password" class="form-control" placeholder="At least 8 characters">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Confirm password">
                            </div>
                            <button class="btn btn-dark">Update Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
