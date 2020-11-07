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
                  <h3>Détaille Achat</h3>
                </div>
  
              </div>
  
              <div class="clearfix"></div>
  
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>{{$fournisseur->nom}}</h2>
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
                        <div class="col-md-12 col-sm-12 col-xs-12  "> 
                           <div class="col-md-6 col-sm-6 col-xs-12 ">
        
        
        
                              <ul class="list-unstyled user_data">
                                <li>
                                Adresse: {{$fournisseur->Adresse}}
                                </li>
        
                                <li>
                               Téléphone: {{$fournisseur->Tel}}
                                </li>
                                <li>
                                 Email: {{$fournisseur->Email}}
                                  </li>
                                <li class="m-top-xs">
        
        
                                </li>
                              </ul>
        
        
        
        
        
        
                            <br />
        
                              <!-- start skills -->
        
                              <!-- end of skills -->
        
                            </div>
                            
        
        
        
        
        
                            <!-- end project list -->
        
        
        
        
        </div>
        
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12 ">
            <div class="ln_solid"></div>
              <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
           <thead>
           <tr>
             {{-- <th>
           <th><input type="checkbox" id="check-all" class="flat"></th>
           </th> --}}
             <th >Num achat</th>
              <th >Date</th>
              <th >Action</th>
             
           </tr>
           </thead>
           
           
           <tbody>
               @foreach ($achats as $achat)
               <tr>
             {{-- <td>
           <th><input type="checkbox" id="check-all" class="flat"></th>
           </td> --}}
             <td>{{ $achat->id }}</td>
              <td>{{ $achat->date }}</td>

            {{-- <td><a href="{{ url('responsables/paquets/'.$paquet->id.'')}}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> --}}
                                 </a></td>
            <td ><a href="{{url('/achat/detaille/'.$achat->id.'')}}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i>
                                 </a></td>
           </tr>
               @endforeach
           
           
           
           
           </tbody>
           </table>
           <div class="form-group text-center col">
              <div class="col-md-12 col-sm-4 col-xs-12">
               
              <a href="{{url('fourniseur/afficher')}}" class="btn btn-info"><i class="fa fa-reply"></i>Retoure</a>
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
              
                <div class="clearfix"></div>
            </footer>
          <!-- /footer content -->
  </div>
</div>
@endsection