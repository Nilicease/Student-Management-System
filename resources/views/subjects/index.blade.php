@extends('layout.app')

@section('title', 'Subjects')

@section('admin')
    <div class="py-4">
        <h2 class="fw-bold mb-3">Subjects</h2>
        <p class="text-muted mb-4">Manage subject records.</p>

        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Units</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($subjects as $subject)
                                <tr>
                                    <td>{{ $subject->name }}</td>
                                    <td>{{ $subject->code }}</td>
                                    <td>{{ $subject->units }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-muted">No subjects found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
