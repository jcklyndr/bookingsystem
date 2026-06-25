@extends('layouts.app')

@section('content')

<section class="ftco-section bg-light py-5 d-flex align-items-center min-vh-100">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-11">
                
                <div class="card border-0 shadow rounded-3 overflow-hidden">
                    <div class="row g-0">
                        
                        <div class="col-md-6 d-none d-md-block custom-login-bg" style="--login-bg: url('{{ asset('assets/images/image_2.jpg') }}');">
                            <div class="h-100 w-100 d-flex flex-column justify-content-end p-5 text-white">
                                <h2 class="fw-bold text-white text-shadow mb-2">Join OASIS</h2>
                                <p class="small text-white-50 text-shadow mb-0">Create an account to start booking your on-the-go spa relaxation packages smoothly.</p>
                            </div>
                        </div>

                        <div class="col-md-6 bg-white d-flex align-items-center">
                            <div class="card-body p-4 p-md-5 w-100">
                                
                                <div class="mb-4">
                                    <h3 class="fw-bold text-dark mb-1">Register Account</h3>
                                    <p class="text-muted small">Please fill out the details below to create your account.</p>
                                </div>

                                <form action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div class="row g-3">
                                        
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label small fw-semibold text-secondary" for="name">Full Name</label>
                                                <div class="input-group">
                                                    <span class="input-group-text border-end-0"><i class="fa-solid fa-user"></i></span>
                                                    <input id="name" type="text" placeholder="John Doe" class="form-control py-2 border-start-0 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                    @error('name')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label small fw-semibold text-secondary" for="email">Email Address</label>
                                                <div class="input-group">
                                                    <span class="input-group-text border-end-0"><i class="fa-solid fa-envelope"></i></span>
                                                    <input id="email" type="email" placeholder="example@email.com" class="form-control py-2 border-start-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                                    @error('email')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label small fw-semibold text-secondary" for="password">Password</label>
                                                <div class="input-group">
                                                    <span class="input-group-text border-end-0"><i class="fa-solid fa-lock"></i></span>
                                                    <input id="password" type="password" placeholder="••••••••" class="form-control py-2 border-start-0 border-end-0 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                    <button class="btn btn-outline-light bg-light border-start-0 border-top border-bottom border-end text-muted px-3 toggle-password-btn" type="button" data-target="password">
                                                        <i class="fa-solid fa-eye eye-icon"></i>
                                                    </button>
                                                    @error('password')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label small fw-semibold text-secondary" for="password-confirm">Confirm Password</label>
                                                <div class="input-group">
                                                    <span class="input-group-text border-end-0"><i class="fa-solid fa-shield-halved"></i></span>
                                                    <input id="password-confirm" type="password" placeholder="••••••••" class="form-control py-2 border-start-0 border-end-0" name="password_confirmation" required autocomplete="new-password">
                                                    <button class="btn btn-outline-light bg-light border-start-0 border-top border-bottom border-end text-muted px-3 toggle-password-btn" type="button" data-target="password-confirm">
                                                        <i class="fa-solid fa-eye eye-icon"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 pt-2">
                                            <button type="submit" class="btn btn-primary w-100 py-2.5 fw-semibold tracking-wider">
                                                Register Account
                                            </button>
                                        </div>

                                        <div class="col-12 text-center mt-3">
                                            <span class="small text-muted">Already have an account?</span>
                                            <a href="{{ route('login') }}" class="small text-success fw-semibold text-decoration-none ms-1">Login here</a>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const toggleButtons = document.querySelectorAll('.toggle-password-btn');

    toggleButtons.forEach(button => {
        button.addEventListener('click', function () {
            const targetId = this.getAttribute('data-target');
            const passwordInput = document.getElementById(targetId);
            const eyeIcon = this.querySelector('.eye-icon');

            if (passwordInput && eyeIcon) {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                
                if (type === 'text') {
                    eyeIcon.classList.remove('fa-eye');
                    eyeIcon.classList.add('fa-eye-slash');
                } else {
                    eyeIcon.classList.remove('fa-eye-slash');
                    eyeIcon.classList.add('fa-eye');
                }
            }
        });
    });
});
</script>

@endsection