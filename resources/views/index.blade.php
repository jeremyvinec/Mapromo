<!DOCTYPE html>
<html lang="fr">
<head>
    @include('layouts.head')
    @import ("node_modules/bootstrap-sass/assets/stylesheets")
</head>
<body>
    @include('layouts.nav')
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
</body>
</html>