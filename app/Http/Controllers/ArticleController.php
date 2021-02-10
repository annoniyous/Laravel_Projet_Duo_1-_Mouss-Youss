<?php

namespace App\Http\Controllers;

use App\Models\Article_dynamic;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index(){

        $articleDynamic =Article_dynamic::all();
       
        

        
        return view('page/article', compact('articleDynamic'));

    }
    
}
