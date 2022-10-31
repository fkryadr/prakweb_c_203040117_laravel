<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="../../css/app.css" rel="stylesheet">
    <title>Ma Blog | {{$title}}</title>
</head>
<body>

<div class="flex order-last">
    <img src="https://img.icons8.com/ios-glyphs/60/000000/moon-symbol.png"/>
    <img src="https://img.icons8.com/ios-glyphs/60/000000/summer.png"/>
</div>

<style>

</style>


    @include('partials.navbar')

<div class="text-3xl container m-4">
    @yield('container')
</div>


<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>
</html>
