<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title }}</title>
</head>
<body class="bg-gray-100 dark:bg-[#0f0f0f] text-[#0f0f0f] dark:text-gray-100">
    @include('layouts.navigation')
    {{ $slot }}
    @include('layouts.footer')
</body>
</html>
