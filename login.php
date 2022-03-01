<?php
session_start();

//var_dump($_POST);exit;

if(!empty($_POST['email'])){
	if(strpos($_POST['email'],'radiometer') !== false){
		$_SESSION['is_radiometer_user'] = true;
		$_SESSION['customer_id'] = '101';
		$_SESSION['customer_name'] = 'admin';
	}else{
		$_SESSION['is_radiometer_user'] = false;
		
		if(strpos($_POST['email'],'cust1') !== false){
			$_SESSION['customer_id'] = '1';
			$_SESSION['customer_name'] = 'Cust 1';			
		}else{
			$_SESSION['customer_id'] = '2';
			$_SESSION['customer_name'] = 'Cust 2';
		}
	}
	
	header("Location: purchase_orders.php");
}
?>

<!doctype html>


<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Radiometer - Login" />

    <!-- Libs CSS -->
    <link rel="stylesheet" href="./assets/fonts/feather/feather.css" />
    <link rel="stylesheet" href="./assets/libs/flatpickr/dist/flatpickr.min.css" />
    <link rel="stylesheet" href="./assets/libs/quill/dist/quill.core.css" />
    <link rel="stylesheet" href="./assets/libs/highlightjs/styles/vs2015.css" />

    <!-- Map -->
    <link href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" rel="stylesheet" />

    <!-- Theme CSS -->
    
    <link rel="stylesheet" href="./assets/css/theme.min.css">
      
    <!-- Title -->
    <title>Radiometer - Login</title>

  </head>
  <body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">

    <!-- CONTENT
    ================================================== -->
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6 offset-xl-2 offset-md-1 order-md-2 mb-5 mb-md-0">
		<h1 class="text-center text-blue">Radiometer Order Management System</h1>
          <!-- Image -->
          <div class="text-center">
            <img src="assets/img/illustrations/scale.svg" alt="..." class="img-fluid">
          </div>
		
        </div>
        <div class="col-12 col-md-5 col-xl-4 order-md-1 my-5">
          
          <!-- Heading -->
          <h1 class="display-4 text-center mb-3">
            Sign in
          </h1>
          
          <!-- Form -->
          <form method="post" action="login.php" >

            <!-- Email address -->
            <div class="form-group">

              <!-- Label -->
              <label>Email Address</label>

              <!-- Input -->
              <input type="text" name="email" class="form-control" id="email" placeholder="name@address.com">

            </div>

            <!-- Password -->
            <div class="form-group">

              <div class="row">
                <div class="col">
                      
                  <!-- Label -->
                  <label>Password</label>

                </div>
                <div class="col-auto">
                  
                  <!-- Help text -->
                  <a href="password-reset-illustration.html" class="form-text small text-muted">
                    Forgot password?
                  </a>

                </div>
              </div> <!-- / .row -->

              <!-- Input group -->
              <div class="input-group input-group-merge">

                <!-- Input -->
                <input type="password" name="password" id="password" class="form-control form-control-appended" placeholder="Enter your password">

                <!-- Icon -->
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fe fe-eye"></i>
                  </span>
                </div>

              </div>
            </div>

            <!-- Submit -->
            <button type="submit" class="btn btn-lg btn-block btn-primary mb-3">
              Sign in
            </button>

            <!-- Link -->
			<!--
            <div class="text-center">
              <small class="text-muted text-center">
                Don't have an account yet? <a href="sign-up-illustration.html">Sign up</a>.
              </small>
            </div>
            -->
          </form>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/libs/@shopify/draggable/lib/es5/draggable.bundle.legacy.js"></script>
    <script src="./assets/libs/autosize/dist/autosize.min.js"></script>
    <script src="./assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="./assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="./assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="./assets/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="./assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="./assets/libs/list.js/dist/list.min.js"></script>
    <script src="./assets/libs/quill/dist/quill.min.js"></script>
    <script src="./assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="./assets/libs/chart.js/Chart.extension.js"></script>

    <!-- Map -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

    <!-- Theme JS -->
    <script src="./assets/js/theme.min.js"></script>
    <script src="./assets/js/dashkit.min.js"></script>


  </body>
</html>