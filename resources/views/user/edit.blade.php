@extends('layouts.template')
@section('content')
<div class="container body">
  <div class="main_container">
    @include('layouts.menu', ['user' => Auth::user()])
    <!-- page content -->
    <div class="right_col" role="main">
            <div class="">
              <div class="page-title">
                <div class="title_left">
                  <h3>Modifier Pharmaciens</h3>
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
                      
                            <div class="x_panel">
                                    
                                    <div class="x_content">
                                      <br />
                                      <form class="form-horizontal form-label-left input_mask"  action="{{url('/user/update/'.$user->id.'')}}" method="POST" enctype="multipart/form-data">
                                      <input type="hidden" name="_method" value="PUT">
                                        {{csrf_field()}}
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                         <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Nom" id="nom" name="nom" value="{{$user->name}}" >
                                          <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                  
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                          <input type="text" class="form-control" id="inputSuccess3" placeholder="Prenom" id="prenom" name="prenom" value="{{$user->Prenom}}">
                                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                        </div>
                  
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                          <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email" name="email" value="{{$user->email}}">
                                          <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                  
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                          <input type="text" class="form-control" id="inputSuccess5" placeholder="Tel" name="tel" value="{{$user->Tel}}" >
                                          <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                                        </div>
                                        
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="inputSuccess5" placeholder="Date naissance" name="date_naiss" value="{{$user->Date_Naiss}}">
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                              </div>   
                                                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    {{-- <label class="col-md-12 " for="inputImage" title="Upload image file">                   --}}
                                                    <input type="file" class="form-control has-feedback-right" id="inputImage" name="photo" accept="image/*" placeholder="photo" >
                                                    <span class="fa fa fa-upload form-control-feedback right" data-toggle="tooltip" title="Import image with Blob URLs" aria-hidden="true"></span>                                    
                                                    </div>  
                                                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="inputSuccess5" placeholder="Login" name="login" value="{{$user->Login}}">
                                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                              </div>          
                                              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <input type="text" class="form-control has-feedback-right" id="inputSuccess5" placeholder="Mot de passe" name="mdp" >
                                                    <span class="fa fa-unlock-alt form-control-feedback right" aria-hidden="true"></span>
                                                  </div>            
                                        
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                          <div class="col-md-8 col-sm-8 col-xs-12 col-md-7">
                                            <button type="submit" class="btn btn-success">Enregistrer</button>
                                            <a href="{{url('user/afficher')}}" class="btn btn-danger">Annuler</a>
                                          </div>
                                        </div>
                  
                                      </form>
                                    </div>
                                  </div>

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