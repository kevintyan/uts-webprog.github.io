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
              <a class="nav-link dropdown-toggle {{ ($active === "category") ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu ">
                    @foreach ($categories as $category)
                    <li><a class="dropdown-item" href="/category/{{$category->category_id}}">{{ $category->name }}</a></li>
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
    @foreach ($categories as $category)
    @foreach ($categories_where as $cw)
        @if ($category->category_id === $cw->category_id)
        <h3 style="color: white">CATEGORY LIST: {{ $category->name }}</h3>
        @endif
    @endforeach
    @endforeach
</div>

<div class="row row-col-4 justify-content-center">
    @foreach ($books as $book)
    @foreach ($categories as $category)
    @foreach ($categories_where as $cw)
    @foreach ($bookcategories as $bk)
    @if ($category->category_id === $cw->category_id && $bk->category_id === $cw->category_id && $book->book_id === $bk->book_id)
    <div class="card mt-5 mx-auto" style="width: 18rem;">
    <img src="{{ $book->image }}" class="card-img-top" height="400px" alt="{{ $book->title }}">
    <div class="card-body">
      <h5 class="card-title">{{$book->title}}</h5>
      <p class="card-text">By: {{$book->author}}</p>
      <a href="/bookdetail/{{ $book->book_id }}" class="btn btn-primary">Detail</a>
    </div>
  </div>
    @endif
    @endforeach
    @endforeach
    @endforeach
    @endforeach
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
</style>
