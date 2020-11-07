<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lot;
use App\Achat;
use App\Medicament;
use App\VentLot;
use App\Contact;
use Auth;

class controller_lot extends Controller
{
    public function index(){
        if (!Auth::guard()->check()) {
            // if successful, then redirect to their intended location
            return redirect('/login_gan');
        }
        $listachat = Achat::all();
        $listmedicament = Medicament::all();
       
        
        return view('lot.index',['achats' =>$listachat,'medicaments' =>$listmedicament]);
    }

    public function store(Request $request){
        $lot = new Lot();
        $lot->num_A = $request->input('achat_id');
        $lot->id_med = $request->input('medicament_id');
        $lot->Date_Fab = $request->input('date_fab');
        $lot->Date_pre = $request->input('date_per');
        $lot->prix = $request->input('prix');
        $lot->qt_acht = $request->input('qt_a');
         $lot->qt_st = $request->input('qt_a');
    
        $lot->save();
          
        return redirect('/lot/afficher');
         
     }
     public function afficher(){
        //return view('fournisseur.afficher');
        // if (!Auth::guard()->check()) {
        //     // if successful, then redirect to their intended location
        //     return redirect('/login_gan');
        // }
        $listlot = Lot::all();
        $listcontact = Contact::all();
        return view('lot.afficher',['lots' =>$listlot],['contact' =>$listcontact]);
    }
    public function edit($id){
        $lot=Lot::find($id);
        $listachat = Achat::all();
        $listmedicament = Medicament::all();
        
        return view('lot.edit',['lot' =>$lot],['achats' =>$listachat,'medicaments' =>$listmedicament]);
    }
    public function update(Request $request,$id){
        $lot=Lot::find($id);
        $lot->num_A = $request->input('achat_id');
        $lot->id_med = $request->input('medicament_id');
        $lot->Date_Fab = $request->input('date_fab');
        $lot->Date_pre = $request->input('date_per');
        $lot->prix = $request->input('prix');
        $lot->qt_acht = $request->input('qt_a');
        $lot->qt_st = $request->input('qt_a');
    
        $lot->save();
          
         return redirect('/lot/afficher');
        
    }

    public function destroy(Request $request,$id){
        $lot=Lot::find($id);
        $lot->delete();
        return redirect('/lot/afficher');
    }
     public function detaille($id){
         $lot=Lot::find($id);
         $listventlot=Ventlot::where('lot_id',$id)->get();
         
         return view('lot.detaille',['lot' =>$lot,'vents' =>$listventlot]);
        
     }

}
