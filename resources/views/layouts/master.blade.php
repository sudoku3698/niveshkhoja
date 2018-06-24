<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>Bank Khoj</title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

    <!-- Vendor styles -->
    <link rel="stylesheet" href="{{ asset('public/vendor/fontawesome/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{ asset('public/vendor/metisMenu/dist/metisMenu.css')}}" />
    <link rel="stylesheet" href="{{ asset('public/vendor/animate.css/animate.css')}}" />
    <link rel="stylesheet" href="{{ asset('public/vendor/bootstrap/dist/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{ asset('public/vendor/sweetalert/lib/sweet-alert.css')}}" />
    <link rel="stylesheet" href="{{ asset('public/vendor/toastr/build/toastr.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('public/vendor/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" />

    <!-- App styles -->
    <link rel="stylesheet" href="{{ asset('public/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" />
    <link rel="stylesheet" href="{{ asset('public/fonts/pe-icon-7-stroke/css/helper.css')}}" />
    <link rel="stylesheet" href="{{ asset('public/styles/style.css')}}">
    <link rel="stylesheet" href="{{ asset('public/styles/static_custom.css')}}">
    <script src="{{ asset('public/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('public/vendor/jquery-ui/jquery-ui.min.js')}}"></script>



   

</head>
<body class="fixed-navbar sidebar-scroll" >

<!-- Simple splash screen-->
<div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>Homer - Responsive Admin Theme</h1><p>Special Admin Theme for small and medium webapp with very clean and aesthetic style and feel. </p><div class="spinner"> <div class="rect1"></div> <div class="rect2"></div> <div class="rect3"></div> <div class="rect4"></div> <div class="rect5"></div> </div> </div> </div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div id="header">
    <div class="color-line">
    </div>
    <div id="logo" class="light-version">
        <span>
          Bank Khoj
        </span>
    </div>
    <nav role="navigation">
    @include('partials.top-bar')
    </nav>
</div>
<aside id="menu">
 @include('partials.main-nav')
</aside>

<div id="wrapper">




@section('content')

@show


<div id="right-sidebar" class="animated fadeInRight">

   @include('partials.right-bar') 

    </div>

    <!-- Footer-->
    <footer class="footer">
        <span class="pull-right">
            Example text
        </span>
        Company 2015-2020
    </footer>

</div>
<!-- ../vendor scripts -->

<script src="{{ asset('public/vendor/slimScroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{ asset('public/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('public/vendor/metisMenu/dist/metisMenu.min.js')}}"></script>
<script src="{{ asset('public/vendor/iCheck/icheck.min.js')}}"></script>
<script src="{{ asset('public/vendor/sparkline/index.js')}}"></script>
<script src="{{ asset('public/vendor/sweetalert/lib/sweet-alert.min.js')}}"></script>
<script src="{{ asset('public/vendor/toastr/build/toastr.min.js')}}"></script>
<script src="{{ asset('public/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{ asset('public/vendor/jquery-flot/jquery.flot.js')}}"></script>
<script src="{{ asset('public/vendor/jquery-flot/jquery.flot.resize.js')}}"></script>
<script src="{{ asset('public/vendor/jquery-flot/jquery.flot.pie.js')}}"></script>
<script src="{{ asset('public/vendor/flot.curvedlines/curvedLines.js')}}"></script>
<script src="{{ asset('public/vendor/jquery.flot.spline/index.js')}}"></script>


<!-- DataTables -->
<script src="{{ asset('public/vendor/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('public/vendor/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- DataTables buttons scripts -->
<script src="{{ asset('public/vendor/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{ asset('public/vendor/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{ asset('public/vendor/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('public/vendor/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('public/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('public/vendor/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<!-- App scripts -->
<script src="{{ asset('public/scripts/homer.js')}}"></script>





<script>

    $(function () {

        // Initialize Example 1
        $('#example1').dataTable( {
            "ajax": 'api/datatables.json',
            dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
            "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
            buttons: [
                {extend: 'copy',className: 'btn-sm'},
                {extend: 'csv',title: 'ExampleFile', className: 'btn-sm'},
                {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                {extend: 'print',className: 'btn-sm'}
            ]
        });

        // Initialize Example 2
        $('#example2').dataTable();

    });

</script>

    
   


  @section('javascript')
    @show
</body>
</html>
