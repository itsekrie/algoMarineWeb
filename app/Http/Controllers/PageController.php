<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function Homepage(){
        return view('Homepage');
    }

    function Profile(){
        $name = 'Company Profile';
        return view('Profile', compact('name'));
    }
}
