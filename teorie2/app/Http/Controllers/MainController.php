<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function suma($nr1, $nr2): mixed{
        return $nr1 + $nr2;
    }
}
