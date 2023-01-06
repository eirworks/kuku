<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite('resources/css/app.css')
    @livewireStyles()
</head>
<body>
    <div class="text-4xl text-center font-bold my-3 font-serif">{{ config('app.name') }}</div>
    @yield('content')
    @livewireScripts()
</body>
</html>
