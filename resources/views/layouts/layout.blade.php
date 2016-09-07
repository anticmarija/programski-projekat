<!doctype html>
<html lang="en">
<head>
    @yield('head')
</head>
<body>

<div class="container">

    @yield('header')

    <div class="col-md-6 col-md-offset-3">
        @yield('content')

    </div>

    <div class="row force-to-bottom col-md-6 col-lg-offset-5">
        @yield('footer')
    </div>

</div>

</body>
</html>