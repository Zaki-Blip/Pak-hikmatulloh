<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

body class="bg-gradient-to-br from-slate-900 via-indigo-900 to-purple-900 text-gray-200 min-h-screen flex items-center justify-center"

    @yield('content')

</body>
</html>
