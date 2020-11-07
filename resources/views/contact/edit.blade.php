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
                  <h3>Contact</h3>
                </div>
  
                <div class="title_right">
                  
                </div>
              </div>
  
              <div class="clearfix"></div>
  
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                   
                    <div class="x_content">
                            <br />
                            <form  class="form-horizontal form-label-left"  action="{{url('/contact/update/'.$contact->id.'')}}" method="POST">
                              <input type="hidden" name="_method" value="PUT">
                              {{csrf_field()}}
                              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Address" name="addres" value="{{$contact->addres}}">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                              </div>
        
                              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control" id="inputSuccess3" placeholder="Email" name="email" value="{{$contact->email}}">
                                <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
                              </div>
        
                              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Tel" name="tel" value="{{$contact->tel}}">
                                <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control" id="inputSuccess5" placeholder="Ouverture" name="ouverture" value="{{$contact->ouverture}}">
                                <span class="fa fa-clock-o form-control-feedback right" aria-hidden="true"></span>
                              </div>
        
                              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Map" name="map" value="{{$contact->map}}">
                                    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                  </div>     
                                                            
                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-5">
                                  <button type="submit" class="btn btn-success">Enregister</button>
                                  <a href="{{url('presentation/afficher')}}" class="btn btn-danger">Annuler</a> 
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
            <div class="pull-right">
              Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
          </footer>
          <!-- /footer content -->
  </div>
</div>
@endsection