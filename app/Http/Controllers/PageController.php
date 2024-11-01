<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{

    function Homepage(){
        $title = 'Homepage';
        return view('Homepage',compact('title'));
    }

    function Profile(){
        $name = 'Company Profile';
        return view('Profile', compact('name'));
    }
}