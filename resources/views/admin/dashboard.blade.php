@extends('layout.app')

@section('title', 'Admin Dashboard')

@section('admin')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Dashboard Overview</h2>
            <p class="text-muted mb-0">A clean snapshot of the institution’s administration status.</p>
        </div>
        <button class="btn btn-primary"><i class="bi bi-plus-lg me-2"></i>New Record</button>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <p class="text-muted mb-1">Students</p>
                            <h3 class="fw-bold mb-0">1,248</h3>
                        </div>
                        <div class="bg-primary-subtle text-primary rounded-circle p-2"><i class="bi bi-mortarboard"></i></div>
                    </div>
                    <div class="progress mt-3" style="height: 6px;">
                        <div class="progress-bar bg-primary" style="width: 84%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <p class="text-muted mb-1">Teachers</p>
                            <h3 class="fw-bold mb-0">96</h3>
                        </div>
                        <div class="bg-success-subtle text-success rounded-circle p-2"><i class="bi bi-person-badge"></i></div>
                    </div>
                    <div class="progress mt-3" style="height: 6px;">
                        <div class="progress-bar bg-success" style="width: 74%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <p class="text-muted mb-1">Users</p>
                            <h3 class="fw-bold mb-0">324</h3>
                        </div>
                        <div class="bg-info-subtle text-info rounded-circle p-2"><i class="bi bi-people"></i></div>
                    </div>
                    <div class="progress mt-3" style="height: 6px;">
                        <div class="progress-bar bg-info" style="width: 68%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-4 col-sm-6">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <p class="text-muted mb-1">Courses</p>
                            <h3 class="fw-bold mb-0">42</h3>
                        </div>
                        <div class="bg-warning-subtle text-warning rounded-circle p-2"><i class="bi bi-journals"></i></div>
                    </div>
                    <div class="progress mt-3" style="height: 6px;">
                        <div class="progress-bar bg-warning" style="width: 62%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-4 col-sm-6">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <p class="text-muted mb-1">Subjects</p>
                            <h3 class="fw-bold mb-0">118</h3>
                        </div>
                        <div class="bg-danger-subtle text-danger rounded-circle p-2"><i class="bi bi-book"></i></div>
                    </div>
                    <div class="progress mt-3" style="height: 6px;">
                        <div class="progress-bar bg-danger" style="width: 55%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="fw-semibold mb-0">Recent Student Registrations</h5>
                        <a href="{{ route('admin.students.index') }}" class="btn btn-sm btn-outline-primary">View All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th>Student</th>
                                    <th>Course</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Maria Santos</td>
                                    <td>Computer Science</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>James Lee</td>
                                    <td>Business Admin</td>
                                    <td><span class="badge bg-warning text-dark">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>Nora Cruz</td>
                                    <td>Engineering</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-body">
                    <h5 class="fw-semibold mb-3">Recently Added Teachers</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0">Dr. Ana Rivera <small class="text-muted d-block">Mathematics</small></li>
                        <li class="list-group-item px-0">Prof. Mark Nolan <small class="text-muted d-block">Physics</small></li>
                        <li class="list-group-item px-0">Ms. Chloe Kim <small class="text-muted d-block">Literature</small></li>
                    </ul>
                </div>
            </div>
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body">
                    <h5 class="fw-semibold mb-3">Latest Activities</h5>
                    <div class="d-flex align-items-start gap-2 mb-3">
                        <i class="bi bi-check-circle-fill text-success"></i>
                        <div>
                            <div>New student approved</div>
                            <small class="text-muted">10 mins ago</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-2">
                        <i class="bi bi-pencil-square text-primary"></i>
                        <div>
                            <div>Course updated</div>
                            <small class="text-muted">1 hour ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
