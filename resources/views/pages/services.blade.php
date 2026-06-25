@extends('layouts.app')

@section('content')

<section class="custom-about-hero position-relative text-white d-flex align-items-center" style="background-image: url('{{ asset('assets/images/services.jpg') }}');">
    <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100"></div>
    
    <div class="container position-relative custom-hero-z">
        <div class="row align-items-center justify-content-center min-vh-35">
            <div class="col-md-9 text-center">
                <p class="breadcrumbs mb-2 text-uppercase tracking-wider small fw-semibold text-white-50">
                    Details of the Services
                </p>
                <h1 class="mb-0 display-4 fw-bold text-white text-shadow">Services</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light py-5">
    <div class="container py-3">
        <div class="row g-4 justify-content-center">
            
            <div class="col-md-4 d-flex ftco-animate">
                <div class="card w-100 border-0 shadow-sm rounded-3 overflow-hidden d-flex flex-column">
                    <div class="bg-image" style="background-image: url('{{ asset('assets/images/pac2.jpg') }}'); height: 240px; background-size: cover; background-position: center;"></div>
                    <div class="card-body p-4 d-flex flex-column flex-grow-1">
                        <h3 class="card-title h4 fw-bold text-center mb-3">A package for Two!</h3>
                        <p class="card-text text-muted small text-center mb-4">
                            Bring your beloved to experience a rendezvous for two, a bonding experience that will take you to a state of tranquility, serenity and calmness. An executive suite room is arranged to pamper you both!
                        </p>
                        
                        <div class="mt-auto">
                            <hr class="text-muted opacity-25">
                            <ul class="list-unstyled d-flex flex-column gap-2 m-0 p-0 text-secondary small">
                                <li class="d-flex align-items-start"><i class="fa-solid fa-circle-check text-success me-2 mt-1"></i>24-carat Gold Mask Facial Massage (30 mins)</li>
                                <li class="d-flex align-items-start"><i class="fa-solid fa-circle-check text-success me-2 mt-1"></i>I’M Onsen Spa Signature Massage (60 mins)</li>
                                <li class="d-flex align-items-start"><i class="fa-solid fa-circle-check text-success me-2 mt-1"></i>Upgrade to Couple Spa suite with Jacuzzi</li>
                                <li class="d-flex align-items-start"><i class="fa-solid fa-circle-check text-success me-2 mt-1"></i>Complimentary Parking</li>
                            </ul>
                        </div>
                    </div>
                </div>      
            </div>

            <div class="col-md-4 d-flex ftco-animate">
                <div class="card w-100 border-0 shadow-sm rounded-3 overflow-hidden d-flex flex-column">
                    <div class="bg-image" style="background-image: url('{{ asset('assets/images/tropac.jpg') }}'); height: 240px; background-size: cover; background-position: center;"></div>
                    <div class="card-body p-4 d-flex flex-column flex-grow-1">
                        <h3 class="card-title h4 fw-bold text-center mb-3">A Tropa Package</h3>
                        <p class="card-text text-muted small text-center mb-4">Three blissful and enchanting spa treatment combinations, specially curated to soothe, renew and relax. A collection of our best sensorial yet restorative healing practices.</p>
                        
                        <div class="mt-auto">
                            <hr class="text-muted opacity-25">
                            <ul class="list-unstyled d-flex flex-column gap-2 m-0 p-0 text-secondary small">
                                <li class="d-flex align-items-start"><i class="fa-solid fa-circle-check text-success me-2 mt-1"></i>I’M Onsen Spa Signature Massage (60 mins)</li>
                                <li class="d-flex align-items-start"><i class="fa-solid fa-circle-check text-success me-2 mt-1"></i>Body Exfoliation (60 minutes)</li>
                                <li class="d-flex align-items-start"><i class="fa-solid fa-circle-check text-success me-2 mt-1"></i>Upgrade to Executive Suite</li>
                                <li class="d-flex align-items-start"><i class="fa-solid fa-circle-check text-success me-2 mt-1"></i>Complimentary Parking</li>
                            </ul>
                        </div>
                    </div>
                </div>    
            </div>

            <div class="col-md-4 d-flex ftco-animate">
                <div class="card w-100 border-0 shadow-sm rounded-3 overflow-hidden d-flex flex-column">
                    <div class="bg-image" style="background-image: url('{{ asset('assets/images/fampac.jpg') }}'); height: 240px; background-size: cover; background-position: center;"></div>
                    <div class="card-body p-4 d-flex flex-column flex-grow-1">
                        <h3 class="card-title h4 fw-bold text-center mb-3">Fam Bond Package</h3>
                        <p class="card-text text-muted small text-center mb-4">Treat your senses to the ultimate journey of renewal. Our signature body and facial massage will release all tension, bringing you back to a beautiful balance. After your session, party away in your own private VIP Party Suite.</p>
                        
                        <div class="mt-auto">
                            <hr class="text-muted opacity-25">
                            <ul class="list-unstyled d-flex flex-column gap-2 m-0 p-0 text-secondary small">
                                <li class="d-flex align-items-start"><i class="fa-solid fa-circle-check text-success me-2 mt-1"></i>I’M Onsen Signature Massage (60 mins)</li>
                                <li class="d-flex align-items-start"><i class="fa-solid fa-circle-check text-success me-2 mt-1"></i>24-carat Gold Mask Facial Massage (30 mins)</li>
                                <li class="d-flex align-items-start"><i class="fa-solid fa-circle-check text-success me-2 mt-1"></i>Eye Care with Scalp Massage (30 mins)</li>
                                <li class="d-flex align-items-start"><i class="fa-solid fa-circle-check text-success me-2 mt-1"></i>Use of VIP Party Suite with videoke (3 hours)</li>
                                <li class="d-flex align-items-start"><i class="fa-solid fa-circle-check text-success me-2 mt-1"></i>Use of Wellness Suites (onsen, steam, sauna)</li>
                                <li class="d-flex align-items-start"><i class="fa-solid fa-circle-check text-success me-2 mt-1"></i>Free-flowing wellness teas at Lounge</li>
                            </ul>
                        </div>
                    </div>
                </div>      
            </div>

        </div>
    </div>
</section>

<section class="ftco-section testimony-section bg-light  py-5">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="fw-bold text-dark mb-0">Upcoming Services</h2>
            </div>
        </div>
        
        <div class="row g-4 justify-content-center ftco-animate">
            
            <div class="col-12 col-md-6 col-lg-3 d-flex">
                <div class="testimony-wrap d-flex flex-column bg-white p-4 rounded-3 shadow-sm w-100">
                    <div class="text">
                        <span class="quote d-flex align-items-center justify-content-center text-success mb-3">
                            <i class="fa fa-quote-left"></i>
                        </span>
                        <h4 class="h6 fw-bold text-dark mb-2">Exclusive Loyalty Promo for Our Valued Guests!</h4>
                        <p class="small text-muted mb-0">At our spa, we appreciate your commitment to relaxation, and as a token of our gratitude, we’re offering a special loyalty reward. Enjoy indulgent spa services tailored to fit seamlessly into your busy lifestyle.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 d-flex">
                <div class="testimony-wrap d-flex flex-column bg-white p-4 rounded-3 shadow-sm w-100">
                    <div class="text">
                        <span class="quote d-flex align-items-center justify-content-center text-success mb-3">
                            <i class="fa fa-quote-left"></i>
                        </span>
                        <h4 class="h6 fw-bold text-dark mb-2">Mixed Package</h4>
                        <p class="small text-muted mb-0">Discover the ultimate indulgence with our Mixed Package, a carefully crafted fusion of rejuvenating spa treatments designed to offer a diverse and holistic wellness experience. Immerse yourself in a world of relaxation.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 d-flex">
                <div class="testimony-wrap d-flex flex-column bg-white p-4 rounded-3 shadow-sm w-100">
                    <div class="text">
                        <span class="quote d-flex align-items-center justify-content-center text-success mb-3">
                            <i class="fa fa-quote-left"></i>
                        </span>
                        <h4 class="h6 fw-bold text-dark mb-2">Nurture Spa package</h4>
                        <p class="small text-muted mb-0">A perfect group retreat for some well-deserved relaxation. This party package features the best of local healing methods, allowing you to experience the best the region has to offer. Reach new heights of wellness.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 d-flex">
                <div class="testimony-wrap d-flex flex-column bg-white p-4 rounded-3 shadow-sm w-100">
                    <div class="text">
                        <span class="quote d-flex align-items-center justify-content-center text-success mb-3">
                            <i class="fa fa-quote-left"></i>
                        </span>
                        <h4 class="h6 fw-bold text-dark mb-2">Monthly Session</h4>
                        <p class="small text-muted mb-0">Embark on a transformative wellness journey with our Monthly Spa Sessions, an exclusive opportunity to prioritize your self-care and well-being on a consistent basis. Designed for those who understand balance.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


@endsection