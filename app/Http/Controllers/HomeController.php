<?php

namespace App\Http\Controllers;


use App\Models\Home_static;
use App\Models\Home_1liste;
use App\Models\Home_2liste;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){

        $homeStatic =Home_static::all();
        $homeListe1 =Home_1liste::all();
        $homeListe2 =Home_2liste::all();

        
        return view('welcome', compact('homeStatic','homeListe1','homeListe2'));

    }





}
