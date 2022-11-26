<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giant Book Supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="header">
        <h1 style="color: white">Giant Book Supplier</h1>
    </div>
    {{-- @include("template.navbar") --}}
    <div class="container">
        @yield('main')
    </div>
    <div class="footer">
        <p style="color: white">&copy;Happy Book Store 2022</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>


<style>
    .header {
        justify-content: center;
        text-align: center;
        background-color: rgb(255, 195, 0);
        border-style: solid;
        border-color: rgb(255, 195, 0);
        border-width: 15px;
    }

    .footer {
        background-color: blue;
        justify-content: center;
        text-align: center;
        border-color: blue;
        border-style: solid;
        border-width: 2px;
        margin-top: 20px;
    }

    .footer p {
        margin-top: 15px;
    }
</style>
