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
                    @foreach ( $presentation as $p )
                    <h2>{{$p->nom_pharmacie}}</h2>
                    @endforeach
                  {{-- <h3>Plain Page</h3> --}}
                </div>
  
                {{-- <div class="title_right">
                  <div class="col-md-2 col-sm-2 col-xs-6 form-group pull-right top_search">
                    <div class="input-group">
                      <button type="button" class="btn btn-round btn-success btn-sm">
                          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> CREATE
                      </button>
                    </div>
                  </div>
                </div> --}}
              </div>
  
              <div class="clearfix"></div>
  
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                     <div class="x_title">
                       <h3>Présentation</h3>
                    
                      {{-- <ul class="nav navbar-right panel_toolbox">
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
                      </ul> --}}
                      {{-- <div class="clearfix"></div>--}}
                    </div> 
                    <div class="x_content">
                            <div class="col-md-12 col-lg-12 col-sm-12">
                                @foreach ( $presentation as $p )
                                {!!$p->prsnt !!}
                                @endforeach
                                    <!-- blockquote -->
                                    {{-- <blockquote>
                                      <p> </p>
                                      <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                      </footer>
                                    </blockquote> --}}
              
                                    {{-- <blockquote class="blockquote-reverse"> --}}
                                       
                                      
                                       {{-- <h2>   {{$p->nom_pharmacie}}</h2>
                                       <p>
                                            {!!$p->prsnt !!}
                                       </p> --}}
                                      
                                      {{-- <footer>Someone famous in <cite title="Source Title">Source Title</cite> --}}
                                      {{-- </footer> --}}
                                    {{-- </blockquote> --}}
                                  </div>
                                  {{-- <div class="col-md-4 col-lg-4 col-sm-5">
                                 <img src="C:\xampp\htdocs\GAN_MULTHI_AUTH\public\images\users\1567196613.jpg" alt="">
                                  </div> --}}
              
                                  <div class="clearfix"></div>
              
                                  {{-- <div class="col-md-12">
                                    <h4>Labels and badges</h4>
                                    <span class="label label-default">Default</span>
                                    <span class="label label-primary">Primary</span>
                                    <span class="label label-success">Success</span>
                                    <span class="label label-info">Info</span>
                                    <span class="label label-warning">Warning</span>
                                    <span class="label label-danger">Danger</span>
                                    <span class="badge bg-green">42</span>
                                  </div> --}}
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
                  <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                        <div class="icon"><i class="fa fa-map-marker"></i>
                        </div>
                        <div class="count">Address</div>
                       <h3>
                            @foreach ( $contact as $cntc )
                            <?php echo ($cntc->addres); ?>
                            @endforeach
                       </h3>
                      </div>
                    </div>
    
                    <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-envelope"></i>
                          </div>
                          <div class="count">Email</div>
                          <h3>
                                  @foreach ( $contact as $cntc )
                                  <?php echo ($cntc->email); ?>
                                  @endforeach
                          </h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <div class="tile-stats">
                            <div class="icon"><i class="fa fa-phone"></i>
                            </div>
                            <div class="count">Tel</div>
                            <h3>
                                    @foreach ( $contact as $cntc )
                                    <?php echo ($cntc->tel); ?>
                                    @endforeach
                            </h3>
                          </div>
                        </div>
    
    
    
    
                <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-clock-o"></i>
                    </div>
                    <div class="count">Ouverture</div>
                    <h3>
                      @foreach ( $contact as $cntc )  
                      <?php echo ($cntc->ouverture); ?>
                      @endforeach
                          
                    </h3>
                  </div>
                </div>
              </div>
                <div class="clearfix"></div>
          </footer>
          <!-- /footer content -->
  </div>
</div>
@endsection