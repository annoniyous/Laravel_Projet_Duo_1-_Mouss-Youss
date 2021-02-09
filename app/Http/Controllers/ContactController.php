<?php

namespace App\Http\Controllers;

use App\Models\Contact_dynamic;
use App\Models\Contact_static;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index(){

        $contactDynamic =Contact_dynamic::all();
        $contactStatic =Contact_static::all();
        
        return view('page/contact', compact('contactDynamic','contactStatic',));

    }

}
