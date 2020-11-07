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
                </div>
  
                <div class="title_right">
                  <div class="col-md-2 col-sm-2 col-xs-6 form-group pull-right top_search">
                    <div class="input-group">
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="clearfix"></div>
  
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Contact</h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                          </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                            <br />
                            <form class="form-horizontal form-label-left input_mask" action="{{url('/contact/store')}}" method="POST">
                                {{csrf_field()}}
                              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Address" name="addres">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                              </div>
        
                              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control" id="inputSuccess3" placeholder="Email" name="email">
                                <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
                              </div>
        
                              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Tel" name="tel">
                                <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control" id="inputSuccess5" placeholder="Ouverture" name="ouverture">
                                <span class="fa fa-clock-o form-control-feedback right" aria-hidden="true"></span>
                              </div>
        
                              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Map" name="map">
                                    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                  </div>     
                                                            
                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-5">
                                  <button type="submit" class="btn btn-success">Enregister</button>
                                  <button type="button" class="btn btn-danger">Annuler</button>
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