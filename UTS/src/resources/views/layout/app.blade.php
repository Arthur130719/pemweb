<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PemWeb App')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    @include('partials.navbar')

    <header>
        @include('partials.header')
    </header>

    <main class="container mt-4">
        @yield('content')
    </main>

    @include('partials.script')
</body>
</html>
