<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home()    { return view('guest.index'); }
    public function about()   { return view('guest.about'); }
    public function services(){ return view('guest.services'); }
    public function contact() { return view('guest.contact'); }
    public function login()   { return view('guest.auth.login'); }
}
