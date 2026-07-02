@extends('layout.app')

@section('title', 'Manage Courses')

@section('admin')
    <div class="py-4">
        <h2 class="fw-bold mb-3">Courses</h2>
        <p class="text-muted mb-4">Create and manage academic courses here.</p>

        <div class="card border-0 shadow-sm rounded-4 mb-4">
            <div class="card-body">
                <h5 class="fw-semibold mb-3">Create Course</h5>
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Course name">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Code">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-dark w-100">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Code</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Computer Science</td>
                                <td>CS101</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
