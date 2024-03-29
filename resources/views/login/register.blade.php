<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
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
            <div class="logo text-uppercase"><strong class="text-primary">Registration</strong></div>
            <p>You will find fresh foods you can warder through us we eill deliver you tje fresh foods in time.</p>
            <form method="post" class="text-left form-validate">
            @csrf
              <div class="form-group-material">
                <input id="register-username" type="text" name="name" required data-msg="Please enter your Name" class="input-material">
                <label for="register-username" class="label-material">Name</label>
              </div>
              <div class="form-group-material">
                <input id="register-username" type="text" name="contact" required data-msg="Please enter your Contact Number" class="input-material">
                <label for="register-username" class="label-material">Contact</label>
              </div>
              <div class="form-group-material">
                <input id="register-email" type="email" name="email" required data-msg="Please enter a valid email address" class="input-material">
                <label for="register-email" class="label-material">Email Address </label>
              </div>
              <div class="form-group-material">
                <input id="register-username" type="text" name="address" required data-msg="Please enter your Address" class="input-material">
                <label for="register-username" class="label-material">Address</label>
              </div>
              <div class="form-group-material">
                <input id="register-password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                <label for="register-password" class="label-material">Password</label>
              </div>
              <div>
                <select class="form-control" name="usertype">
                  <option>Admin</option>
                  <option>Customer</option>
                </select>
                <br/>
              </div>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
              <div class="form-group text-center">
                <input id="register" type="submit" value="Register" class="btn btn-primary">
              </div>
            </form><small>Already have an account? </small><a href="{{route('login.index')}}" class="signup">Login</a>
          </div>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>