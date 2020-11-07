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
                  <h3>Détaille Lot</h3>
                </div>
  
                
              </div>
  
              <div class="clearfix"></div>
  
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Num achat: {{$achat->id}}</h2>
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
        
        
        
                              
                                <li>
                                Date achat: {{$achat->date}}
                                </li>
        
                                <li>
                               Nom fournisseur: {{$achat->fournisseur->nom}}
                                </li>
                                
        
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
             <th >Num lot</th>
              <th >Num medicament</th>
              <th >Date de fabrication</th>
              <th >Date de peremption</th>
              <th >Prix</th>
              <th >Quantité achete</th>
              <th >Quantité stoque</th>
              <th >Action</th>
             
           </tr>
           </thead>
           
           
           <tbody>
               @foreach ($lots as $lot)
               <tr>
             {{-- <td>
           <th><input type="checkbox" id="check-all" class="flat"></th>
           </td> --}}
           <td>{{ $lot->id }}</td>
           <td>{{ $lot->medicament->nom }}</td>
           <td>{{ $lot->Date_Fab }}</td>
           <td>{{ $lot->Date_pre}}</td>
           <td>{{ $lot->prix }}</td>
           <td>{{ $lot->qt_acht}}</td>
           <td>{{ $lot->qt_st}}</td>
           
             

            {{-- <td><a href="{{ url('responsables/paquets/'.$paquet->id.'')}}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> --}}
                                 </a></td>
            <td ><a href="{{url('/lot/detaille/'.$lot->id.'')}}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i>
                                 </a></td>
           </tr>
               @endforeach
           
           
           
           
           </tbody>
           </table>
           <div class="form-group text-center col">
              <div class="col-md-12 col-sm-4 col-xs-12">
               
              <a href="{{url('achat/afficher')}}" class="btn btn-info"><i class="fa fa-reply"></i>Retoure</a>
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