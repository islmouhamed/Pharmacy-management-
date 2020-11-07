@extends('layouts.template')
@section('content')
<div class="container body">
  <div class="main_container">
    @include('layouts.menu',['user' => Auth::user()])
    <!-- page content -->
    <div class="right_col" role="main">
            <div class="">
              <div class="page-title">
                
               
              </div>
  
              <div class="clearfix"></div>
  
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    
                    <div class="x_content">

                    <form  class="form-horizontal form-label-left"  action="{{url('/presentation/store')}}" method="POST">
                      @csrf
                        <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Nom pharmacie*</label>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                  <input type="text" class="form-control" placeholder="Nom pharmacie" name="nom_ph" id="nom_ph">
                                </div>
                              </div>                 
                    <div class="form-group ">
                        
      <textarea id="basic-example" name="desc">

        {{-- {!! $text !!} --}}
      </textarea>
                    </div>
                    <div class="form-group">
                      <div class="col-md-8 col-sm-9 col-xs-12 col-md-offset-4">
                        <button type="submit" class="btn btn-success">Enregitrer</button>                
                         <a href="{{url('presentation/afficher')}}" class="btn btn-danger">Annuler</a> 
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