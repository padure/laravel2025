<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\View\View;

class PageController extends Controller
{
    public function index () :View{
        $services = Service::where('status', "=", "activ")->get();
        return view('pages.index', [
            'services' => $services
        ]);
    }
}
