<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
     return('welcome');
    }
    public function about(){
        return('about');
    }
}
