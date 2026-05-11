<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Main;

class MainController extends Controller
{
    public function index(){

        $main = Main::all();
        return view('front.main',['main'=>$main]);
    }
}

