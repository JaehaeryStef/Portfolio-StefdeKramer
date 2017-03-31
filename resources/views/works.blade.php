@extends('layouts.app')

@section('content')
    <body>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Works/Projects

                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="Images/projectLaravel/WelcomePage1.JPG" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Project Exercisy</h3>
                <p>This project was made for school in the framework Laravel. The purpose of this website to find
                    exercises that you like, it is also possible to post exercises. You can comment, like and dislike
                    exercises. </p>
                <a class="btn btn-primary" href="projectLaravel">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>

            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="Images/Sdk.JPG" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Project Schildersbedrijf</h3>
                <p>This was another project for school, but also had to make it for someone. This website was the first
                    I ever made, and when I compare it to my other works now I see big changes. </p>
                <a class="btn btn-primary" href="../projects/Project-SchildersbedrijfdeKramer/index.php">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Three -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="Images/angular.png" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Project Fullstack Framework angular2</h3>

                <p>This project is about connecting an api back-end en angular front-end to make a webapplication. This
                    webaplication is about all kinds of dc superheroes, and what powers they have. I made this for fun
                    and a school subject, but is still under development at this moment.</p>
                <a class="btn btn-primary" href="#">In development <span
                            class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <hr>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">

                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    </body>

@endsection
