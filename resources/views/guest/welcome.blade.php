@extends('layout.app')

@section('title', 'Student Management System')

@section('guest')
    <div class="py-4">
        <section class="d-flex" id="home">
            <div class="d-flex flex-column justify-content-center w-50">
                <div>
                    <h2>Welcome to</h2>
                    <h1>Student Management System</h1>
                    <p>A smarter way to manage your students' information and academic progress.</p>
                    <div>
                        <a href="{{ route('login') }}" class="btn btn-primary rounded-pill">Get Started</a>
                        <a href="#features" class="btn btn-outline-secondary rounded-pill">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="w-50 d-flex justify-content-center align-items-center">
                <img src="https://placehold.co/600x400" class="img-fluid" alt="Student Management System">
            </div>
        </section>

        <section class="d-flex justify-content-between mt-5" id="features">
            <div class="d-flex align-items-center border rounded-4 p-2">
                <div><img src="" alt="hi"></div>
                <div>
                    <h2>Student Management</h2>
                    <p>Add, Update, and Manage student information easily.</p>
                </div>
            </div>
            <div class="d-flex align-items-center border rounded-4 p-2">
                <div><img src="" alt="hi"></div>
                <div>
                    <h2>Teacher Management</h2>
                    <p>Organize teacher information and assignments in one place.</p>
                </div>
            </div>
            <div class="d-flex align-items-center border rounded-4 p-2">
                <div><img src="" alt="hi"></div>
                <div>
                    <h2>Subject Management</h2>
                    <p>Create and manage subjects with complete details.</p>
                </div>
            </div>
        </section>

        <section class="py-5 bg-light mt-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="fw-bold">Features</h2>
                    <p class="text-muted">Everything you need to manage your school efficiently.</p>
                </div>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm border-0 rounded-4">
                            <div class="card-body text-center p-4">
                                <div class="fs-1 mb-3">🎓</div>
                                <h4 class="fw-semibold">Student Management</h4>
                                <p class="text-muted">Add, update, search, and manage student records easily.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm border-0 rounded-4">
                            <div class="card-body text-center p-4">
                                <div class="fs-1 mb-3">👨‍🏫</div>
                                <h4 class="fw-semibold">Teacher Management</h4>
                                <p class="text-muted">Organize teacher information and assignments in one place.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm border-0 rounded-4">
                            <div class="card-body text-center p-4">
                                <div class="fs-1 mb-3">📚</div>
                                <h4 class="fw-semibold">Subject Management</h4>
                                <p class="text-muted">Create and manage subjects with complete details.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm border-0 rounded-4">
                            <div class="card-body text-center p-4">
                                <div class="fs-1 mb-3">🔒</div>
                                <h4 class="fw-semibold">Secure Login</h4>
                                <p class="text-muted">Authentication system to protect sensitive data.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm border-0 rounded-4">
                            <div class="card-body text-center p-4">
                                <div class="fs-1 mb-3">📊</div>
                                <h4 class="fw-semibold">Dashboard Analytics</h4>
                                <p class="text-muted">View important statistics and school information quickly.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm border-0 rounded-4">
                            <div class="card-body text-center p-4">
                                <div class="fs-1 mb-3">⚡</div>
                                <h4 class="fw-semibold">Fast & Responsive</h4>
                                <p class="text-muted">Works smoothly on desktop, tablet, and mobile devices.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5" id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="fw-bold mb-3">About Our System</h2>
                        <p class="text-muted">The Student Management System is designed to simplify school administration by providing a centralized platform for managing students, teachers, and subjects.</p>
                        <p class="text-muted">With an intuitive interface and secure authentication, administrators can efficiently organize academic records, monitor school data, and streamline daily operations.</p>
                        <a href="/login" class="btn btn-primary rounded-pill">Get Started</a>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="https://placehold.co/600x400" class="img-fluid rounded-4 shadow" alt="About Image">
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-light" id="contact">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="fw-bold">Contact Us</h2>
                    <p class="text-muted">Have questions or feedback? We'd love to hear from you.</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card shadow-sm border-0 rounded-4">
                            <div class="card-body p-4">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label">Full Name</label>
                                        <input type="text" class="form-control" placeholder="Enter your name">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" class="form-control" placeholder="Enter your email">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Message</label>
                                        <textarea rows="5" class="form-control" placeholder="Write your message"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection