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
                  <h3>Nouveau Lot</h3>
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
                       
                            
                                    <br />
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('/lot/store')}}" method="POST">
                                      {{csrf_field()}}
                                                     
                                                      
                                                      <div class="form-group">
                                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Achats</label>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                              <select class="form-control" id="achat_id" name="achat_id"  required="required" >
                                                                @foreach ($achats as $achat)
                                                                  <option value="{{$achat->id}}">{{$achat->id}}</option>
                                                                @endforeach
                                                              </select>
                                                            </div>
                                                          </div>        
                                                          
                                                          <div class="form-group">
                                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Medicament</label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                  <select class="form-control" id="medicament_id" name="medicament_id"  required="required" >
                                                                    @foreach ($medicaments as $medicament)
                                                                      <option value="{{$medicament->id}}">{{$medicament->nom}}</option>
                                                                    @endforeach
                                                                  </select>
                                                                </div>
                                                              </div>           
                                    
                                                  <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12 ">Date fabrication<span class="required ">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                      <input id="dat-fab" class="date-picker form-control col-md-7 col-xs-12 has-feedback-right" name="date_fab" required="required" type="text">
                                                    </div>
                                                  </div> 
                           
                                                  <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12 ">Date péremption<span class="required ">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                          <input id="date_per" class="date-picker form-control col-md-7 col-xs-12 has-feedback-right" name="date_per" required="required" type="text">
                                                        </div>
                                                      </div> 

                                                      <div class="form-group">
                                                            <label class="control-label col-md-3 col-sm-3 col-xs-12 ">Prix<span class="required ">*</span>
                                                            </label>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                              <input id="prix" class="date-picker form-control col-md-7 col-xs-12 has-feedback-right" name="prix" required="required" type="text">
                                                            </div>
                                                          </div> 

                                                          <div class="form-group">
                                                                <label class="control-label col-md-3 col-sm-3 col-xs-12 ">Quantité achter<span class="required ">*</span>
                                                                </label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                  <input id="qt_a" class="date-picker form-control col-md-7 col-xs-12 has-feedback-right" name="qt_a" required="required" type="text">
                                                                </div>
                                                              </div> 

                                                              <div class="form-group">
                                                                    
                                      
                                      <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
                                          <button type="submit" class="btn btn-success">Enregistre</button>
                                          <a href="{{url('lot/afficher')}}" class="btn btn-danger">Annuler</a>
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
              
                <div class="clearfix"></div>
          </footer>
          <!-- /footer content -->
  </div>
</div>
@endsection