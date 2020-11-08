<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelVisitor;

class visitController extends Controller
{
    function homeText(){

        $userIp = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $time = date('F j, Y, g:i a');
        modelVisitor::insert(['ip_address'=> $userIp,'visit_time'=>$time]);

        return view('home');
    }
}
