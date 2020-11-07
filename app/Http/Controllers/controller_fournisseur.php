<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fournisseur;
use App\Achat;
use App\Contact;
use Auth;
class controller_fournisseur extends Controller
{
    public function index(){
        if (!Auth::guard()->check()) {
            // if successful, then redirect to their intended location
            return redirect('/login_gan');
        }
        
        return view('fournisseur.index');
    }

    public function afficher(){
        // return view('fournisseur.afficher');
        
        $listfournisseur = Fournisseur::all();
        $listcontact = Contact::all();
        return view('fournisseur.afficher',['fournisseur' =>$listfournisseur],['contact' =>$listcontact]);
    }
    public function store(Request $request){
       $fournisseur = new Fournisseur();
       $fournisseur->nom = $request->input('nom');
       $fournisseur->Adresse = $request->input('adresse');
       $fournisseur->Tel = $request->input('phone');
       $fournisseur->Email = $request->input('email');
       
       $fournisseur->save();
         
       return redirect('/fourniseur/afficher');
        
    }
    public function edit($id){
        $fournisseur=Fournisseur::find($id);
        
        return view('fournisseur.edit',['fournisseur' =>$fournisseur]);
    }
    public function update(Request $request,$id){
        $fournisseur=Fournisseur::find($id);
        $fournisseur->nom = $request->input('nom');
       $fournisseur->Adresse = $request->input('adresse');
       $fournisseur->Tel = $request->input('phone');
       $fournisseur->Email = $request->input('email');
       $fournisseur->save();
         
       return redirect('/fourniseur/afficher');
        
    }
    public function destroy(Request $request,$id){
        $fournisseur=Fournisseur::find($id);
        $fournisseur->delete();
        return redirect('/fourniseur/afficher');
    }

    public function detaille($id){
        $fournisseur=Fournisseur::find($id);
        $listachat=Achat::where('id_fourni',$id)->get();
        
        return view('fournisseur.detaille',['fournisseur' =>$fournisseur,'achats' =>$listachat]);
        
    }



}
