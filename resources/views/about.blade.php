@extends('layouts.app')

@section('content')

    <div class="container">
        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About me

                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="Images/abc.jpg" alt="">
            </div>


            <div class="col-md-6">
                <h4><strong>I am a student of Creative Media and Game Technologies, a developer and designer from the
                        Netherlands</strong></h4>
                <p>
                    Not so long ago I was looking for something I want to make my job, that is difficult. Since you have
                    to
                    make your own path for your future and with the current system you have to choose the right
                    path immediately. </p>


                <p><br>When I started at the Hogeschool Rotterdam CMGT I wasn't able to write any code. I had never in
                    my
                    life thought I would do something like this, until i signed up. So when most people in my class
                    already had some experience writing code, i had nothing. So that meant for me to study and work
                    harder and become even better. </p>

                <h4><strong>What can I do?</strong></h4>
                {{--<ul>--}}
                {{--<li>Working Solo</li>--}}
                {{--<li>Working in teams</li>--}}
                {{--<li>Take the lead</li>--}}
                {{--<li>Follow orders</li>--}}
                {{--<li>Make and follow a Planning</li>--}}
                {{--<li>HTML(5), CSS(3), PHP, Java</li>--}}
                {{--<li>Working with frameworks: Laravel and Angular</li>--}}
                {{--</ul>--}}


                <strong><br>Working solo and in teams</strong>
                <p>For the past 2 years I have been working in teams for the bigger projects, while other subjects
                    required to work alone.</p>

                <strong><br>Being a leader</strong>
                <p>When you are working in a group there is always someone that takes the leadership. I am not the
                    person that immediately takes that leadership, but when nobody steps in to do it I will. This happened
                    a few times, and mostly what I did was making sure everything went as it was planned.</p>

                <strong><br>Programming</strong>
                <p>I can write HTML(5), CSS(3), PHP, Java, front/back-end frameworks. few of those I worked with are Angular and Laravel.</p>

            </div>
        </div>

        <!-- /.row -->
    </div>

@endsection