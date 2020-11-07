<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\Contact;
use Auth;


class controller_user extends Controller
{
    public function index(){
        if (!Auth::guard()->check()) {
            // if successful, then redirect to their intended location
            return redirect('/login_gan');
        }
        

        return view('user.index');
    }


    public function store(Request $request){
        $user = new user();
        $user->name = $request->input('nom');
        $user->Prenom = $request->input('prenom');
        $user->Date_Naiss = $request->input('date_naiss');
        $user->Tel = $request->input('tel');     
       $user->email = $request->input('email');
        $user->Login = $request->input('login');
        $user->password = Hash::make($request->input('mdp'));
        $user->isadmin = $request->input('admin');
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $photo_name = time().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path('/images/users'),$photo_name);
                
        }
        else{
            $photo_name="user_default.png";
        }
        $user->photo = 'images/users/'.$photo_name;
            
        $user->save();
          

         return redirect('/user/afficher');
         
     }
     public function afficher(){
       // return view('fournisseur.afficher');
        // if (!Auth::guard()->check()) {
        //     // if successful, then redirect to their intended location
        //     return redirect('/login_gan');
        // }
        $listuser = User::all();
        $listcontact = Contact::all();
        return view('user.afficher',['user' =>$listuser],['contact' =>$listcontact]);
        
        // $listcontact = Contact::all();
        // return view('user.afficher',['contact' =>$listcontact]);
    }
    public function edit($id){
        $user=User::find($id);
       
        return view('user.edit',['user' =>$user]);
    }
    public function update(Request $request,$id){
        $user=User::find($id);
        $user->name = $request->input('nom');
        $user->Prenom = $request->input('prenom');
        $user->Date_Naiss = $request->input('date_naiss');
        $user->Tel = $request->input('tel');     
       $user->email = $request->input('email');
        $user->Login = $request->input('login');
        $user->password = Hash::make($request->input('mdp'));
        
        if($request->hasFile('photo')){
            if (file_exists($user->photo)) 
            {
                unlink($user->photo);
            }

            $photo = $request->file('photo');
            $photo_name = time().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path('/images/users'),$photo_name);
            $user->photo = 'images/users/'.$photo_name;
                
        }
        
            
        $user->save();
          

         return redirect('/user/afficher');
    }
    public function destroy(Request $request,$id){
        $user=User::find($id);
        $user->delete();
        return redirect('/user/afficher');
    }
}
