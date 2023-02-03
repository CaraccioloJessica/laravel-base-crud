<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Database</title>
    @vite('resources/js/app.js')
</head>
<body>
  <header>
    <h1 class="text-center"><a href="{{route('home')}}">Saints</a>
    </h1>
  </header>
    @yield('content')
    <footer>
      <h2 class="text-center">Footer</h2>
    </footer>
</body>
</html>