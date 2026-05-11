<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index (){
        $my_nam = "Tom";
        return view ('user',['name'=> $my_nam]);
    }

    public function person()
    {$name = "Sem";$age = 20;$height = 180;  $weight = 75;   $hobby = "программирование";
    
    return view('person', ['name' => $name,'age' => $age,'height' => $height,'weight' => $weight,'hobby' => $hobby
    ]);
}
}

