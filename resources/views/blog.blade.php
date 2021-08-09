@extends('layout.master')

@section('pageTitle', 'Blog-app | Blogs')

@section('content')

<div id="navSection">
    @include('layout.header')
</div>

<!-- desktop view -->

<div class="container mt-5 desktop-view">
   @foreach($blogDetails as $blogpost)
      <div class="card shadow mb-5" onclick="single({{$blogpost['id']}})">
        <div class="main-blog">
          <div class="left-blog">
            <img class="card-img-top" src='{{$blogpost["image"]}}' alt="Blog Image">
          </div>
          <div class="card-body right-blog">
            <div class="d-flex">
              <div style="width: 70%;">
                <h5 class="card-title">{{$blogpost['tittle']}}</h5> 
              </div>
              <div class="d-flex" style="width: 30%;">
                <form class="mr-2 ml-5" action="editPost" method="post">
                  @csrf
                  <input type="hidden" class="editID" name="editId" value="{{$blogpost['id']}}">
                  <button class="form-control bg-primary" type="submit">
                    <i class="fa fa-pencil" style="color: white;" aria-hidden="true"></i>
                  </button>
                </form>
                <form action="deletePost" method="post">
                  @csrf
                  <input type="hidden" name="deleteId" value="{{$blogpost['id']}}">
                  <button class="form-control bg-danger" type="submit">
                    <i class="fa fa-trash" style="color: white;" aria-hidden="true"></i>
                  </button> 
                </form>
              </div>
            </div> 
            <p class="card-text mt-2">{{$blogpost['content']}}</p>
            <p class="card-text"><small class="text-muted">{{$blogpost['created_at']}}</small></p>  
          </div>
        </div>
      </div>
    @endforeach
</div>

<!-- for mobile view -->

<div class="container mt-5 mobile-view">
    @foreach($blogDetails as $blogpost)
      <div class="card shadow mb-5" onclick="single({{$blogpost['id']}})">
        <img class="card-img-top" src='{{$blogpost["image"]}}' alt="Card image cap">
            <div class="card-body d-flex justify-content-center">
                <div class="left_left">
                  <h5 class="card-title">{{$blogpost['tittle']}}</h5>
                  <p class="card-text">{{$blogpost['content']}}</p>
                  <p class="card-text"><small class="text-muted">{{$blogpost['created_at']}}</small></p>  
                </div>
              <div class="d-flex justify-content-center">
                <form class="mr-2" action="editPost" method="post">
                  @csrf
                  <input type="hidden" class="editID" name="editId" value="{{$blogpost['id']}}">
                  <button class="form-control bg-primary" type="submit">
                    <i class="fa fa-pencil" style="color: white;" aria-hidden="true"></i>
                  </button>
                </form>
                <form action="deletePost" method="post">
                  @csrf
                  <input type="hidden" name="deleteId" value="{{$blogpost['id']}}">
                  <button class="form-control bg-danger" type="submit">
                    <i class="fa fa-trash" style="color: white;" aria-hidden="true"></i>
                  </button> 
                </form>
              </div>  
            </div>
      </div>
      @endforeach
  </div>

<!-- mobile view ends -->

<div id="footerSection">
    @include('layout.footer')
</div>

@endsection


