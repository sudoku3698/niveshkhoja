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
    <link rel="stylesheet" href="public/vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="public/vendor/metisMenu/dist/metisMenu.css" />
    <link rel="stylesheet" href="public/vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="public/vendor/bootstrap/dist/css/bootstrap.css" />

    <!-- App styles -->
    <link rel="stylesheet" href="public/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="public/fonts/pe-icon-7-stroke/css/helper.css" />
    <link rel="stylesheet" href="public/styles/style.css">

</head>
<body class="blank">

<!-- Simple splash screen-->
<div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>Homer - Responsive Admin Theme</h1><p>Special Admin Theme for small and medium webapp with very clean and aesthetic style and feel. </p><div class="spinner"> <div class="rect1"></div> <div class="rect2"></div> <div class="rect3"></div> <div class="rect4"></div> <div class="rect5"></div> </div> </div> </div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="color-line"></div>

<!-- <div class="back-link">
    <a href="index.html" class="btn btn-primary">Back to Dashboard</a>
</div> -->


<div class="login-container">

    <div class="row">
        <div class="col-md-12">
            <div class="text-center m-b-md" >
            
                <h3>PLEASE LOGIN </h3>
                
 @if(Session('success'))
               <script type="text/javascript">
                $(document).ready(function () {

                    toastr.success('Succesfully Saved');
                });
                </script>


         <div class="alert alert-success">

         {{ Session('success') }}

         </div>

         @endif
           @if(Session('error'))
         <script type="text/javascript">
                $(document).ready(function () {

                    toastr.error('Something Went Wrong, Please try Again.');
                });
                </script>

         <div class="alert alert-danger">

         {{ Session('error') }}

         </div>

         @endif


         @if (count($errors) > 0)
         <script type="text/javascript">
                $(document).ready(function () {

                    toastr.error('Something Went Wrong, Please try Again.');
                });
                </script>
        
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            </div>
            <div class="hpanel">
                <div class="panel-body">
                        <form action="{{url('postlogin')}}" id="loginForm" method="post">
                            <div class="form-group">
                                <label class="control-label" for="username">UserName</label>
                                <input type="text" placeholder="Please enter UserName" title="Please enter Mobile Number" required="" value="" name="username" id="username" class="form-control">
                                
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                
                            </div>
                             <div class="checkbox">
                                <input type="checkbox" class="i-checks" checked>
                                     Remember login
                                <p class="help-block small pull-right"> <a href="">Forgot Password?</a></p>
                            </div>
                           <div style="padding-top: 19px;margin-bottom: 18px;">
                            <button class="btn btn-success btn-block">Login</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">

            KHOJA BANK. Copyright 2017.
        </div>
    </div>
</div>


<!-- Vendor scripts -->
<script src="public/vendor/jquery/dist/jquery.min.js"></script>
<script src="public/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="public/vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="public/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="public/vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="public/vendor/iCheck/icheck.min.js"></script>
<script src="public/vendor/sparkline/index.js"></script>

<!-- App scripts -->
<script src="public/scripts/homer.js"></script>

</body>
</html>