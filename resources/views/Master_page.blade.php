<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Ecom')</title>
     <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

@include('Menu')

<div class="container">
    @yield('content')
</div>

@include('Footer')

</body>
</html>
