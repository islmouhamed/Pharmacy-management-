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
                  <h3>Profiles Pharmaciens</h3>
                </div>
  
                <div class="title_right">
                  <div class="col-md-2 col-sm-2 col-xs-6 form-group pull-right top_search">
                    @if (Auth::guard()->check())
                    @if (Auth::guard()->user()->isadmin=='admin')
                      <div class="input-group">
                          <a href="{{url('/user')}}" class="btn btn-round btn-success btn-sm">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  Nouveau
                          </a>
                      </div>
                      @endif
                      @endif
                  </div>
                </div>
              </div>
  
              <div class="clearfix"></div>
  
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                   
                    <div class="x_content">
                            @foreach ( $user as $user )
                            <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                                    <div class="well profile_view">
                                      <div class="col-sm-12">
                                        
                                        <div class="left col-xs-7">
                                          <h2>{{$user->name}} {{$user->Prenom}}</h2>
                                          <p><strong>{{$user->Date_Naiss}}</p>
                                          <ul class="list-unstyled">
                                            <li><i class="fa fa-building"></i>{{$user->email}}</li>
                                            <li><i class="fa fa-phone"></i> {{$user->Tel}} </li>
                                          </ul>
                                        </div>
                                        <div class="right col-xs-5 text-center">
                                        <img src="{{asset($user->Photo)}}" alt="" class="img-circle img-responsive">
                                        </div>
                                      </div>
                                      <div class="right col-xs-12 bottom text-right">
                                          @if (Auth::guard()->check())
                                        <div class="col-xs-12  emphasis">
                                            <form action="{{url('/user/destroy/'.$user->id.'')}}" method="POST">
                                    
                                              @if (Auth::guard()->user()->isadmin=='admin')
                                              {{csrf_field()}}
                                              {{method_field('DELETE')}}
                                              {{-- <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i>  </a> --}}
                                              <a href="{{url('/user/edit/'.$user->id.'')}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>  </a>
                                              <button type='submit' class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>  </button>
                                               @endif

                                            </form>
                                            
                                        </div>
                                        @endif
                                      </div>
                                    </div>
                                  </div>
                                  @endforeach

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /page content -->
  
          <!-- footer content -->
          <footer>

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
            <div class="clearfix"></div>
          </footer>
          <!-- /footer content -->
  </div>
</div>
@endsection