<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicament;
use App\Lot;
use App\vent;
use App\Contact;
use Auth;
class controller_medicament extends Controller
{
    public function index(){
        if (!Auth::guard()->check()) {
            // if successful, then redirect to their intended location
            return redirect('/login_gan');
        }
        return view('medicament.index');
    }

    public function afficher(){
        // if (!Auth::guard()->check()) {
        //     // if successful, then redirect to their intended location
        //     return redirect('/login_gan');
        // }
        $listmedicament = Medicament::all();
        $listcontact = Contact::all();
        return view('medicament.afficher',['medicament' =>$listmedicament],['contact' =>$listcontact]);
    }
    public function store(Request $request){
        $medicament = new Medicament();
        $medicament ->nom = $request->input('nom_medicament');
        $medicament ->Dosage = $request->input('dosage');
        $medicament ->Forme = $request->input('forme');
        $medicament ->Famille = $request->input('famille');
        $medicament ->Qte_min= $request->input('Qte_min');
        $medicament ->Rembourssable = $request->input('remboursable') ? 'Oui' : 'Non'; 
        //$medicament ->Rembourssable= $request->input('remboursable');
        
        
        $medicament->save();
        return redirect('/medicament/afficher');
    }
    public function edit($id){
        $medicament=Medicament::find($id);
        return view('medicament.edit',['medicament' =>$medicament]);
    }
    public function update(Request $request,$id){
        $medicament=Medicament::find($id);
        $medicament ->nom = $request->input('nom_medicament');
        $medicament ->Dosage = $request->input('dosage');
        $medicament ->Forme = $request->input('forme');
        $medicament ->Famille = $request->input('famille');
        $medicament ->Qte_min= $request->input('Qte_min');
        //$medicament ->Rembourssable= $request->input('remboursable');
        $medicament ->Rembourssable = $request->input('remboursable') ? 'Oui' : 'Non'; 
       $medicament->save();
         
       return redirect('/medicament/afficher');
        
    }
    public function destroy(Request $request,$id){
        $medicament=Medicament::find($id);
        $medicament->delete();
        return redirect('/medicament/afficher');
    }

    public function detaille($id){
        $medicament=Medicament::find($id);
        $listlot=Lot::where('id_med',$id)->get();
        return view('medicament.detaille',['medicament' =>$medicament,'lots' =>$listlot]);
        
    }


}
