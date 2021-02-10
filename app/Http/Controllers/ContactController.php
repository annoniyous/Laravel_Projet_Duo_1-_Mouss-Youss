<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Form;
use Illuminate\Http\Request;

class ContactController extends Controller
{
 public function index(){
     $contact = Contact::all();
    //  $form = Form::all();
    //  $cards = [$contact[1],$contact[2],$contact[3]];
     
     return view('page.contact', compact('contact'));
 }
//  public function create(){
//     return view('create');
// }
// public function store(Request $request){
//     $store = new Form;
//     $store->name = $request->name;
//     $store->email = $request->email;
//     $store->subject = $request->subject;
//     $store->message = $request->message;
//     $store->save();
//     // dd($request->nom, $request->type, $request->niveau);
//     return redirect()->back();

    
}


