<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
    <a style="display:inline:block" href="{{url('presentation/afficher')}}" style="border: 0;">
        <img src="{{asset("images/logo.jpg")}}" alt="" height="60" width="60">    
        <p style="float:right;margin-top:25%;color:green">Pharmacie</p> 
    </a>

    
      {{-- <div class="clearfix"></div> --}}

      <!-- menu profile quick info -->
      {{-- <div class="profile clearfix">
        <div class="profile_pic">
          <img src="\public\images\logo.jpg" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
          <span>Bonjour,</span>
        </div>
      </div> --}}
      <!-- /menu profile quick info -->

      <br />

      <!-- sidebar menu -->
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
            
          <h3>Menu</h3>
          <ul class="nav side-menu">
            <li><a href="{{url('presentation/afficher')}}"><i class="fa fa-home"></i> Acceuille </a>
              {{-- <ul class="nav child_menu">
                <li><a href="index.html">Dashboard</a></li>
                <li><a href="index2.html">Dashboard2</a></li>
                <li><a href="index3.html">Dashboard3</a></li>
              </ul> --}}
            </li>
              {{-- @if(Auth::user()->isadmin=='admin') --}}
              {{-- @endif --}}
            <li><a href="{{url('fourniseur/afficher')}}"><i class="fa fa-briefcase"></i> Fournisseur </a>
              {{-- <ul class="nav child_menu">
                <li><a href="form.html">General Form</a></li>
                <li><a href="form_advanced.html">Advanced Components</a></li>
                <li><a href="form_validation.html">Form Validation</a></li>
                <li><a href="form_wizards.html">Form Wizard</a></li>
                <li><a href="form_upload.html">Form Upload</a></li>
                <li><a href="form_buttons.html">Form Buttons</a></li>
              </ul> --}}
            </li>
            <li><a href="{{url('user/afficher')}}"><i class="fa fa-user"></i>Pharmacien</a>
              {{-- <ul class="nav child_menu">
                <li><a href="general_elements.html">General Elements</a></li>
                <li><a href="media_gallery.html">Media Gallery</a></li>
                <li><a href="typography.html">Typography</a></li>
                <li><a href="icons.html">Icons</a></li>
                <li><a href="glyphicons.html">Glyphicons</a></li>
                <li><a href="widgets.html">Widgets</a></li>
                <li><a href="invoice.html">Invoice</a></li>
                <li><a href="inbox.html">Inbox</a></li>
                <li><a href="calendar.html">Calendar</a></li>
              </ul> --}}
            </li>
            <li><a href="{{url('medicament/afficher')}}"><i class="fa fa-plus-square"></i> Medicament </a>
              {{-- <ul class="nav child_menu">
                <li><a href="tables.html">Tables</a></li>
                <li><a href="tables_dynamic.html">Table Dynamic</a></li>
              </ul> --}}
            </li>
            @if (Auth::guard()->check())
            <li><a href="{{url('lot/afficher')}}"><i class="fa fa-medkit"></i> Lot </a>
              {{-- <ul class="nav child_menu">
                <li><a href="chartjs.html">Chart JS</a></li>
                <li><a href="chartjs2.html">Chart JS2</a></li>
                <li><a href="morisjs.html">Moris JS</a></li>
                <li><a href="echarts.html">ECharts</a></li>
                <li><a href="other_charts.html">Other Charts</a></li>
              </ul> --}}
            </li>
            @endif

            @if (Auth::guard()->check())
            <li><a href="{{url('achat/afficher')}}"><i class="fa fa-clone"></i>Achat </a>
              {{-- <ul class="nav child_menu">
                <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                <li><a href="fixed_footer.html">Fixed Footer</a></li>
              </ul> --}}
            </li>
            @endif

            @if (Auth::guard()->check())
            
            <li><a href="{{url('vent/afficher')}}"><i class="fa fa-line-chart"></i>Vent</a>
              {{-- <ul class="nav child_menu">
                <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                <li><a href="fixed_footer.html">Fixed Footer</a></li>
              </ul> --}}
            </li>
            @endif
            @if (Auth::guard()->check())
            @if (Auth::guard()->user()->isadmin=='admin')
            <li><a href="{{url('vent/statistique')}}"><i class="fa fa-bar-chart"></i>Statistique</a>
              {{-- <ul class="nav child_menu">
                <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                <li><a href="fixed_footer.html">Fixed Footer</a></li>
              </ul> --}}
            </li>
            @endif
            @endif
            <li><a href="{{url('contact/afficher')}}"><i class="fa fa-info"></i>Contact</a>
              {{-- <ul class="nav child_menu">
                <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                <li><a href="fixed_footer.html">Fixed Footer</a></li>
              </ul> --}}
            </li>
            @if (Auth::guard()->check())
            @if (Auth::guard()->user()->isadmin=='admin')
            <li><a href="{{url('/presentation/edit/4')}}"><i class="fa fa-gear"></i>Modifier Presentation</a>
              {{-- <li><a href="#">Modifier Presentation</a></li>
                <li><a href="#"></a>Modifier Contact</li> --}}
               
            </li>
            @endif
            @endif
            @if (Auth::guard()->check())
            @if (Auth::guard()->user()->isadmin=='admin')
            <li><a href="{{url('/contact/edit/3')}}"><i class="fa fa-gear"></i>Modifier Contact</a>
            </li>
            @endif
            @endif
          </ul>
        </div>
        {{-- <div class="menu_section">
          <h3>Live On</h3>
          <ul class="nav side-menu">
            <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="e_commerce.html">E-commerce</a></li>
                <li><a href="projects.html">Projects</a></li>
                <li><a href="project_detail.html">Project Detail</a></li>
                <li><a href="contacts.html">Contacts</a></li>
                <li><a href="profile.html">Profile</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="page_403.html">403 Error</a></li>
                <li><a href="page_404.html">404 Error</a></li>
                <li><a href="page_500.html">500 Error</a></li>
                <li><a href="plain_page.html">Plain Page</a></li>
                <li><a href="login.html">Login Page</a></li>
                <li><a href="pricing_tables.html">Pricing Tables</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                  <li><a href="#level1_1">Level One</a>
                  <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li class="sub_menu"><a href="level2.html">Level Two</a>
                      </li>
                      <li><a href="#level2_1">Level Two</a>
                      </li>
                      <li><a href="#level2_2">Level Two</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#level1_2">Level One</a>
                  </li>
              </ul>
            </li>                  
            <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
          </ul>
        </div> --}}

      </div>
      <!-- /sidebar menu -->

      <!-- /menu footer buttons -->
      {{-- <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
          <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
          <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
          <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
          <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
      </div> --}}
      <!-- /menu footer buttons -->
    </div>
  </div>

  <!-- ***************************************************************************************** -->
  <!-- top navigation -->
  @if (Auth::guard()->check())
  <div class="top_nav">
    <div class="nav_menu">
      <nav>
        <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>

        <ul class="nav navbar-nav navbar-right">
         
          <li class="">
              @if (Auth::guard()->check())
             <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <img src="{{asset($user->Photo)}}" alt="">{{$user->name}} {{$user->Prenom}}
              <span class=" fa fa-angle-down"></span>
            </a> 
             @else 
             <div style="margin:1em;">
               
          </div>  
            @endif
            
            <ul class="dropdown-menu dropdown-usermenu pull-right">
              @if (Auth::guard()->check())
              <li data-toggle="modal" data-target=".profil{{Auth::user()->id}}"><a href="#">Setting</a></li>
              
              <li><a href="{{ route('user.logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
              @endif
            </ul>

            
          </li>

          {{-- <li role="presentation" class="dropdown">
            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-green">6</span>
            </a>
            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
              <li>
                <a>
                  <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                  <span>
                    <span>John Smith</span>
                    <span class="time">3 mins ago</span>
                  </span>
                  <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                  </span>
                </a>
              </li>
              <li>
                <a>
                  <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                  <span>
                    <span>John Smith</span>
                    <span class="time">3 mins ago</span>
                  </span>
                  <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                  </span>
                </a>
              </li>
              <li>
                <a>
                  <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                  <span>
                    <span>John Smith</span>
                    <span class="time">3 mins ago</span>
                  </span>
                  <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                  </span>
                </a>
              </li>
              <li>
                <a>
                  <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                  <span>
                    <span>John Smith</span>
                    <span class="time">3 mins ago</span>
                  </span>
                  <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                  </span>
                </a>
              </li>
              <li>
                <div class="text-center">
                  <a>
                    <strong>See All Alerts</strong>
                    <i class="fa fa-angle-right"></i>
                  </a>
                </div>
              </li>
            </ul>
          </li> --}}
        </ul>
      </nav>
    </div>
  </div>
  @endif
    <!-- ************************************************** -->
    @if (Auth::guard()->check())
    <div class="modal fade bs-example-modal-lg profil{{Auth::user()->id}}" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
            </button>

            <h4 class="modal-title" id="myModalLabel">Modifier information personelle</h4>
          </div>

          <form class="form-horizontal form-label-left"  novalidate action="{{url('/user/update/'.Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            {{csrf_field()}}

            <div class="form-horizontal form-label-left" >

              <br>
                    </p>
                    <div class="row">
                      <div class="col-md-8">
                          <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nom">Nom <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="name" class="form-control col-md-7 col-xs-12"  name="nom" placeholder=" Nom" required="required"   type="text"  value="{{Auth::user()->name }}">
                              </div>
                            </div>
                           
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="prenom">Prenom <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="name" class="form-control col-md-7 col-xs-12"  name="prenom" placeholder="prenom" required="required"   type="text"  value="{{Auth::user()->Prenom }}">
                              </div>
                            </div>


                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="email" id="email" name="email" required="required"  class="form-control col-md-7 col-xs-12"  value="{{Auth::user()->email}}">
                              </div>
                            </div>


                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tel">Tel <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="tel" name="tel" required="required"  class="form-control col-md-7 col-xs-12"  value="{{Auth::user()->Tel}}">

                              </div>
                            </div>


                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Date naissance">Date naissance <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="date_naiss" name="date_naiss" required="required"  class="form-control col-md-7 col-xs-12"  value="{{Auth::user()->Date_Naiss}}">
                              </div>
                            </div>
                             
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="login">login <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="login" name="login" required="required"  class="form-control col-md-7 col-xs-12"  value="{{Auth::user()->Login}}">
                              </div>
                            </div>
                             
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mdp">Mot de passe <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="mdp" name="mdp" required="required"  class="form-control col-md-7 col-xs-12"  >
                              </div>
                            </div>
                          


                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="photo">Photo
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="photo" class="form-control col-md-7 col-xs-12 prb_height"  name="photo"  type="file" accept="image/*">
                                </div>
                            </div>
                      </div>
                      <div class="col-md-4">
                          @if (Auth::user()->Photo )
                          <img src="{{asset(Auth::user()->Photo)}}" alt="" class="img-circle img-responsive img_profil" style="margin-left:-15px;">
                          @else
                          <img src="{{asset('images/usres/user_default.png')}}" alt="" class="img-circle img-responsive img_profil">
                          @endif
                      </div>
                    </div>



            </div>
            <div class="modal-footer" style="text-align:center !important;">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
              <button type="submit" class="btn btn-success">Enregistrer</button>
            </div>
          </form>

        </div>
      </div>
    </div>
@endif



  <!-- ************************************************** -->




  
  <!-- /top navigation -->