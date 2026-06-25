@extends('layouts.app')

@section('content')

<section class="custom-about-hero position-relative text-white d-flex align-items-center" style="background-image: url('{{ asset('assets/images/contactus.jpg') }}');">
    <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100"></div>
    
    <div class="container position-relative custom-hero-z">
        <div class="row align-items-center justify-content-center min-vh-35">
            <div class="col-md-9 text-center">
                <p class="breadcrumbs mb-2 text-uppercase tracking-wider small fw-semibold text-white-50">Keep in Touch</p>
                <h1 class="mb-0 display-4 fw-bold text-white text-shadow">Contact Us</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light py-5">
    <div class="container py-3">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded-3 overflow-hidden">
                <div class="row g-0">
                    
                    <div class="col-lg-8 col-md-7 d-flex align-items-stretch bg-white">
                        <div class="card-body p-4 p-md-5">
                            
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <h2 class="fw-bold text-dark mb-3">Let's get started</h2>
                            <p class="text-muted small mb-4">Experience tranquility on the move with our On-The-Go Spa Relaxation, a mobile oasis that brings the luxury of relaxation to your chosen location.</p>

                            <h3 class="h5 fw-bold text-secondary mb-2">Get in touch</h3>
                            <p class="small text-muted mb-4">You can send your concerns, questions, and experiences. Thank you!</p>
                            <hr class="text-muted opacity-25 mb-4">

                            <form method="post" id="contactForm" name="contactForm" class="contactForm" action="{{ route('contact.send') }}">
                                @csrf
                                <div class="row g-3"> <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label small fw-semibold text-secondary" for="name">Full Name</label>
                                            <input type="text" class="form-control py-2 @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6"> 
                                        <div class="form-group">
                                            <label class="form-label small fw-semibold text-secondary" for="email">Email Address</label>
                                            <input type="email" class="form-control py-2 @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6"> 
                                        <div class="form-group">
                                            <label class="form-label small fw-semibold text-secondary" for="contact">Contact Number</label>
                                            <input type="text" class="form-control py-2 @error('contact') is-invalid @enderror" name="contact" id="contact" placeholder="Contact Number" value="{{ old('contact') }}">
                                            @error('contact')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label small fw-semibold text-secondary" for="subject">Subject</label>
                                            <input type="text" class="form-control py-2 @error('subject') is-invalid @enderror" name="subject" id="subject" placeholder="Subject" value="{{ old('subject') }}">
                                            @error('subject')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label small fw-semibold text-secondary" for="message">Message</label>
                                            <textarea name="message" class="form-control @error('message') is-invalid @enderror" id="message" cols="30" rows="4" placeholder="Input your Message">{{ old('message') }}</textarea>
                                            @error('message')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 pt-2">
                                        <button type="submit" class="btn btn-primary px-4 py-2">Send Message</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-5 d-flex align-items-stretch custom-contact-info">
                        <div class="card-body p-4 p-md-5 text-white d-flex flex-column h-100 justify-content-center">
                            <h3 class="fw-bold h4 text-white mb-3">Let's get in touch</h3>
                            <p class="small text-white-50 mb-4 pb-2">We're open for any suggestions or just to have a chat.</p>
                            
                            <div class="d-flex align-items-start mb-4">
                                <div class="contact-icon-box me-3 text-white bg-white bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div>
                                    <span class="d-block small text-white-50 fw-semibold text-uppercase tracking-wider">Main Address</span>
                                    <a href="#" class="text-white text-decoration-none small">Villamor, Brgy 183, Pasay City</a>
                                </div>
                            </div>

                            <div class="d-flex align-items-start mb-4">
                                <div class="contact-icon-box me-3 text-white bg-white bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div>
                                    <span class="d-block small text-white-50 fw-semibold text-uppercase tracking-wider">Phone</span>
                                    <a href="#" class="text-white text-decoration-none small">093344780 or 123-567-8900</a>
                                </div>
                            </div>

                            <div class="d-flex align-items-start mb-4">
                                <div class="contact-icon-box me-3 text-white bg-white bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-paper-plane"></i>
                                </div>
                                <div>
                                    <span class="d-block small text-white-50 fw-semibold text-uppercase tracking-wider">Email</span>
                                    <a href="mailto:OntheGorelax@gmail.com" class="text-white text-decoration-none small">OntheGorelax@gmail.com</a>
                                </div>
                            </div>

                            <div class="d-flex align-items-start mb-2">
                                <div class="contact-icon-box me-3 text-white bg-white bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-globe"></i>
                                </div>
                                <div>
                                    <span class="d-block small text-white-50 fw-semibold text-uppercase tracking-wider">Website</span>
                                    <a href="#" class="text-white text-decoration-none small">OnTheGoRelaxation.com</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection