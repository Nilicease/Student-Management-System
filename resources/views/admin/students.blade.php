@extends('layout.app')

@section('title', 'Manage Students')

@section('admin')
    <div class="py-4">
        <h2 class="fw-bold mb-3">Students</h2>
        <p class="text-muted mb-4">Assign approved users to become students.</p>

        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sample Student</td>
                                <td>student@example.com</td>
                                <td>Pending</td>
                                <td><button class="btn btn-sm btn-dark">Assign Student</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
