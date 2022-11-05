<!doctype html>
<html lang="en">
  <head>
  	<title>App Traine Sciencom</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url('assets/login/css/style.css'); ?>">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login Traine Apps</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(assets/images/sc.png);">
			      	</div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex"> 
								 
			      	</div>
					<form action="<?php echo base_url('login/autentikasi'); ?>" id="loginform" method="POST" class="signin-form">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
			      		</div>
		           		<div class="form-group mb-3">
							<label class="label" for="password">Password</label>
							<input type="password" name="password" id="password"  class="form-control" placeholder="Password" required>
		            	</div>
						<div class="form-group">
							<button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
						</div> 
		         	</form>  
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?php echo base_url('assets/login/js/jquery.min.js'); ?> "></script>
	<script src="<?php echo base_url('assets/login/js/popper.js'); ?> "></script>
	<script src="<?php echo base_url('assets/login/js/bootstrap.min.js'); ?> "></script>
	<script src="<?php echo base_url('assets/login/js/main.js'); ?> "></script>

	</body>
</html>

