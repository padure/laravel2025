<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view("index");
    }
    public function contacts(){
        return view("contacts");
    }
    public function posts(){
        return view("posts");
    }
}
