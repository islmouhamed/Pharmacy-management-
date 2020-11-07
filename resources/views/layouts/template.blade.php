<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Gentelella Alela! | </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <!-- Bootstrap -->
    <link href="{{asset("assets/vendors/bootstrap/dist/css/bootstrap.min.css")}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets/vendors/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset("assets/vendors/nprogress/nprogress.css")}}" rel="stylesheet">
      <!-- NProgress -->
      <link href="{{asset("assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css")}}" rel="stylesheet">
    
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset("assets/vendors/bootstrap-daterangepicker/daterangepicker.css")}}" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="{{asset("assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css")}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset("assets/vendors/iCheck/skins/flat/green.css")}}" rel="stylesheet">

     <!-- bootstrap-wysiwyg -->
     <link href="{{asset("assets/vendors/google-code-prettify/bin/prettify.min.css")}}" rel="stylesheet">
     <!-- Select2 -->
     <link href="{{asset("assets/vendors/select2/dist/css/select2.min.css")}}" rel="stylesheet">
     <!-- Switchery -->
     <link href="{{asset("assets/vendors/switchery/dist/switchery.min.css")}}" rel="stylesheet">
     <!-- starrr -->
     <link href="{{asset("assets/vendors/starrr/dist/starrr.css")}}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{asset("assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css")}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" />
    <link href="{{asset("assets/css/custom.min.css")}}" rel="stylesheet">
    <link href="{{asset("css/plus_css.css")}}" rel="stylesheet">
    {{-- <link href="{{asset("css/parsley.css")}}" rel="stylesheet"> --}}
    
    
        <!-- Custom Theme Style -->
    <!-- Font Awesome -->
    <!-- bootstrap-daterangepicker -->
    <!-- Ion.RangeSlider -->
    <link href="{{asset("assets/vendors/normalize-css/normalize.css")}}" rel="stylesheet">
    {{-- <link href="{{asset("assets/vendors/ion.rangeSlider/css/ion.rangeSlider.css")}}" rel="stylesheet"> --}}
    <link href="{{asset("assets/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css")}}" rel="stylesheet">
    <!-- Bootstrap Colorpicker -->

    <link href="{{asset("assets/vendors/cropper/dist/cropper.min.css")}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset("assets/vendors/DataTables/datatables.min.css")}}"/>

 
    
    {{-- <link href="{{asset("assets/vendors/SmartWizard-master/dist/css/smart_wizard.css")}}" rel="stylesheet" type="text/css" />  --}}
    {{-- <link href="{{asset("assets/vendors/SmartWizard-master/dist/css/smart_wizard_theme_arrows.css")}}" rel="stylesheet" type="text/css" /> --}}
    
     <!-- Custom Theme Style -->



      <!-- PNotify -->
    {{-- <link href="{{asset("assets/vendors/pnotify/dist/pnotify.css")}}" rel="stylesheet"> --}}
    {{-- <link href="{{asset("assets/vendors/pnotify/dist/pnotify.buttons.css")}}" rel="stylesheet"> --}}
    {{-- <link href="{{asset("assets/vendors/pnotify/dist/pnotify.nonblock.css")}}" rel="stylesheet"> --}}
  </head>

  <body class="nav-md">
    @yield('content')

    <!-- jQuery -->
    <script src="{{asset("assets/vendors/jquery/dist/jquery.min.js")}}"></script>
    <!-- Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>

    <script src="{{asset("assets/vendors/bootstrap/dist/js/bootstrap.min.js")}}"></script>
    <!-- FastClick -->
    <script src="{{asset("assets/vendors/fastclick/lib/fastclick.js")}}"></script>
    <!-- NProgress -->
    <script src="{{asset("assets/vendors/nprogress/nprogress.js")}}"></script>
    <!-- Chart.js -->
    <script src="{{asset("assets/vendors/Chart.js/dist/Chart.min.js")}}"></script>
    <!-- jQuery Sparklines -->
    <script src="{{asset("assets/vendors/jquery-sparkline/dist/jquery.sparkline.min.js")}}"></script>
    <!-- Flot -->
    <script src="{{asset("assets/vendors/Flot/jquery.flot.js")}}"></script>
    <script src="{{asset("assets/vendors/Flot/jquery.flot.pie.js")}}"></script>
    <script src="{{asset("assets/vendors/Flot/jquery.flot.time.js")}}"></script>
    <script src="{{asset("assets/vendors/Flot/jquery.flot.stack.js")}}"></script>
    <script src="{{asset("assets/vendors/Flot/jquery.flot.resize.js")}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset("assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js")}}"></script>
    <script src="{{asset("assets/vendors/flot-spline/js/jquery.flot.spline.min.js")}}"></script>
    <script src="{{asset("assets/vendors/flot.curvedlines/curvedLines.js")}}"></script>
    <!-- DateJS -->
    <script src="{{asset("assets/vendors/DateJS/build/date.js")}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset("assets/vendors/moment/min/moment.min.js")}}"></script>
    <script src="{{asset("assets/vendors/bootstrap-daterangepicker/daterangepicker.js")}}"></script>
    <!-- bootstrap-datetimepicker -->
    <script src="{{asset("assets/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js")}}"></script>
    <!-- iCheck -->
    <script src="{{asset("assets/vendors/iCheck/icheck.min.js")}}"></script>
    <!-- Datatables -->
    <script src="{{asset("assets/vendors/datatables.net/js/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js")}}"></script>
    <script src="{{asset("assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js")}}"></script>
    <script src="{{asset("assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js")}}"></script>
    <script src="{{asset("assets/vendors/datatables.net-buttons/js/buttons.flash.min.js")}}"></script>
    <script src="{{asset("assets/vendors/datatables.net-buttons/js/buttons.html5.min.js")}}"></script>
    <script src="{{asset("assets/vendors/datatables.net-buttons/js/buttons.print.min.js")}}"></script>
    <script src="{{asset("assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js")}}"></script>
    <script src="{{asset("assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js")}}"></script>
    <script src="{{asset("assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js")}}"></script>
    <script src="{{asset("assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js")}}"></script>
    <script src="{{asset("assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js")}}"></script>
    <script src="{{asset("assets/vendors/jszip/dist/jszip.min.js")}}"></script>
    <script src="{{asset("assets/vendors/pdfmake/build/pdfmake.min.js")}}"></script>
    <script src="{{asset("assets/vendors/pdfmake/build/vfs_fonts.js")}}"></script>
    <!-- Custom Theme Scripts -->
    <!-- validator -->
    <script src="{{asset("assets/vendors/validator/validator.js")}}"></script>

    {{-- <script src="{{asset("assets/js/custom.js")}}"></script> --}}
    <!-- bootstrap-wysiwyg -->
    <script src="{{asset("assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js")}}"></script>
    <script src="{{asset("assets/vendors/jquery.hotkeys/jquery.hotkeys.js")}}"></script>
    <script src="{{asset("assets/vendors/google-code-prettify/src/prettify.js")}}"></script>
    <!-- jQuery Tags Input -->
    <script src="{{asset("assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js")}}"></script>
    <!-- Switchery -->
    <script src="{{asset("assets/vendors/switchery/dist/switchery.min.js")}}"></script>
    <!-- Select2 -->
    <script src="{{asset("assets/vendors/select2/dist/js/select2.full.min.js")}}"></script>
    <!-- Parsley -->
    {{-- <script src="{{asset("assets/vendors/parsleyjs/dist/parsley.min.js")}}"></script> --}}
    <!-- Autosize -->
    <script src="{{asset("assets/vendors/autosize/dist/autosize.min.js")}}"></script>
    <!-- jQuery autocomplete -->
    <script src="{{asset("assets/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js")}}"></script>
    <!-- starrr -->
    <script src="{{asset("assets/vendors/starrr/dist/starrr.js")}}"></script>
    <!-- Scripts -->
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/tinymce/js/tinymce/tinymce.min.js')}}"></script>
    <!-- jQuery Smart Wizard -->
    <script src="{{asset("assets/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js")}}"></script>


    <!--<script src="{{ asset('js/app.js') }}" defer></script>-->
    <script src="{{ asset('js/plus.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    {{-- <script src="{{ asset('js/parsley.min.js') }}" defer></script> --}}

 <!--*********************************************************************************-->
  <!-- PNotify -->
  {{-- <script src="{{asset("assets/vendors/pnotify/dist/pnotify.js")}}"></script> --}}
    {{-- <script src="{{asset("assets/vendors/pnotify/dist/pnotify.buttons.js")}}"></script> --}}
    {{-- <script src="{{asset("assets/vendors/pnotify/dist/pnotify.nonblock.js")}}"></script> --}}


 <!-- NProgress --> 
 <script src="{{asset("assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js")}}"></script>
   <!-- Ion.RangeSlider -->
    <script src="{{ asset("assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js") }}"></script>
     
    <script type="text/javascript" src="{{ asset("assets/vendors/DataTables/datatables.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/echarts/dist/echarts.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/echarts/map/js/world.js") }}"></script>
     <!-- 
    {{-- <script src="{{ asset("assets/vendors/SmartWizard-master/dist/js/jquery.smartWizard.min.js")}}"></script>   --}}
     -->
  </body>
  <script src="https://cdn.tiny.cloud/1/2g2nhg5bmslgru632hihalugh5wgcalo3vy1f8ltbil7pj7g/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script type="text/javascript">
 tinymce.init({
selector: 'textarea#basic-example',
height: 500,
menubar: false,
plugins: [
'advlist autolink lists link image charmap print preview anchor',
'searchreplace visualblocks code fullscreen',
'insertdatetime media table paste code help wordcount'
],
toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
content_css: [
'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
'//www.tiny.cloud/css/codepen.min.css'
]
});
</script>
</html>
