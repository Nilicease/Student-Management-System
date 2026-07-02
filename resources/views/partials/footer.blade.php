@php
    $role = $role ?? 'guest';
@endphp

@if($role === 'guest')
    <footer class="bg-secondary text-white mt-4 py-3">
        <div class="container text-center">
            <small>© {{ date('Y') }} SMS. All rights reserved.</small>
        </div>
    </footer>
@else
    <footer class="bg-dark text-white mt-4 py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <p class="mb-1">Contact the developer</p>
                    <p class="mb-0">Email: developer@sms.com</p>
                    <p class="mb-0">Phone: +123 456 7890</p>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <small>© {{ date('Y') }} SMS. All rights reserved.</small>
                </div>
            </div>
        </div>
    </footer>
@endif
