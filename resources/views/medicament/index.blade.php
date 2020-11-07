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
                  <h3>Nouveau Medicament</h3>
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
                    <form class="form-horizontal form-label-left"  action="{{url('/medicament/store')}}" method="POST">
                        {{csrf_field()}}
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Nom medicament</label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" class="form-control" placeholder="Nom medicament" name="nom_medicament",id="nom_medicament">
                        </div>
                      </div>
                        
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Dosage</label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" class="form-control" placeholder="dosage" name="dosage",id="dosage">
                        </div>
                      </div>
                      

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Forme</label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <select class="select2_group form-control" name="forme">
                            <optgroup label="Forme orales ">
                              <option value="comprime">Comprimé</option>
                              <option value="gelule">gélule</option>
                              <option value="sirop">sirop</option>
                              <option value="solution buvable">solution buvable</option>
                              <option value="suspension buvable">suspension buvable</option>
                           </optgroup>
                           <optgroup label="Forme dermique">
                                <option value="pommades">pommades</option>
                                <option value="crèmes">crèmes</option>
                                <option value="gels">gels</option>
                                <option value="patch">patch</option>
                                
                             </optgroup>
                             <optgroup label="Forme injectables">
                                    <option value="solution">solution</option>
                                    <option value="poudre">poudre</option>
                                    <option value="solution pour perfusion lente">solution pour perfusion lente</option>
                                 </optgroup>
                                 <optgroup label=" Forme inhalées">
                                        <option value="L’aérosol muni d’une valve doseuse">L’aérosol muni d’une valve doseuse</option>
                                        <option value="dispositifs à poudre">dispositifs à poudre</option>
                                     </optgroup>
                                     <optgroup label=" formes rectales">
                                            <option value="suppositoire">suppositoire</option>
                                            <option value="L’ovule">L’ovule</option>
                                            <option value="capsule vaginale">capsule vaginale</option>
                                            <option value="comprimé vaginal ">comprimé vaginal </option>
                                         </optgroup>
                                    
                            
                          </select>
                        </div>
                      </div>
                      
                      <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Famille</label>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                              <select class="select2_group form-control" name="famille">
                                
                                  <option value="Allergologie">Allergologie</option>
                                  <option value="Antalgiques">Antalgiques</option>
                                  <option value="Cancérologie et hématologie">Cancérologie et hématologie</option>
                                  <option value="Dermatologie">Dermatologie</option>
                                  <option value="Endocrinologie">Endocrinologie</option>
                                  <option value="Gastro-Entéro-Hépatologie">Gastro-Entéro-Hépatologie</option>
                                  <option value="Hémostase et sang">Hémostase et sang</option>
                                  <option value="Immunologie">Immunologie</option>
                                  <option value="Ophtalmologie">Ophtalmologie</option>
                                  <option value="Pneumologie">Pneumologie</option>
                                  <option value="Rhumatologie">Rhumatologie</option>
                                  <option value="Stomatologie">Stomatologie</option>
                                  <option value="Toxicologie">Toxicologie</option>
                               
                               
                                        
                                
                              </select>
                            </div>
                        </div>
                        <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Quantité Minimale</label>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                  <input type="text" class="form-control" placeholder="Qte_min" name="Qte_min",id="Qte_min">
                                </div>
                              </div>
                          
                              <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Remboursable</label>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                      {{-- <input type="radio" class=""  name="remboursable">  --}}
                                      <label style="    margin-top: 8px;">
                                          <input type="checkbox" class="js-switch" name="remboursable"/> oui
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