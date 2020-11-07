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
                  <h3>Modifier Achat</h3>
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
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('/achat/update/'.$achat->id.'')}}" method="POST">
                                        <input type="hidden" name="_method" value="PUT">
                                        {{csrf_field()}}
                                                  <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nom fournisseur</label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                          <select class="form-control" id="fournisseur_id" name="fournisseur_id"  required="required"  >
                                                            @foreach ($fournisseur as $fourni)
                                                            <?php $t1=$fourni->id;?>
                                                              <option value={{$fourni->id}} {{$achat->fournisseur->id==$t1 ? 'selected' :''}}>{{$fourni->nom}}</option>
                                                            @endforeach
                                                          </select>
                                                        </div>
                                                      </div>                  
                                    
                                                  <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12 ">Date Achat<span class="required ">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                      <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 has-feedback-right" name="date_achat" required="required" type="text" value="{{$achat->date}}">
                                                    </div>
                                                  </div> 
                           
                                      
                                      <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
                                          <button type="submit" class="btn btn-success">Enregistrer</button>
                                          <a href="{{url('achat/afficher')}}" class="btn btn-danger">Annuler</a>
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