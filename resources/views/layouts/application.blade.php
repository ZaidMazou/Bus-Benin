<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class=" w-[100vw] h-[100vh] bg-slate-100 p-3 flex items-center justify-between overflow-hidden">

    @include('composants.sidebar')

    @yield('container')
</body>
</html>