@extends('layout.master')

@section('pageTitle', 'Blog-app | Home')

@section('content')

<div id="navSection">
    @include('layout.header')
</div>


 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 image-control" src="{{ URL::asset('images/slider.png') }}" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>Publish your passions, your way</h5>
            <p>Create a unique and beautiful blog. It’s easy and free.</p>
            <button type="button"onclick="blog()" class="btn btn-primary mb-4">Start Blog</button>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 image-control" src="{{ URL::asset('images/slider.png') }}" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>Publish your passions, your way</h5>
            <p>Create a unique and beautiful blog. It’s easy and free.</p>
            <button type="button" class="btn btn-primary mb-4">Start Blog</button>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 image-control" src="{{ URL::asset('images/slider.png') }}" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>Publish your passions, your way</h5>
            <p>Create a unique and beautiful blog. It’s easy and free.</p>
            <button type="button" class="btn btn-primary mb-4">Start Blog</button>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- about section -->

  <div class="container-fluid about_section bg-light pt-4 pb-3 mb-5" id="about_id">
    <div class="row">
        <div class="col-12 col-md-10 mx-auto">
            <div class="main_title">
                <h1>About Us</h1>
            </div>
            <div class="row">
                <div class="col-md-6 col-12 about_img">
                    <img  src="{{ URL::asset('images/about.png') }}" alt="About">
                </div>
                <div class="col-md-6 col-12 about_text d-flex justify-content-center align-items-start flex-column">
                    <p>Hello,</p>
                    <h1>We are a Passionate Developer</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- services section -->

<div class="container-fluid about_section  mb-5" id="about_id">
    <div class="row">
        <div class="col-12 col-md-10 mx-auto">
            <div class="main_title">
                <h1>Features</h1>
                <p>" We provide the best Blogging Features in the Market "</p>
            </div>
            <div class="row pt-5">
               <div class="col-lg-3 col-sm-9 offset-1 mt-3">
                <div class="card shadow" style="width: 18rem;" >
                    <img src="{{ URL::asset('images/slider.png') }}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <h5 class="card-title">Simplicity</h5>
                      <p class="card-text">Our motive is to create a user friendly blog that should be easy and simple to use</p>
                      <a href="/blog" class="btn btn-danger">Start Blogging</a>
                    </div>
                  </div>
               </div>

               <div class="col-lg-3 col-sm-9 offset-1 mt-3">
                <div class="card shadow" style="width: 18rem;">
                    <img src="{{ URL::asset('images/slider.png') }}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <h5 class="card-title">Pricing</h5>
                      <p class="card-text">Now you can create your own Blog that will be free of cost with ease and no card details</p>
                      <a href="/blog" class="btn btn-success">Check it out !</a>
                    </div>
                  </div>
               </div>

               <div class="col-lg-3 col-sm-9 offset-1 mt-3">
                 <div class="card shadow" style="width: 18rem;">
                    <img src="{{ URL::asset('images/slider.png') }}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <h5 class="card-title">Security</h5>
                      <p class="card-text">We try to make our users credidentials secure, You can trust us !</p>
                      <a href="/register" class="btn btn-primary">Create Account</a>
                    </div>
                  </div>
               </div>

            </div>
        </div>
    </div>
</div>


{{-- contact us --}}

<h1 class="mt-5 pt-5 contact-tittle mb-5">Blog Support</h1>
<form class="cf mb-5 contact-form" method="POST" action="/support">
    @csrf
    <div class="contact-half contact-left cf">
        <input type="text" name="fname" class="contact-fields" id="input-name" placeholder="Name">
        <input type="email" name="femail" class="contact-fields" id="input-email" placeholder="Email address">
        <input type="text" name="fsubject" class="contact-fields" id="input-subject" placeholder="Subject">
    </div>
    <div class="contact-half contact-right cf">
        <textarea name="fmessage" style="height: 126px;" class="contact-fields" type="text" id="input-message" placeholder="Message"></textarea>
    </div>
    <input class="mt-3 contact-fields"  type="submit" value="Submit" id="input-submit">
</form>



<div id="footerSection">
    @include('layout.footer')
</div>

@endsection
