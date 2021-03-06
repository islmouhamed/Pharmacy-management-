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
                  <h3>Achats</h3>
                  
                </div>
  
                <div class="title_right">
                  <div class="col-md-2 col-sm-2 col-xs-6 form-group pull-right top_search">
                    @if (Auth::guard()->check())
                      @if (Auth::guard()->user()->isadmin=='admin')
                    <div class="input-group">
                        <a href="{{url('/achat')}}" class="btn btn-round btn-success btn-sm">
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
                        <table class="datatable table table-striped projects" id="test">
                            <thead>
                              <tr>
                                <th style="width: 1%">#</th>
                                <th>Nom fournisseur</th>
                                <th>Date achat</th>
                                @if (Auth::guard()->check())
                                @if (Auth::guard()->user()->isadmin=='admin')
                                <th style="width: 20%">#Edit</th>
                                @else
                                <th style="width: 20%">#Action</th>
                                 @endif
                                 @endif
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ( $achats as $achat )
                                  
                                <tr>
                                <td >#</td>
                                <td >
                                  {{$achat->fournisseur->nom}}
                                </td>
                                <td>
                                    {{$achat->date}}
                                </td>
                                @if (Auth::guard()->check())
                                <td style="width: 20%">
                                @if (Auth::guard()->user()->isadmin=='admin')
                                  
                                  <form action="{{url('/achat/destroy/'.$achat->id.'')}}" method="POST">
                                   
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <a href="{{url('/achat/detaille/'.$achat->id.'')}}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i>  </a>
                                    <a href="{{url('/achat/edit/'.$achat->id.'')}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>  </a>
                                    <button type='submit' class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>  </button>
                                    @else
                                    <a href="{{url('/achat/detaille/'.$achat->id.'')}}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i>  </a>
                                    @endif
                                  </form>


                                
                                  
                                </td>
                                @endif
                              </tr>
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