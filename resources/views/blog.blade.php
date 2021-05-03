@extends('layout.master')

@section('pageTitle', 'Blog-app | Blogs')

@section('content')

<div id="navSection">
    @include('layout.header')
</div>

<div class="container mt-5">
    @foreach($blogDetails as $blogpost)
      <div class="card border-success mb-3">
          <img class="card-img-top" src='{{$blogpost["image"]}}' alt="Card image cap">
              <div class="card-body">
                  <h5 class="card-title">{{$blogpost['tittle']}}</h5>
                  <p class="card-text">{{$blogpost['content']}}</p>
                  <p class="card-text"><small class="text-muted">{{$blogpost['created_at']}}</small></p>
              </div>
      </div>
      @endforeach
  </div>


<div id="footerSection">
    @include('layout.footer')
</div>

@endsection


