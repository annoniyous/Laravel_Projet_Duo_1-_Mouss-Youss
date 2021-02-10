<?php

namespace App\Http\Controllers;


use App\Models\Home_1liste;
use App\Models\Home_2liste;
use Illuminate\Http\Request;

class BackController extends Controller
{
    
    public function index(){

        $homeListe1 =Home_1liste::all();
       

         return view('page/back',compact('homeListe1'));

    }

    public function index2(){

        $homeListe2 =Home_2liste::all();
       

         return view('BackOffice/page/bHomeListe2',compact('homeListe2'));

    }

    public function store(Request $request)
    {
        $store = New Home_1liste;
        $store->texte = $request->texte;
        $store->save();
        return redirect()->back();
    }

    public function store2(Request $request)
    {
        $store = New Home_2liste;
        $store->texte = $request->texte;
        $store->save();
        return redirect()->back();
    }

    public function destroy1($id){
        
        $destroy = Home_1liste::find($id);
        $destroy->delete();
        return redirect()->back();
    
    }




}
