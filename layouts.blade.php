<!DOCTYPE html>
<html lang="en">
<head>
  <title>App Name - @yield('title')</title>
  <link rel="stylesheet" type="text/css" href="css/MyStyle.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
  <body>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>