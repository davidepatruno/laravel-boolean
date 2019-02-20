<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Boolean careers</title>
  </head>
  <body>
    @include('partials/_header')
    @yield('jumbo')
    @yield('about_us_content')
    @yield('all_students')
    @yield('one_student')
  </body>
  <footer>
    @include('partials/_footer')
  </footer>
</html>
