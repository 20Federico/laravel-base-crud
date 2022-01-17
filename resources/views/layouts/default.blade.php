<!DOCTYPE html>
<html lang="en">

<head>
  @include('partials.head')
</head>

<body>
  @include('partials.header')

  <main>
    @yield('main_content')
  </main>

  @include('partials._f_top')
  @include('partials.footer')

</body>
</html>