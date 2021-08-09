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
            <form method="post" action="/update" enctype="multipart/form-data">
             @csrf
              <div class="align-items-center">
                <div class="mt-4">
                    <input type="text" name="btittle" class="form-control" placeholder="Post Tittle" value="@php echo ((isset($postDetails->tittle))?''.$postDetails->tittle:'') @endphp" required>
                </div>

                <div class="input-group mt-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">Image Upload</span>
                    </div>
                    <input type="file"  name="image" class="form-control" aria-describedby="basic-addon1">
                </div>

                <div class="mt-3">
                    <textarea class="form-control" name="bcontent" placeholder="Blog Content" rows="4" required>@php if(isset($postDetails->content)) echo $postDetails->content ;@endphp</textarea>
                </div>

                <div class="mt-3">
                  <button type="submit" class="form-control btn btn-primary mb-2">Upload</button>
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


