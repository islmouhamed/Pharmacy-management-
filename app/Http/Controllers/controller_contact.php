<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class controller_contact extends Controller
{
    public function index(){
            
        return view('contact.index');
    }
    public function afficher(){
        // return view('fournisseur.afficher');
        // if (!Auth::guard()->check()) {
        //     // if successful, then redirect to their intended location
        //     return redirect('/login_gan');
        // }
        $listcontact = Contact::all();
        return view('contact.afficher',['contact' =>$listcontact]);
    }
    public function store(Request $request){
        $contact = new Contact();
        $contact->addres = $request->input('addres');
        $contact->email = $request->input('email');
        $contact->tel  = $request->input('tel');
        $contact->ouverture = $request->input('ouverture');
        $contact->map = $request->input('map');
        
        $contact->save();
          
        return redirect('/contact/afficher');
         
     }
     public function edit($id){
        $contact=Contact::find($id);
        return view('contact.edit',['contact' =>$contact]);
    }

    public function update(Request $request,$id){
        $contact=Contact::find($id);
        $contact->addres = $request->input('addres');
        $contact->email = $request->input('email');
        $contact->tel  = $request->input('tel');
        $contact->ouverture = $request->input('ouverture');
        $contact->map = $request->input('map');
        
        $contact->save();
          
        return redirect('/contact/afficher');
        
    }

}
