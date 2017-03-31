<?php

namespace App\Http\Controllers;




class AppController extends Controller
{
    public function getAbout()
    {
        return view('about');
    }

    public function getWorks()
    {
        return view('works');
    }

    public function getContact()
    {
        return view('contact');
    }

    public function getWelcome(){
        return view('welcome');
    }
    
    public function getProjectLaravel(){
        return view('projectLaravel');
    }

    

}