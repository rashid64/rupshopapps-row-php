<?php
	// include('db.php');
	// require("db.php");
	// $link = mysqli_connect('localhost', 'root', '', 'aponin');
    // require_once('db.php');
  include 'db.php';
// print_r($_POST);
	if(!empty($_POST)){
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
	$usertype = $_POST['user_type'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$conpassword = $_POST['conpassword'];

	if($password== $conpassword){
		$query = "INSERT INTO user_info(u_full_name,u_email,u_phone,u_type,u_user,u_pass,u_conpass) VALUES('$fullname','$email','$phonenumber','$usertype','$username','$password','$conpassword')";
		$res = mysqli_query($link, $query);

		if($res){
			header('location:index.php');
		}else{
			echo "Registration faild";
		}
	}else{
		echo "confirm password does't match";
	}
}
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="assets/css/login.css">
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
	<title>Apon</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>

<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="reg_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="assets/img/apon.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="" method="post">
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-user"></i> </span>
							</div>
							<input name="fullname" class="form-control" placeholder="Full name" type="text" required="">
						</div> <!-- form-group// -->

						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
							</div>
							<input name="email" class="form-control" placeholder="Email address" type="email" required="">
						</div> <!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
							</div>

							<input name="phonenumber" class="form-control" placeholder="Phone number" type="text" required="">
						</div> <!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-building"></i> </span>
							</div>
							<select class="form-control" name="user_type">
								<option selected=""> Select User type</option>
								<option value="admin">Admin</option>
								<option value="user">User</option>
							</select>
						</div> <!-- form-group end.// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-user"></i> </span>
							</div>
							<input name="username" class="form-control" placeholder="Username" type="text" required="">
						</div> <!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
							</div>
							<input name="password" class="form-control" placeholder="password" type="password" required="">
						</div> <!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
							</div>
							<input name="conpassword" class="form-control" placeholder="confirm password" type="password" required="">
						</div> <!-- form-group// -->

						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block" name="submit"> Create Account  </button>
							
						</div> <!-- form-group// -->      
						<p class="text-center">Have an account? <a href="index.php">Log In</a> </p>                 
					</form>
				</div>

			</div>
		</div>
	</div>
</body>
</html>
