<?php

namespace App\Http\Controllers;

use App\Models\Article_dynamic;
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

    public function index3(){

        $bArticle =Article_dynamic::all();
       

         return view('BackOffice/page/bArticle',compact('bArticle'));

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

    public function storeArticle(Request $request)
    {
        $store = New Article_dynamic;
        $store->titre = $request->titre;
        $store->numero = $request->numero;
        $store->subtitle = $request->subtitle;
        $store->texte = $request->texte;
        $store->save();
        return redirect()->back();
    }


    // delete Home liste1
    public function destroy1($id){
        
        $destroy = Home_1liste::find($id);
        $destroy->delete();
        return redirect()->back();
    
    }

    // delete Article
    public function destroyArticle($id){
        
        $destroy = Article_dynamic::find($id);
        $destroy->delete();
        return redirect()->back();
    
    }

    // show Home 
    public function show($id){

        $showL1= Home_1liste::find($id);
        // $showL2= Home_2liste::find($id);


        return view('BackOffice/show/show', compact('showL1'));
    }

    // show Artcile
    public function showArticle($id){

        $showArticle= Article_dynamic::find($id);
       


        return view('BackOffice/show/showArt', compact('showArticle'));
    }

    public function destroy($id){
        
            $destroy = Home_2liste::find($id);
            $destroy->delete();
            return redirect()->back();
        
    }



}
