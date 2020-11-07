<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presentation;
use App\Contact;

class controller_presentation extends Controller
{
    public function index(){
            
        return view('presentation.index');
    }
    public function store(Request $request){
       
        $p = new Presentation();
        $p->nom_pharmacie = $request->input('nom_ph');
        $p->prsnt = $request->input('desc');
        $p->save();
          
        return redirect('/presentation/afficher');

    }
    public function afficher(){
        // return view('fournisseur.afficher');
        // if (!Auth::guard()->check()) {
        //     // if successful, then redirect to their intended location
        //     return redirect('/login_gan');
        // }
        $listcontact = Contact::all();
        $listpresnt = Presentation::all();

        return view('presentation.afficher',['presentation' =>$listpresnt],['contact' =>$listcontact]);
    }
    public function edit($id){
        $presentation=Presentation::find($id);
        return view('presentation.edit',['presentation' =>$presentation]);
    }
    public function update(Request $request,$id){
        $presentation=Presentation::find($id);
        $presentation->nom_pharmacie = $request->input('nom_ph');
        $presentation->prsnt = $request->input('desc');
        $presentation->save();
        return redirect('/presentation/afficher');
    }
}