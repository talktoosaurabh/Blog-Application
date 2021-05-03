@extends('layout.master')

@section('pageTitle', 'Blog-app | Post')

@section('content')

<div id="navSection">
    @include('layout.header')
</div>

<div class="login">
    <div class="sub_div">

        <h3 class="text-center">Create Blog Post</h3>

        <div>
            <form method="post" action="/update">
             @csrf
              <div class="align-items-center">
                <div class="mt-4">
                    <input type="text" name="btittle" class="form-control" placeholder="Post Tittle" required>
                </div>

                <div class="mt-4 custom-file">
                    <input type="file" name="bimage" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Post Image</label>
                </div>

                <div class="mt-3">
                <textarea class="form-control" name="bcontent" placeholder="Blog Content" rows="4"></textarea>
                </div>

                <div class="mt-3">
                  <button type="submit" name="bupload" class="form-control btn btn-primary mb-2">Upload</button>
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


