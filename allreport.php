<?php 
session_start(); 
?>
<?php
  include 'db.php';

  if (empty($_SESSION['admin'])) {
  	// print_r($_SESSION);
  header('location:index.php');
}

	
	
// define how many results you want per page
$results_per_page = 3;

// find out the number of results stored in rowbase
$query='SELECT * FROM receipt';
$result = mysqli_query($link, $query);
$number_of_results = mysqli_num_rows($result);

// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);

// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Apon Daily Production Report</title>
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
	      <button type="button" class="navbar-toggle" row-toggle="collapse" row-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      <a class="navbar-brand" href="#">Rupshop.com</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="home.php">Home</a></li>
	        <li class="dropdown">
	          <a class="dropdown-toggle" row-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Page 1-1</a></li>
	            <li><a href="#">Page 1-2</a></li>
	            <li><a href="#">Page 1-3</a></li>
	          </ul>
	        </li>
	        <li><a href="#">All receipt</a></li>
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
			<div class="col-lg-6 col-lg-offset-3">
								  
				<form action="" method="POST" style="background: transparent; border:none; padding:13px 0">						
					<div class="input-group">
						<input type="text" name="search" value="" class="form-control input-lg">
						<div class="input-group-btn">
							<button type="submit" name="btn" class="btn btn-lg btn-md btn-primary">Search</button>
						</div>
					</div>
				</form>
				
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">SL</th>
							<th scope="col">Receipt No</th>
							<th scope="col">Date</th>
							<th scope="col">Bill</th>
							<th scope="col">Customer Name</th>
							<th scope="col">Contact Number</th>
							<th scope="col">P_Description</th>
							<th scope="col">Color / Size</th>
							<th scope="col">Address</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php

						$query="SELECT * FROM receipt ORDER BY receipt_id DESC LIMIT $this_page_first_result,$results_per_page";
						$res = mysqli_query($link, $query);

						while($row = mysqli_fetch_array($res)) {?>

							<tr>
								<td><?php echo $row['receipt_id']?></td>
							<td><?php echo $row['customer_id']?></td>
							<td><?php echo $row['cre_date']?></td>
							<td><?php echo $row['bill_amount']?></td>
							<td><?php echo $row['customer_name']?></td>
							<td><?php echo $row['contact_number']?></td>
							<td><?php echo $row['p_description']?></td>
							<td><?php echo $row['color_size']?></td>
							<td><?php echo $row['address']?></td>
							<td>
								<a href="editreceipt.php?rid=<?php echo $row['receipt_id'];?>"><i class="fas fa-edit"></i></a>&nbsp&nbsp
								<a href="#" onclick="if(confirm('Are you sure want to delete?')){window.location.href='deletereport.php?did=<?php echo $row['receipt_id'];?>'};">
									<i class="fas fa-trash"></i></a>
								&nbsp<a href="report/report.php?print=<?php echo $row['receipt_id']; ?>" target="_blank"><i class="fa fa-eye"></i></a>
							</td>
							</tr>
						<?php  }
						?>
					</tbody>
				</table>
				<nav aria-label="...">
					<ul class="pagination">
						<?php

						for ($page=1;$page<=$number_of_pages;$page++) {
							echo '<a href="allreport.php?page=' . $page . '">' . $page . '</a> ';
						}
						?>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>
</body>
</html>