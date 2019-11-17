<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    function home(){
        return view('welcome');
    }
    function about(){
        return view('about');
    }
}
