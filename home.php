<?php 
session_start(); 
?>
<?php
  include 'db.php';

if (empty($_SESSION['admin'])) {
  header('location:index.php');
}
	if (!empty($_POST)) {
		
		$pdate= $_POST['pdate'];
		$cid=   $_POST['cid'];
		$bill=	$_POST['bill'];
		$cname= $_POST['cname'];
		$contact=$_POST['contact'];
		$pdes= $_POST['pdes'];
		$color= $_POST['color'];
		$address= $_POST['address'];
		$admin = $_SESSION['admin'];


		$query = "INSERT INTO receipt(cre_date,customer_id,bill_amount,customer_name,contact_number,p_description,color_size,address)VALUES('$pdate','$cid','$bill','$cname','$contact','$pdes','$color','$address')";

		$res = mysqli_query($link, $query);

		if($res){
			echo'<div class="alert alert-success"><strong>Success!</strong> Your message has been sent successfully.</div>';
		}else{
			echo'<div class="alert alert-danger">Sorry there was an Not sending.</div>';
		}
	}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Rupshop Apps</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      <a class="navbar-brand" href="#">Rupshop.Com</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Home</a></li>
	        <li class="dropdown">
	          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Page 1-1</a></li>
	            <li><a href="#">Page 1-2</a></li>
	            <li><a href="#">Page 1-3</a></li>
	          </ul>
	        </li>
	        <li><a href="allreport.php">All Receipt</a></li>
	        <li><a href="#">Page 3</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="testbox">
				<form action="" method="post">
					<h1>Rupshop Product Invoice</h1>
					<div class="col-md-12">
						<hr>
					</div>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>Date</label>
									<input type="date" name="pdate" required/>
								</div>	
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Customer ID</label>
									<input type="text" name="cid" class="form-control" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Bill Amount</label>
									<input type="text" name="bill" class="form-control" required>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Customer Name</label>
									<input type="text" name="cname" class="form-control" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Contact Number</label>
									<input type="text" name="contact" class="form-control" required>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Product Description</label>
									<input type="text" name="pdes" class="form-control" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Color / Size</label>
									<input type="text" name="color" class="form-control" required>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Address</label>
									<textarea type="text" name="address" class="form-control" rows="2" required></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="btn-block">
						<button type="submit" name="submit">Submit</button>
					</div>
				</form> 
    </div>
		</div>
	</div>
</div>
    
	
</body>
</html>