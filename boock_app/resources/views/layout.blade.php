<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>


<!--Bootstrap core Css -->
<link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <link href="https://getbootstrap.com/docs/5.2/examples/checkout/form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
    <h1>@yield('title')</h1>
    <main>
        @yield('content')
    </main>
</div>

<script src="https://getbootstrap.com/docs/5.2/examples/checkout/form-validation.js"></script>
</body>
</html>