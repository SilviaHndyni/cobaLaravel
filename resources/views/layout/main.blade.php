<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/1eeff1e81d.js" crossorigin="anonymous"></script>

    <title>@yield('title')</title>
  </head>
  <body class="bg-info pb-2">
    <nav class="sticky-top">
        <ul class="nav justify-content-end bg-light font-weight-bold small">
            <li class="nav-item mr-n2 mb-n2">
                <a class="nav-link" href="#">Gift Card</a>
            </li>
            <li class="nav-item mr-n2 mb-n2">
                <a class="nav-link" href="#">Track Order</a>
            </li>
            <li class="nav-item mb-n2">
                <a class="nav-link" href="#">Contact Us</a>
            </li>
        </ul>

        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand">LARAVEL</a>
            <form class="form-inline">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text bg-light" id="basic-addon2"><i class="fa fa-search"
                                aria-hidden="true"></i></span>
                    </div>
                </div>
            </form>
        </nav>

        <div class="container-fluid mt-2">
            <ul class="nav nav-pills justify-content-center bg-dark">
                <li class="nav-item font-weight-bold small">
                <a class="nav-link" href="{{ url('/') }}">HOME</a>
                </li>
                <li class="nav-item font-weight-bold small">
                    <a class="nav-link" href="{{ url('/shop') }}">SHOP</a>
                </li>
                <li class="nav-item font-weight-bold small">
                    <a class="nav-link" href="{{ url('/blog') }}">BLOG</a>
                </li>
                <li class="nav-item font-weight-bold small">
                    <a class="nav-link" href="{{ url('/about') }}">ABOUT US</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid mt-2">
        @yield('container')
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>