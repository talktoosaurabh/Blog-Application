<nav class="navbar navbar-expand-lg navbar-dark bg-dark Nav-fonts">
    @if(Session::has('userSession'))
      <a class="navbar-brand ml-3" href="#">Hii, {{Session::get('userSession')['name']}}</a>
    @else
    <a class="navbar-brand ml-3" href="#">Blog Application</a>
    @endif
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active ml-3" href="/">Home<span class="sr-only">(current)</span></a>
          @if(Session::has('userSession'))
          <a class="nav-item nav-link active ml-3" href="/blog">Blog</a>
          <a class="nav-item nav-link active ml-3" href="/create-post">Create Post</a>
          <a class="nav-item nav-link active ml-3" href="/logout">Logout</a>
          @else
          <a class="nav-item nav-link active ml-3" href="/register">Register</a>
          <a class="nav-item nav-link active ml-3" href="/login">Login</a>
          @endif
          <a class="nav-item nav-link active ml-3 mr-4" href="/contact">Contact Us</a>
        </div>
      </div>
    </nav>
