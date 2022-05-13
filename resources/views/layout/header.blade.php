<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{request()->routeIs('welcome')?'active':''}}" aria-current="page" href="{{route('welcome')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{request()->routeIs('post.index')?'active':''}}" aria-current="page" href="{{route('posts.index')}}">Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{request()->routeIs('about')?'active':''}}" aria-current="page" href="{{route('about')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{request()->routeIs('contact')?'active':''}}" aria-current="page" href="{{route('contact')}}">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>