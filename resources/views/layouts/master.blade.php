<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- Set the Page Title --}}
  <title>@yield('title', 'WebVuiVe')</title>
  {{-- Stylesheets --}}
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
  {{-- Import page header --}}
  @include('partials.header')

  {{-- Page content --}}
  @yield('content')

  {{-- Import page footer --}}
  @include('partials.footer')
</body>

</html>
