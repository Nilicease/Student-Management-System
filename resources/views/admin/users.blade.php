@extends('layout.app')

@section('title', 'Manage Users')

@section('admin')
    <div class="py-4">
        <h2 class="fw-bold mb-3">Users</h2>
        <p class="text-muted mb-4">Approve, reject, or ban users from here.</p>

        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sample User</td>
                                <td>sample@example.com</td>
                                <td><span class="badge bg-warning text-dark">Pending</span></td>
                                <td>
                                    <button class="btn btn-sm btn-success">Approve</button>
                                    <button class="btn btn-sm btn-danger">Reject</button>
                                    <button class="btn btn-sm btn-secondary">Ban</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
