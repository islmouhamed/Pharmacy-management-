<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vent;
use App\User;
use App\Lot;
use App\Ventlot;
use App\Contact;
use Auth;


class controller_vent extends Controller
{
    public function index(){
        if (!Auth::guard()->check()) {
            // if successful, then redirect to their intended location
            return redirect('/login_gan');
        }
        if(Auth::guard()->user()->isadmin=="admin"){
            return redirect('vent/statistique');
        }
        
            $listuser = User::all();
            $listlot=Lot::where('qt_st','>','0')->get();
        
            return view('vent.index',['users' =>$listuser],['lots' =>$listlot]);
        
        
        
    }
    public function index2($test){
        if (!Auth::guard()->check()) {
            // if successful, then redirect to their intended location
            return redirect('/login_gan');
        }
        
    
            $listuser = User::all();
            $listlot=Lot::where('qt_st','>','0')->get();
        
            return view('vent.index',['users' =>$listuser],['lots' =>$listlot]);
        
        
        
        
    }

    public function store(Request $request){
        $nbr_total = 0;
        $vent = new Vent(); 
        $vent->id_phar = $request->input('id_phar');
        $vent->prix_total = $request->input('prix_total');
        $vent->date = $request->input('date_vent');
        $vent->save();
        foreach ($request->input('id_lot') as $id_lot) {
            $nbr_total +=$request->input('qty'.$id_lot);
            $lot = Lot::find($id_lot);
            $lot->qt_st -= $request->input('qty'.$id_lot);
            $lot->save();

            $vent_lot = new Ventlot();
            $vent_lot->vent_id = $vent->id;
            $vent_lot->lot_id = $id_lot;
            $vent_lot->nbr_medicaments = $request->input('qty'.$id_lot);
            $vent_lot->prix_total_produit = $request->input('prix_total_produit'.$id_lot);
            $vent_lot->save();
        }
        // $vent = Vent::find($vent->id);
        $vent->qte_total = $nbr_total;
        $vent->save();

        return redirect('vent/afficher');
        
         
     }
     public function afficher(){
        // return view('vent.afficher');
        // if (!Auth::guard()->check()) {
        //     // if successful, then redirect to their intended location
        //     return redirect('/login_gan');
        // }
        $listvent = Vent::all();
        $listcontact = Contact::all();
        return view('vent.afficher',['vents' =>$listvent],['contact' =>$listcontact]);
    }
    public function recuperer(Request $request){
        $lot = Lot::find($request->input('id_lot'));
        $tab = [];
        $tab['nom'] = $lot->medicament->nom;
        $tab['prix'] = $lot->prix;
        $tab['id'] = $lot->id;
        return $tab;
    }

    public function edit($id){
        $vent=vent::find($id);
        $listuser = User::all();
        $listlot = Lot::all();
        return view('vent.edit',['vent' =>$vent],['users' =>$listuser,'lots' =>$listlot]);
    }

    public function update(Request $request,$id){
        $vent=vent::find($id);
        $vent->num_lot = $request->input('num_lot');
        $vent->id_phar = $request->input('id_phar');
        $vent->date = $request->input('date_vent');
        $vent->qt = $request->input('qt');
    
        $vent->save();
          
         return redirect('/vent/afficher');
        
    }
    public function destroy(Request $request,$id){
        $vent=vent::find($id);
        $vent->delete();
        return redirect('/vent/afficher');
    }
    public function detaille($id){
        $vent=vent::find($id);
        $listVt=Ventlot::where('vent_id',$id)->get();
        $listlo=Ventlot::where('lot_id',$id)->get();
        
        return view('vent.detaille',['vent' =>$vent,'vts' =>$listVt,'los' =>$listlo]);
        
    }

    public function statistique(){
            
        return view('vent.statistique');
    }

    public function chart(){
        $data = vent::where('date','LIKE',date('Y-m').'%')->get();
       
        $tab = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
        foreach ($data as $value) {
            for ($i=0; $i <31 ; $i++) { 
                if ((date('d',strtotime($value->date))-1)==$i) {
                    $tab[$i] += $value->qte_total;
                }
            }

            
        }
        return $tab;
    //    $data = Vent::where('')
    }
    public function chart2(){
        $data = vent::where('date','LIKE',date('Y').'%')->get();
       
        $tab = [0,0,0,0,0,0,0,0,0,0,0,0];
        foreach ($data as $value) {
            for ($i=0; $i <12 ; $i++) { 
                if ((date('m',strtotime($value->date))-1)==$i) {
                    $tab[$i] += $value->prix_total;
                }
            }

            
        }
        return $tab;
    //    $data = Vent::where('')
    }
   
}
