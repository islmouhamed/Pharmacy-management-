<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Achat;
use App\Fournisseur;
use App\vent;
use App\Lot;
use App\Contact;
use Auth;


class controller_achat extends Controller
{
    public function index(){
        if (!Auth::guard()->check()) {
            // if successful, then redirect to their intended location
            return redirect('/login_gan');
        }
        $listfournisseur = Fournisseur::all();
       
        return view('achat.index',['fournisseur' =>$listfournisseur]);
    }
    public function store(Request $request){
        $achat = new Achat();
        $achat->id_fourni = $request->input('fournisseur_id');
        $achat->date = $request->input('date_achat');
    
        $achat->save();
          
         return redirect('/achat/afficher');
         
     }
     public function afficher(){
        //return view('fournisseur.afficher');
        // if (!Auth::guard()->check()) {
        //     // if successful, then redirect to their intended location
        //     return redirect('/login_gan');
        // }
        $listachat = Achat::all();
        $listcontact = Contact::all();
        return view('achat.afficher',['achats' =>$listachat],['contact' =>$listcontact]);
    }
    public function edit($id){
        $achat=Achat::find($id);
        $listfournisseur = Fournisseur::all();
        
        return view('achat.edit',['achat' =>$achat ,'fournisseur' =>$listfournisseur]);
    }
    public function update(Request $request,$id){
        $achat=Achat::find($id);
        $achat->id_fourni = $request->input('fournisseur_id');
        $achat->date = $request->input('date_achat');
        
        $achat->save();
          
         return redirect('/achat/afficher');
        
    }
    public function destroy(Request $request,$id){
        $achat=Achat::find($id);
        $achat->delete();
        return redirect('/achat/afficher');
    }
    public function detaille($id){
        $achat=Achat::find($id);
        $listlot=Lot::where('num_A',$id)->get();
        
        return view('achat.detaille',['achat' =>$achat,'lots' =>$listlot]);
        
    }


}
