@extends('layout.master')

@section('pageTitle', 'Blog-app | Support ')

@section('content')

<div id="navSection">
    @include('layout.header')
</div>


<h1 class="mt-5 contact-tittle mb-5">Blog Support</h1>
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
