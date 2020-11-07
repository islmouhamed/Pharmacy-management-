<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class EtudiantLoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:etudiant', ['except' => ['logout']]);
    }

    public function showLoginForm()
    {
      return view('auth_template.login',['url' => 'etudiant']);
    }

    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);

      // Attempt to log the user in
      if (Auth::guard('etudiant')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        // if successful, then redirect to their intended location
        return redirect()->intended(route('etudiant.dashboard'));
      }

      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email', 'remember'))->with(['msg'=> 'These credentials do not match our records.']);
    }

    public function logout()
    {
        Auth::guard('etudiant')->logout();
        return redirect('/etudiant/login');
    }
}
