{{-- @dd($book) --}}

@extends("template.main")


@section("main")
{{-- NAVBAR --}}
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
              <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu">
                    @foreach ($categories as $category)
                    <li><a class="dropdown-item" href="/category/{{ $category->category_id }}">{{ $category->name }}</a></li>
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
                <a class="nav-link" href="/contactpage">Contact</a>
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
    <h3 style="color: white">BOOK DETAIL</h3>
</div>

@foreach ($book as $b)
<div class="card mt-5 mx-auto" style="width: 100%;">
    <div class="image_book">
        <img src="{{ $b->image }}" class="card-img-top" height="400px" alt="{{ $b->title }}">
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$b->title}}</h5>
      <p class="card-text">Author: {{$b->author}}</p>
      @foreach ($Publishers as $p)
          @if ($p->publisher_id === $b->publisher_id)
          <p class="card-text">Publisher: {{$p->name}}</p>
          @endif
      @endforeach
      <p class="card-text">Year: {{$b->year}}</p>
      <p class="card-text">Synopsis: <br>{{$b->synopsis}}</p>
    </div>
  </div>
@endforeach
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

    .image_book {
        width: 18rem;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
</style>
