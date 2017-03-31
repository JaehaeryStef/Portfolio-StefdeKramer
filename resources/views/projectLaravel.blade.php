@extends('layouts.app')

@section('content')

        <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>1 Col Portfolio - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/1-col-portfolio.css" rel="stylesheet">

</head>
<body>


<!-- Page Content -->
<div class="container">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Laravel Project Exercisey
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Project One -->
    <div class="row">
        <div class="col-md-9">
            <a href="#">
                <img class="img-responsive" src="Images/projectLaravel/WelcomePage1.JPG" alt="">
            </a>
        </div>
        <div class="col-md-3">
            <h3>Welcome screen</h3>

            <p>When you come on the website, this is the first thing you will see. Some exercises that have been created
                by other users with a few details. The only thing you can do on this page is pressing the buttons to
                navigate to the sign-in and sign-up pages.</p>

        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Two -->
    <div class="row">
        <div class="col-md-9">
            <a href="#">
                <img class="img-responsive" src="Images/projectLaravel/RegisterPage.JPG" alt="">
            </a>
        </div>
        <div class="col-md-3">
            <h3>Register Page</h3>

            <p>WHen you are not a member yet of the website, you can sign up on this page. There is a Email check, and
                after you are made a account you won't be a real member until you made a post of your own.</p>

        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Three -->
    <div class="row">
        <div class="col-md-9">
            <a href="#">
                <img class="img-responsive" src="Images/projectLaravel/LoginPage.JPG" alt="">
            </a>
        </div>
        <div class="col-md-3">
            <h3>Sign-in Page</h3>

            <p>On this page you are able to log-in to your account, so you can access everything. This will also
                redirect you immediatly to he homePage where all kinds of exercises will be shown.</p>

        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Four -->
    <div class="row">

        <div class="col-md-9">
            <a href="#">
                <img class="img-responsive" src="Images/projectLaravel/HomePage.JPG" alt="">
            </a>
        </div>
        <div class="col-md-3">
            <h3>HomePage </h3>

            <p>On this page you can see every exercise that has been created and set to active. You can click on
                exercises to create comments or see the comments and also you can search for a specific musclegroup.</p>

        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Five -->
    <div class="row">
        <div class="col-md-9">
            <a href="#">
                <img class="img-responsive" src="Images/projectLaravel/SearchPage.JPG" alt="">
            </a>
        </div>
        <div class="col-md-3">
            <h3>Search Result Page</h3>

            <p>When you searched for a specific musclegroup on the homepage this is the page where the results are shown
                to you, here the only thing you searched for will be shown.</p>

        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project six -->
    <div class="row">
        <div class="col-md-9">
            <a href="#">
                <img class="img-responsive" src="Images/projectLaravel/CreateExercisePage.JPG" alt="">
            </a>
        </div>
        <div class="col-md-3">
            <h3>Create Exercise Page</h3>

            <p>On this page the user can create exercise for everyone to see, when the user does this for the first time
                his role will be set to a full user. Which in return makes him able to do more stuff, like making
                comments</p>

        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Seven -->
    <div class="row">
        <div class="col-md-9">
            <a href="#">
                <img class="img-responsive" src="Images/projectLaravel/CreateCommentPage.JPG" alt="">
            </a>
        </div>
        <div class="col-md-3">
            <h3>Create Comment Page</h3>

            <p>When the user is on the homepage and wants to create a comment for that exercise, he can create his
                comment on this page. After he filled in the comment it will be linked to that specific exercise and his
                username will be placed with it.</p>

        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Eight -->
    <div class="row">
        <div class="col-md-9">
            <a href="#">
                <img class="img-responsive" src="Images/projectLaravel/CommentPage.JPG" alt="">
            </a>
        </div>
        <div class="col-md-3">
            <h3>Comment Page</h3>

            <p>When the user clicks on the homepage to see the comments here he will be redirected to. The comments
                specific for that exercise will be shown to him.</p>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Nine -->
    <div class="row">
        <div class="col-md-9">
            <a href="#">
                <img class="img-responsive" src="Images/projectLaravel/AccountPage.JPG" alt="">
            </a>
        </div>
        <div class="col-md-3">
            <h3>Account Page</h3>

            <p>The user has several things he can do besides just creating exercises, for instance he can delete and
                edit them. Also he is able to put them to active or non-active, what this means is when they are
                non-active the exercises can't be seen by anyone else but you. This page shows only the exercises he or
                she owns.
            </p>

        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Ten -->
    <div class="row">
        <div class="col-md-9">
            <a href="#">
                <img class="img-responsive" src="Images/projectLaravel/AdminPage.JPG" alt="">
            </a>
        </div>
        <div class="col-md-3">
            <h3>Admin Page</h3>

            <p>On this page only the users with the role Admin can get here, the only function they have is to assign
                roles to people. At this moment the only role that is really important is the admin role, but when users
                are violating the website with weird exercises there can be punishing roles. An example will be unable
                to make anymore posts.</p>

        </div>
    </div>
    <!-- /.row -->

    <hr>


    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Made by: Stef</p>
            </div>
        </div>
        <!-- /.row -->
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
@endsection
