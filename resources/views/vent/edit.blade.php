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
                  <h3>Modifier Vente </h3>
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
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('/vent/update/'.$vent->id.'')}}" method="POST">
                                        <input type="hidden" name="_method" value="PUT">
                                        {{csrf_field()}}
                                                     
                                                      
                                                      <div class="form-group">
                                                            {{-- <label class="control-label col-md-3 col-sm-3 col-xs-12">Medicament</label>
                                                            <div class="col-md-6 col-sm-6 col-xs-12"> --}}
                                                              {{-- <select class="form-control" id="num_lot" name="num_lot"  required="required"  value="{{$vent->lot->id}}">
                                                                @foreach ($lots as $lot) --}}
                                                                {{-- <?php// $t1=$lot->id;?> --}}
                                                                  {{-- <option value={{$lot->id}} {{$vent->lot->id==$t1 ? 'selected' :''}}>{{$lot->medicament->nom}}</option>
                                                                @endforeach
                                                              </select> --}}
                                                            </div>
                                                          </div>        
                                                          
                                                          {{-- <div class="form-group">
                                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Pharmacien</label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                  <select class="form-control" id="id_phar" name="id_phar"  required="required" value="{{$vent->user->nom}}">
                                                                    @foreach ($users as $user)
                                                                      <option value="{{$user->id}}">{{$user->name}}</option>
                                                                    @endforeach
                                                                  </select>
                                                                </div>
                                                              </div>            --}}
                                    
                                                  <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12 ">Date<span class="required ">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                      <input id="date_vent" class="date-picker form-control col-md-7 col-xs-12 has-feedback-right" name="date_vent" required="required" type="text" value="{{$vent->date}}">
                                                    </div>
                                                  </div> 

                                                              <div class="form-group">
                                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12 ">qt<span class="required ">*</span>
                                                                    </label>
                                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                                      <input id="qt" class="date-picker form-control col-md-7 col-xs-12 has-feedback-right" name="qt" required="required" type="text" value="{{$vent->qt}}">
                                                                    </div>
                                                                  </div> 
                                      
                                      <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
                                          <button type="submit" class="btn btn-success">Enregistre</button>
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