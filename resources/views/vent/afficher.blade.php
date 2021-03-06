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
                  <h3>Vents</h3>
                  
                </div>
                
                <div class="title_right">
                  <div class="col-md-2 col-sm-2 col-xs-6 form-group pull-right top_search">
                      @if (Auth::guard()->check())
                     
                    <div class="input-group">
                        <a href="{{url('vent/in2/nouveau')}}" class="btn btn-round btn-success btn-sm">
                          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  Nouveau
                        </a>
                    </div>
                    @endif
                    
                  </div>
                </div>
              </div>
  
              <div class="clearfix"></div>
  
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                   
                    <div class="x_content">
                        <table class="datatable table table-striped projects" id="test">
                            <thead>
                              <tr>
                                
                                <th>pharmacien</th>
                                <th>date</th>
                                <th>prix</th>  
                                @if (Auth::guard()->check())
                                                           
                                <th style="width: 20%">#Edit</th>
                                
                                @endif
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ( $vents as $vent )
                                  @if ($vent->user->id == AUTH::guard()->user()->id)
                                      
                                 
                                <tr>
                                
                                
                                <td>
                                    {{$vent->user->name}}
                                </td>
                                <td>
                                        {{$vent->date}}
                                </td>
                                <td>
                                        {{$vent->prix_total}}
                                </td>
                                @if (Auth::guard()->check())
                                
                                <td style="width: 20%">
                                  
                                  <form action="{{url('/vent/destroy/'.$vent->id.'')}}" method="POST">
                                   
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <a href="{{url('/vent/detaille/'.$vent->id.'')}}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i>  </a>
                                    <a href="{{url('/vent/edit/'.$vent->id.'')}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>  </a>
                                    <button type='submit' class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>  </button>
                                </form>
                               
                                                                    
                                  
                                </td>
                                 @endif
                              </tr>
                              
                             
                              @elseif(Auth::guard()->user()->isadmin=='admin')
                              
                            

                                <tr>
                                
                                
                                  <td>
                                      {{$vent->user->name}}
                                  </td>
                                  <td>
                                          {{$vent->date}}
                                  </td>
                                  <td>
                                          {{$vent->prix_total}}
                                  </td>
                                  @if (Auth::guard()->check())
                                  
                                  <td style="width: 20%">
                                    
                                    <form action="{{url('/vent/destroy/'.$vent->id.'')}}" method="POST">
                                     
                                      {{csrf_field()}}
                                      {{method_field('DELETE')}}
                                      <a href="{{url('/vent/detaille/'.$vent->id.'')}}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i>  </a>
                                      <a href="{{url('/vent/edit/'.$vent->id.'')}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>  </a>
                                      <button type='submit' class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>  </button>
                                  </form>
                                 
                                                                      
                                    
                                  </td>
                                   @endif
                                </tr>
                              
                              @endif
                              @endforeach
                              
                              
                            </tbody>
                          </table>
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