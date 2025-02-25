<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\View\View;

class GuestController extends Controller
{
    // Display the home page with the latest 3 services
    public function home(): View
    {
        $services = Service::latest()->take(3)->get();
        return view('guest.index', ['services' => $services]);
    }

    // Display the about page
    public function about(): View
    {
        return view('guest.about');
    }

    // Display the services page
    public function services(): View
    {
        $services = Service::all();
        return view('guest.services', ['services' => $services]);
    }

    // Display the contact page
    public function contact(): View
    {
        return view('guest.contact');
    }

    // Display the login page
    public function login(): View
    {
        return view('guest.auth.login');
    }
}
