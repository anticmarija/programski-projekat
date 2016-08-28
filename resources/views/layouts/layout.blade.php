<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">

</head>
<body>


        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-offset-1">

                    <h1>MPP - Projekat</h1>
                </div>

                <div class="col-md-3 col-lg-offset-1">

                    <button type="button" class="btn btn-primary" style="margin-top: 25px">
                        Uloguj se kao admin
                    </button>

                </div>


            </div>
        </div>


    <div class="container">

        <div class="col-md-4 col-lg-offset-1 ">
            @yield('content')
        </div>

    </div>

    @yield('footer')



</body>
</html>