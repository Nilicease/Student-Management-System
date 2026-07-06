@extends('layout.app')

@section('title', 'Teachers')

@section('admin')
    <div class="py-4">
        <h2 class="fw-bold mb-3">Teachers</h2>
        <p class="text-muted mb-4">Manage teacher records.</p>

        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Employee Number</th>
                                <th>Department</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($teachers as $teacher)
                                <tr>
                                    <td>{{ $teacher->name }}</td>
                                    <td>{{ $teacher->employee_number }}</td>
                                    <td>{{ $teacher->department }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-muted">No teachers found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
