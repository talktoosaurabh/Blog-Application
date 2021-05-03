@extends('layout.master')

@section('pageTitle', 'Blog-app | Login ')

@section('content')

<div id="navSection">
    @include('layout.header')
</div>

<div class="login">
    <div class="sub_div">
        <h3 class="text-center">login</h3>
        <p class="text-center">Get started with your free account</p>
        <button class="form-control text-center text-white bg-danger mb-3"><i class="fa fa-google bg-danger mr-2" aria-hidden="true"></i>Login via Gmail</button>
        <button class="form-control text-center text-white bg-primary"><i class="fa fa-facebook bg-primary mr-2" aria-hidden="true"></i>Login via Facebook</button>

        <div>
            <form method="post" action="/signin">
            @csrf
              <div class="align-items-center">
                <div class="mt-4">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user "></i></div>
                    </div>
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                  </div>
                </div>
                <div class="mt-3">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-lock"></i></div>
                    </div>
                    <input type="password" class="form-control" name="passkey"  placeholder="Password" required>
                  </div>
                </div>
                <div class="text-center mt-3">
                    <a href="/register" >Don't have an Account?</a>
                </div>
                <div class="mt-3">
                  <button type="submit" class="form-control btn btn-primary mb-2">Login</button>
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


