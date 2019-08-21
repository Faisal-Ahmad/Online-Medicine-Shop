<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
     <!-- Bootstrap CSS-->
     <link rel="stylesheet" href="{{asset('vendor')}}/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('vendor')}}/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('css')}}/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('css')}}/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
  
    <div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><strong class="text-primary">Online Medicine Shop</strong></div>
            <p>You will find Medicines by our website and you will deliver you tje fresh foods in time.</p>
            <form method="post" class="text-left form-validate">
               @csrf
              <div class="form-group-material">
                <input id="login-username" type="text" name="email" required data-msg="Please enter your email" class="input-material">
                <label for="login-username" class="label-material">Email</label>
              </div>
              <div class="form-group-material">
                <input id="login-password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                <label for="login-password" class="label-material">Password</label>
                {{session('msg')}}
              </div>
              <br/>
              <div class="form-group text-center"><input type="submit" value="Login" class="btn btn-primary">
              </div>
            </form><small>Do not have an account? </small><a href="{{route('login.register')}}" class="signup">Signup</a>
          </div>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('vendor')}}/jquery/jquery.min.js"></script>
    <script src="{{asset('vendor')}}/popper.js/umd/popper.min.js"> </script>
    <script src="{{asset('vendor')}}/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{asset('js')}}/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="{{asset('vendor')}}/jquery.cookie/jquery.cookie.js"> </script>
    <script src="{{asset('vendor')}}/chart.js/Chart.min.js"></script>
    <script src="{{asset('vendor')}}/jquery-validation/jquery.validate.min.js"></script>
    <script src="{{asset('vendor')}}/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{asset('js')}}/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>