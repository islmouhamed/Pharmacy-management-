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
              </div>
  
                
  
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
 
                    <div class="x_content">



                            <div class="row">
                                    <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                      <div class="tile-stats">
                                        <div class="icon"><i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="count">Address</div>
                                       <h3>
                                            @foreach ( $contact as $cntc )
                                            {{$cntc->addres}}
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
                                                {{$cntc->email}}
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
                                                {{$cntc->tel}}
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
                                                {{$cntc->ouverture}}
                                                @endforeach
                                        </h3>
                                      </div>
                                    </div>
                                    <div class="row map">
                                        {!!$cntc->map!!}
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
          
          <!-- /footer content -->
  </div>
</div>
@endsection