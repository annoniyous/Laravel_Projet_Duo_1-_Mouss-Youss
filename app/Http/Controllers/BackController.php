<?php

namespace App\Http\Controllers;


// use App\Models\BackOffice;
use Illuminate\Http\Request;

class BackController extends Controller
{
    
    public function index(){

        // $back =BackOffice::all();
       

        
        return view('page/back');

    }


}
