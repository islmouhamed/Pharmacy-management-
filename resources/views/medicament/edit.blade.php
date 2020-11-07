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
                  <h3>Modifier Medicament</h3>
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
                        
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    
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
                    <br />
                    <form class="form-horizontal form-label-left"  action="{{url('/medicament/update/'.$medicament->id.'')}}" method="POST">
                        <input type="hidden" name="_method" value="PUT">
                        {{csrf_field()}}
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Nom medicament</label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" class="form-control" placeholder="Nom medicament" name="nom_medicament",id="nom_medicament" value="{{$medicament->nom}}">
                        </div>
                      </div>
                        
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Dosage</label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" class="form-control" placeholder="dosage" name="dosage",id="dosage" value="{{$medicament->Dosage}}">
                        </div>
                      </div>
                      

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Forme</label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <select class="select2_group form-control" name="forme" >
                            <optgroup label="Forme orales ">
                              <option value="comprime" {{$medicament->Forme=='Comprimé' ? 'selected' :''}}>Comprimé</option>
                              <option value="gelule"{{$medicament->Forme=='gélule' ? 'selected' :''}}>gélule</option>
                              <option value="sirop"{{$medicament->Forme=='sirop' ? 'selected' :''}}>sirop</option>
                              <option value="solution buvable"{{$medicament->Forme=='solution buvable' ? 'selected' :''}}>solution buvable</option>
                              <option value="suspension buvable"{{$medicament->Forme=='suspension buvable' ? 'selected' :''}}>suspension buvable</option>
                           </optgroup>
                           <optgroup label="Forme dermique">
                                <option value="pommades"{{$medicament->Forme=='pommades' ? 'selected' :''}}>pommades</option>
                                <option value="crèmes"{{$medicament->Forme=='crèmes' ? 'selected' :''}}>crèmes</option>
                                <option value="gels"{{$medicament->Forme=='gels' ? 'selected' :''}}>gels</option>
                                <option value="patch"{{$medicament->Forme=='patch' ? 'selected' :''}}>patch</option>
                                
                             </optgroup>
                             <optgroup label="Forme injectables">
                                    <option value="solution"{{$medicament->Forme=='solution' ? 'selected' :''}}>solution</option>
                                    <option value="poudre"{{$medicament->Forme=='poudre' ? 'selected' :''}}>poudre</option>
                                    <option value="solution pour perfusion lente"{{$medicament->Forme=='solution pour perfusion lente' ? 'selected' :''}}>solution pour perfusion lente</option>
                                 </optgroup>
                                 <optgroup label=" Forme inhalées">
                                        <option value="L’aérosol muni d’une valve doseuse"{{$medicament->Forme=='L’aérosol muni d’une valve doseuse' ? 'selected' :''}}>L’aérosol muni d’une valve doseuse</option>
                                        <option value="dispositifs à poudre"{{$medicament->Forme=='dispositifs à poudre' ? 'selected' :''}}>dispositifs à poudre</option>
                                     </optgroup>
                                     <optgroup label=" formes rectales">
                                            <option value="suppositoire"{{$medicament->Forme=='suppositoire' ? 'selected' :''}}>suppositoire</option>
                                            <option value="L’ovule"{{$medicament->Forme=='L’ovule' ? 'selected' :''}}>L’ovule</option>
                                            <option value="capsule vaginale"{{$medicament->Forme=='capsule vaginale' ? 'selected' :''}}>capsule vaginale</option>
                                            <option value="comprimé vaginal "{{$medicament->Forme=='comprimé vaginal' ? 'selected' :''}}>comprimé vaginal </option>
                                         </optgroup>
                                    
                            
                          </select>
                        </div>
                      </div>
                      
                      <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Famille</label>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                              <select class="select2_group form-control" name="famille" >
                                
                              <option value="Allergologie" {{$medicament->Famille=='Allergologie' ? 'selected' :''}}>Allergologie</option>
                                  <option value="Antalgiques" {{$medicament->Famille=='Antalgiques' ? 'selected' :''}}>Antalgiques</option>
                                  <option value="Cancérologie et hématologie"{{$medicament->Famille=='Cancérologie et hématologie' ? 'selected' :''}} >Cancérologie et hématologie</option>
                                  <option value="Dermatologie"{{$medicament->Famille=='Dermatologie' ? 'selected' :''}}>Dermatologie</option>
                                  <option value="Endocrinologie"{{$medicament->Famille=='Endocrinologie' ? 'selected' :''}}>Endocrinologie</option>
                                  <option value="Gastro-Entéro-Hépatologie"{{$medicament->Famille=='Gastro-Entéro-Hépatologie' ? 'selected' :''}}>Gastro-Entéro-Hépatologie</option>
                                  <option value="Hémostase et sang"{{$medicament->Famille=='Hémostase et sang' ? 'selected' :''}}>Hémostase et sang</option>
                                  <option value="Immunologie"{{$medicament->Famille=='Immunologie' ? 'selected' :''}}>Immunologie</option>
                                  <option value="Ophtalmologie"{{$medicament->Famille=='Ophtalmologie' ? 'selected' :''}}>Ophtalmologie</option>
                                  <option value="Pneumologie"{{$medicament->Famille=='Pneumologie' ? 'selected' :''}}>Pneumologie</option>
                                  <option value="Rhumatologie"{{$medicament->Famille=='Rhumatologie' ? 'selected' :''}}>Rhumatologie</option>
                                  <option value="Stomatologie"{{$medicament->Famille=='Stomatologie' ? 'selected' :''}}>Stomatologie</option>
                                  <option value="Toxicologie"{{$medicament->Famille=='Toxicologie' ? 'selected' :''}}>Toxicologie</option>
                               
                               
                                        
                                
                              </select>
                            </div>
                        </div>
                        <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Quantité Minimale</label>
                                <div class="col-md-8 col-sm-8 col-xs-12" >
                                  <input type="text" class="form-control" placeholder="Qte_min" name="Qte_min",id="Qte_min" value="{{$medicament->Qte_min}}">
                                </div>
                              </div>
                          
                              
                              <div class="form-group">
                                  <label class="control-label col-md-2 col-sm-2 col-xs-12">Remboursable</label>
                                  <div class="col-md-8 col-sm-8 col-xs-12">
                                    {{-- <input type="radio" class=""  name="remboursable">  --}}
                                    <label style="    margin-top: 8px;">
                                    <input type="checkbox" class="js-switch" name="remboursable" /> oui
                                      </label>
                                  </div>
                                </div>
                                </div>
                       
                      
                      <div class="form-group">
                        <div class="col-md-8 col-sm-9 col-xs-12 col-md-offset-4">
                          <button type="submit" class="btn btn-success">Enregitrer</button>                
                          <a href="{{url('medicament/afficher')}}" class="btn btn-danger">Annuler</a>
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