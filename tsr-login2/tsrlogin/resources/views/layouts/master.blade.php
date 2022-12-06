<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TSR Login</title>
    @vite('resources/js/app.js')

</head>
<body>

<div class="container">

    <div class="flex flex-col justify-center items-center">
        @yield('auth')
        @yield('online')
    </div>


</div>
</body>
</html>
