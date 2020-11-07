@extends('layouts.template')
@section('content')
<div class="container body">
    <div class="main_container">
      @include('layouts.menu',['user' => Auth::user()])
      <!-- page content -->
      <div class="right_col" role="main">
              <div class="">
                <div class="page-title">
                  <div class="title_left">
                    <h3>Nouveau Fournisseur</h3>
                  </div>
    
                  <div class="title_right">
                    <div class="col-md-2 col-sm-2 col-xs-6 form-group pull-right top_search">
                      
                    </div>
                  </div>
                </div>
    
                <div class="clearfix"></div>
    
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      
                      
                      <div class="x_content">
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('/fourniseur/store')}}" method="POST">
                           {{csrf_field()}}
                          {{-- <div class="form-group">
                            {{-- <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nom">Nom <span class="required">*</span>
                            </label> --}}
                            {{-- <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="nom" name="nom" required="required" class="form-control col-md-7 col-xs-12">
                            </div> 
                          </div> --}}
                          <div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Nom" id="nom" name="nom" >
                             <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                           </div>
                          
                          {{-- <div class="form-group">
                            <label for="adresse" class="control-label col-md-3 col-sm-3 col-xs-12">Adresse</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="adresse" class="form-control col-md-7 col-xs-12" type="text" name="adresse">
                            </div>
                          </div> --}}
                           
                          <div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Adresse" id="adresse" name="adresse" >
                             <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                           </div>

                          {{-- <div class="form-group">
                            <label for="telephone" class="control-label col-md-3 col-sm-3 col-xs-12">Téléphone</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="telephone" class="form-control col-md-7 col-xs-12" type="tel"  name="phone" >

                            </div>
                          </div> --}}

                          <div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess5" placeholder="Tel" name="phone">
                            <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                          </div>
                       {{-- <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="email" class="form-control col-md-7 col-xs-12" type="email" name="email">
                        </div>
                      </div> --}}
                      <div class="col-md-9 col-sm-9 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess5" placeholder="Email" name="email">
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      {{-- <div class="ln_solid"></div> --}}
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
                          <button type="submit" class="btn btn-success">Enregistrer</button>
                         {{-- <button class="btn btn-primary" type="reset">Réinitialiser</button> --}}
                         <a href="{{url('fourniseur/afficher')}}" class="btn btn-danger">Annuler</a>
                        </div>
                      </div>

                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /page content -->
    
            <!-- footer content -->
            <footer>
                
                  <div class="clearfix"></div>
              </footer>
            <!-- /footer content -->
    </div>
  </div>
@endsection