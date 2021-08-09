@extends('layout.master')

@section('pageTitle', 'Blog-app | Post')

@section('content')

<div id="navSection">
    @include('layout.header')
</div>

<div class="container mt-5">
    @foreach($postDetails as $blogpost)
      <div class="card shadow mb-5">
        <img class="card-img-top" src='/uploads/{{$blogpost["image"]}}' alt="Card image cap">
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

<div id="footerSection">
    @include('layout.footer')
</div>

@endsection


