<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet">
    <link href="css/selfStyling.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body>
<div id="app">
       <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="welcome">Stef de Kramer</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li><a href="about">About</a></li>
                    <li><a href="works">Works</a></li>
                    <li><a href="contact">Contact</a></li>
ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->


    </nav>

    <br>
    <br>
    <br>


    @yield('content')
</div>

    {{--<div class="panel-footer">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-4">--}}
                {{--<h2><a href="about">About</a></h2>--}}
            {{--</div>--}}

            {{--<div class="col-md-4">--}}
                {{--<h2><a href="works">Works</a></h2>--}}
            {{--</div>--}}

            {{--<div class="col-md-4">--}}
                {{--<h2><a href="contact">Contact</a></h2>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}


        <!-- Scripts -->
<script src="js/app.js"></script>
</body>
</html>
