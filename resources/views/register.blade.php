@extends('layout.master')

@section('pageTitle', 'Blog-app | Register')

@section('content')

<div id="navSection">
    @include('layout.header')
</div>

<div class="register">
    <div class="sub_div">

        <h3 class="text-center">Create Account</h3>
        <p class="text-center">Get started with your free account</p>
        <button class="form-control text-center text-white bg-danger mb-3"><i class="fa fa-google bg-danger mr-2" aria-hidden="true"></i>Login via Gmail</button>
        <button class="form-control text-center text-white bg-primary"><i class="fa fa-facebook bg-primary mr-2" aria-hidden="true"></i>Login via Facebook</button>

        <div>
            <form method="post" action="/creatAccount">
            @csrf
              <div class="align-items-center">
                <div class="mt-4">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user "></i></div>
                    </div>
                    <input type="text" name="fname" class="form-control" placeholder="Full Name" required>
                  </div>
                </div>

                <div class="mt-3">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-google" aria-hidden="true"></i></div>
                    </div>
                    <input type="email" name="gmail" class="form-control"  placeholder="E-mail" required>
                  </div>
                </div>

                <div class="mt-3">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-phone"></i></div>
                    </div>
                    <input type="number" name="contact" class="form-control"  placeholder="Phone Number" required>
                  </div>
                </div>

                <div class="mt-3">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-lock"></i></div>
                    </div>
                    <input type="password" name="pass" class="form-control"  placeholder="Create Password" required>
                  </div>
                </div>

                <div class="mt-3">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-lock"></i></div>
                    </div>
                    <input type="password" name="cnfrm_pass" class="form-control"  placeholder="Confirm Password" required>
                  </div>
                </div>

                <div class="text-center mt-3">
                    <a href="/login" >Already have an Account?</a>
                </div>

                <div class="mt-3">
                  <button type="submit" name="signup" class="form-control btn btn-primary mb-2">Signup</button>
                </div>
              </div>
            </form>
        </div>
    </div>
</div>


<div id="footerSection">
    @include('layout.footer')
</div>

@endsection


