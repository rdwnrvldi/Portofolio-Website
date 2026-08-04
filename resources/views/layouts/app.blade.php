<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Portofolio</title>

    @vite(['resources/css/app.css'])
</head>

<body>

    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')

</body>

</html>