<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('templates.default')->with('hope','lakhdar');
});

Route::get('/login_gan', function () {
    if (Auth::guard()->check()) {
        // if successful, then redirect to their intended location
        return redirect('/home');
      }
    return view('auth_template.login');
})->name('login_gan');

Route::get('/test', function () {
    return view('notes.create_note')->with('hope','lakhdar');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('etudiant')->group(function() {
    Route::get('/login', 'Auth\EtudiantLoginController@showLoginForm')->name('etudiant.login');
    Route::post('/login', 'Auth\EtudiantLoginController@login')->name('etudiant.login.submit');
    Route::get('/', 'EtudiantController@index')->name('etudiant.dashboard');
    Route::get('/logout', 'Auth\EtudiantLoginController@logout')->name('etudiant.logout');
 
        // Password reset routes
    Route::post('/password/email', 'Auth\EtudiantForgotPasswordController@sendResetLinkEmail')->name('etudiant.password.email');
    Route::get('/password/reset', 'Auth\EtudiantForgotPasswordController@showLinkRequestForm')->name('etudiant.password.request');
    Route::post('/password/reset', 'Auth\EtudiantResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\EtudiantResetPasswordController@showResetForm')->name('etudiant.password.reset');
    });

    Route::get('/fourniseur', 'controller_fournisseur@index');
    Route::get('/fourniseur/afficher', 'controller_fournisseur@afficher');
    Route::post('/fourniseur/store', 'controller_fournisseur@store');
    Route::get('/fourniseur/edit/{id}', 'controller_fournisseur@edit');
    Route::put('/fourniseur/update/{id}', 'controller_fournisseur@update');
    Route::delete('/fourniseur/destroy/{id}', 'controller_fournisseur@destroy');
    Route::get('/fourniseur/detaille/{id}', 'controller_fournisseur@detaille');
    /************************************************************************************/
    Route::get('/medicament', 'controller_medicament@index');
    Route::get('/medicament/afficher', 'controller_medicament@afficher');
    Route::post('/medicament/store', 'controller_medicament@store');
    Route::get('/medicament/edit/{id}', 'controller_medicament@edit');
    Route::put('/medicament/update/{id}', 'controller_medicament@update');
    Route::delete('/medicament/destroy/{id}', 'controller_medicament@destroy');
    Route::get('/medicament/detaille/{id}', 'controller_medicament@detaille');
     /************************************************************************************/
     Route::get('/user', 'controller_user@index');
     Route::get('/user/afficher', 'controller_user@afficher');
     Route::post('/user/store', 'controller_user@store');
     Route::get('/user/edit/{id}', 'controller_user@edit');
     Route::put('/user/update/{id}', 'controller_user@update');
     Route::delete('/user/destroy/{id}', 'controller_user@destroy');
     /************************************************************************************/
     Route::get('/achat', 'controller_achat@index');
     Route::get('/achat/afficher', 'controller_achat@afficher');
     Route::post('/achat/store', 'controller_achat@store');
     Route::get('/achat/edit/{id}', 'controller_achat@edit');
     Route::put('/achat/update/{id}', 'controller_achat@update');
     Route::delete('/achat/destroy/{id}', 'controller_achat@destroy');
     Route::get('/achat/detaille/{id}', 'controller_achat@detaille');
     /************************************************************************************/
     Route::get('/lot', 'controller_lot@index');
     Route::get('/lot/afficher', 'controller_lot@afficher');
     Route::post('/lot/store', 'controller_lot@store');
     Route::get('/lot/edit/{id}', 'controller_lot@edit');
     Route::put('/lot/update/{id}', 'controller_lot@update');
     Route::delete('/lot/destroy/{id}', 'controller_lot@destroy');
     Route::get('/lot/detaille/{id}', 'controller_lot@detaille');
     /************************************************************************************/
     Route::get('/vent', 'controller_vent@index');
     Route::get('/vent/in2/{test}', 'controller_vent@index2');
     Route::get('/vent/afficher', 'controller_vent@afficher');
     Route::post('/vent/store', 'controller_vent@store');
     Route::get('/vent/edit/{id}', 'controller_vent@edit');
     Route::put('/vent/update/{id}', 'controller_vent@update');
     Route::delete('/vent/destroy/{id}', 'controller_vent@destroy');
     Route::post('/vent_table', 'controller_vent@recuperer');
     Route::get('/vent/statistique', 'controller_vent@statistique');
     Route::get('/vent/detaille/{id}', 'controller_vent@detaille');
     Route::get('/vent/echart_jours', 'controller_vent@chart');
     Route::get('/vent/echart_mois', 'controller_vent@chart2');
     /************************************************************************************/
     Route::get('/contact', 'controller_contact@index');
     Route::get('/contact/afficher', 'controller_contact@afficher');
     Route::post('/contact/store', 'controller_contact@store');
     Route::get('/contact/edit/{id}', 'controller_contact@edit');
     Route::put('/contact/update/{id}', 'controller_contact@update');
    /************************************************************************************/
     Route::get('/presentation', 'controller_presentation@index');
     Route::get('/presentation/afficher', 'controller_presentation@afficher');
     Route::post('/presentation/store', 'controller_presentation@store');
     Route::get('/presentation/edit/{id}', 'controller_presentation@edit');
     Route::put('/presentation/update/{id}', 'controller_presentation@update');
