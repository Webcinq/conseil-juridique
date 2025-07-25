<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GlobaleG - E-Learning Platform')</title>
    @vite('resources/css/app.css')
</head>
<body class="@yield('body-class', 'bg-gray-50')">
    @yield('content')
    @vite('resources/js/app.js')
    @stack('scripts')
</body>
</html>