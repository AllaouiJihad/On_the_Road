@extends('layouts.app')
@section('content')
<!-- about breadcrumb -->
<section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-2">
        <h2 class="title">Contact Us</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
<!-- contact-form -->
<section class="w3l-contact" id="contact">
  <div class="contact-infubd py-5">
    <div class="container py-lg-3">
      <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->

         
        </div>
      <div class="contact-grids row">
        <div class="col-lg-6 contact-left">
          <div class="partners">
            <div class="cont-details">
              <h5>Get in touch</h5>
              <p class="mt-3 mb-4">Hi there, We are available 24/7 by fax, e-mail or by phone. Drop us line so we can talk
                futher about that.</p>
            </div>
            <div class="hours">
              <h6 class="mt-4">Email:</h6>
              <p> <a href="">
                <span class="__cf_email__" data-cfemail="85e8e4ece9c5f1f7e4f3e0f7f6e4e9abe6eae8">contact@RoamingTrails.com</span></a></p>
              <h6 class="mt-4">Visit Us:</h6>
              <p> YouCode school, Youssoufia.</p>
              <h6 class="mt-4">Contact:</h6>
              <p class="margin-top"><a href="tel:+44-255-366-88">+212-255-366-88</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-lg-0 mt-5 contact-right">
          <form action="{{ route('contact.submit') }}" method="POST"class="signin-form">
            @csrf
            <div class="input-grids">
              <div class="form-group">
                <input type="text" name="name" id="w3lName" placeholder="Your Name*" class="contact-input" />
              </div>
              <div class="form-group">
                <input type="email" name="email" id="w3lSender" placeholder="Your Email*" class="contact-input" required="" />
              </div>
              <div class="form-group">
                <input type="text" name="subject" id="w3lSubect" placeholder="Subject*" class="contact-input" />
              </div>
            </div>
            <div class="form-group">
              <textarea name="w3lMessage" id="message" placeholder="Type your message here*" required=""></textarea>
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-style btn-primary">Send Message</button>
            </div>
          </form>
        </div>

      </div>
      <div class="map mt-5 pt-md-5">
        <h5>Map</h5>
        {{-- <iframe
          src=""
          style="border:0" allowfullscreen=""></iframe> --}}
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8020.066443870149!2d-8.521744224959932!3d32.25103551909024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdaefdd4fcbbdbc1%3A0x846cbd9f328a7bdb!2sYouCode!5e0!3m2!1sfr!2sma!4v1712871537355!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
</section>
<!-- /contact-form -->
<div style="margin: 8px auto; display: block; text-align:center;">

  <!---728x90--->
   
  </div>

  @endsection