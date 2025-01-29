<?php

namespace App\Http\Controllers;

use App\Models\card;
use App\Models\status;
use Illuminate\Http\Request;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index()
    {
        return "hello";
    }
}
