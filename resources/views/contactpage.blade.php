@extends("template.main")

@section("main")

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" aria-current="page" href="/home">Home</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu">
                    @foreach ($categories as $category)
                    <li><a class="dropdown-item" href="category/{{ $category->category_id }}">{{ $category->name }}</a></li>
                    @endforeach
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/home">All</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Publisher
                  </a>
                  <ul class="dropdown-menu">
                    @foreach ($Publishers as $publisher)
                    <li><a class="dropdown-item" href="/publisher/{{ $publisher->publisher_id }}">{{ $publisher->name }}</a></li>
                    @endforeach
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="/home">All</a></li>
                  </ul>
              </li>
            <li class="nav-item">
                <a class="nav-link {{ ($active === "contact") ? 'active' : '' }}" href="/contactpage">Contact</a>
              </li>
        </ul>
      </div>
    </div>
  </nav>

  <style>
    .nav-item a {
        color: blue
    }
  </style>


<div class="header_second">
    <h3 style="color: white">Contact</h3>
</div>

<div class="text">
    <h1>Store Address:</h1>
    <h5>Jl. Rawa Belong</h5>
    <h5>Jakarta Barat, DKI Jakarta</h5>
    <h5>Indonesia</h5>
</div>
<div class="text">
    <h1>Open Daily:</h1>
    <h5>09:00 - 17:00</h5>
</div>
<div class="text">
    <h1>Contact:</h1>
    <h5>Phone: 021-53690924</h5>
    <h5>Email: kevin.ahsan@binus.ac.id</h5>
</div>

@endsection


<style>
    .header_second {
        justify-content: center;
        text-align: left;
        background-color: grey;
        border-style: solid;
        border-color: grey;
        border-width: 15px;
    }

    .text {
        margin-top: 50px;
        margin-bottom: 50px;
    }
</style>
