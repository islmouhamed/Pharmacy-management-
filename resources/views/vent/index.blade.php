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
                  <h3>Nouvelle Ventes</h3>
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
                                    
                                                     <div class="row">
                                                      
                                                            {{-- <input type="hidden" name="user_id" value="{{Auth::user()->id}}"> --}}
                                                          <div class="form-group col-md-8" style="display: inline-flex;">
                                                                <label class="control-label col-md-2 col-sm-3 col-xs-12">medicament :</label>
                                                                <div class="col-md-8 col-sm-6 col-xs-12">
                                                                  <select class="form-control" id="lot_id"  required="required" >
                                                                    @foreach ($lots as $lot)
                                                                      <option value="{{$lot->id}}">{{$lot->medicament->nom}}   /en stock:{{$lot->qt_st}}</option>
                                                                    @endforeach
                                                                  </select>
                                                                </div>
                                                                <div class="col-md-1 col-sm-6 col-xs-12 ">
                                                                    <button type="submit" class="btn btn-success" id='lien_vent'>valider</button>
                                                                  </div>
                                                              </div>           
                           
                                    </div>
                                    
                                    <br>
                                    <div class="row">
                                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('/vent/store')}}" method="POST">
                                          {{csrf_field()}}
                                        <input type="hidden" name="id_phar" value="{{Auth::guard()->user()->id}}">
                                      <table class="datatable table table-striped projects body_table" >
                                          <thead>
                                            <tr>
                                              <th style="width: 1%">#</th>
                                              <th>medicament-</th>
                                              <th>Prix</th>                             
                                              <th>qty</th>
                                              <th>Prix total</th>  
                                              <th style="width: 20%">remove</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            
                                            
                                          </tbody>
                                        </table>
                                        <div class="col-md-8 ">
                                            <div class="form-group">
                                                <label class="control-label col-md-2 col-sm-1 col-xs-12 ">Date :
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                  <input type="date"  id="date_vent" class=" form-control col-md-7 col-xs-12 has-feedback-right" name="date_vent" required="required" value="<?php echo date('Y-m-j'); ?>" >
                                                </div>
                                              </div> 
                                        </div>
                                        <div class="col-md-4">

                                          <table class="table table-striped table-border">
                                            <tr><td>prix total </td><td id='prix_total'><input type="hidden" name="prix_total" value="0">0</td></tr>
                                          </table>
                                        </div>
                                        <br>
                                       
                                            <div class="form-group text-center col">
                                                <div class="col-md-12 col-sm-9 col-xs-12">
                                                  <button type="submit" class="btn btn-success">Enregister</button>
                                                <a href="{{url('vent/afficher')}}" class="btn btn-danger">Annuler</a>
                                                </div>
                                              </div>
                                       
                                      </form>
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