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
                  <h3>Statistique</h3>
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
                            <div class="col-md-12 col-sm-8 col-xs-12">
                                    <div class="x_panel">
                                      <div class="x_title">
                                        <h2>Héstograme des quantité vendus </h2>
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
                    
                                        <div id="mainb" style="height:350px;"></div>
                    
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12 col-sm-8 col-xs-12">
                                    <div class="x_panel">
                                      <div class="x_title">
                                        <h2>Héstograme des chiffres d affaire</h2>
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
                    
                                        <div id="mainbb" style="height:350px;"></div>
                    
                                      </div>
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
            <div class="pull-right">
              Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
          </footer>
          <!-- /footer content -->
         
  </div>
</div>
@endsection