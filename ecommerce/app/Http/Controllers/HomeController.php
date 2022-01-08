<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    function Home(){
        return "I am from homecontroller";
    }
    function About(){
        return "I am from about controller";
    }
    function Contact(){
        return "I am from contact controller";
    }
}
