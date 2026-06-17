@extends('layouts.app')

@section('content')



<section class="hero-wrap hero-wrap-2" style="margin-top:-25px; background-image: url('{{asset('assets/images/contactus.jpg')}}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <p class="breadcrumbs mb-2"><span>Keep in Touch</span></p>
        <h1 class="mb-0 bread" style="text-decoration: none;color: #fff;" >Contact Us</h1>
      </div>
    </div>
  </div>
</section>

 <section class="ftco-section bg-light">
  <div class="container">
      <div class="col-md-12">
        <div class="wrapper">
          <div class="row no-gutters">
            <div class="col-lg-8 col-md-7 d-flex align-items-stretch">
              <div class="contact-wrap w-100 p-md-5 p-4">
                              @if (session('success'))
                                <div class="alert alert-success">
                                  {{ session('success') }}
                                </div>
                              @endif
                <h2 class="font-weight-bold mb-4">Lets get started</h2>
                <p>Experience tranquility on the move with our On-The-Go Spa Relaxation, a mobile oasis that brings the luxury of relaxation to your chosen location.</p>

                <h3 class="mb-4">Get in touch</h3>
                <p><span class="constatement">You can send your concern, questions and experience, Thank you!<span></p>
                  <hr>
                

                <form method="post" id="contactForm" name="contactForm" class="contactForm" action="{{route('contact.send')}}">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="label" for="name">Full Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">

                        @error('name')
                        <span class="text-danger">{{ $message}}</span>
                        @enderror

                      </div>
                    </div>
                    <div class="col-md-6"> 
                      <div class="form-group">
                        <label class="label" for="email">Email Address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">

                        @error('email')
                        <span class="text-danger">{{ $message}}</span>
                        @enderror

                      </div>
                    </div>
                    <div class="col-md-6"> 
                      <div class="form-group">
                        <label class="label" for="contact">Contact Number</label>
                        <input type="text" class="form-control" name="contact" id="contact" placeholder="Contact Number">

                        @error('contact')
                        <span class="text-danger">{{ $message}}</span>
                        @enderror

                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="label" for="subject">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">

                        @error('subject')
                        <span class="text-danger">{{ $message}}</span>
                        @enderror

                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="label" for="#">Message</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Input your Message"></textarea>

                        @error('message')
                        <span class="text-danger">{{ $message}}</span>
                        @enderror

                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary-custom">Send Message</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
              <div class="rgbbluebgcolorcustom info-wrap w-100 p-md-5 p-4">
                <h3>Let's get in touch</h3>
                <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                <div class="dbox w-100 d-flex align-items-start">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-map-marker"></span>
                  </div>
                  <div class="text pl-3">
                    <p><span>Main Address:</span><a href="#"> Villamor, Brgy 183, Pasay City</a></p>
                  </div>
                </div>
                <div class="dbox w-100 d-flex align-items-center">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-phone"></span>
                  </div>
                  <div class="text pl-3">
                    <p><span>Phone:</span> <a href="#"> 093344780 or 123-567-8900</a></p>
                  </div>
                </div>
                <div class="dbox w-100 d-flex align-items-center">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-paper-plane"></span>
                  </div>
                  <div class="text pl-3">
                    <p><span>Email:</span> <a href="#"> OntheGorelax@gmail.com</a></p>
                  </div>
                </div>
                <div class="dbox w-100 d-flex align-items-center">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-globe"></span>
                  </div>
                  <div class="text pl-3">
                    <p><span>Website</span> <a href="#"> OnTheGoRelaxation.com</a></p>
                  </div>
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