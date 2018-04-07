<?php 
require "connect.php";
session_start();
if (isset($_GET['price'])) {
	$price=$_GET['price'];
	$path=$_GET['img'];
	$email= $_SESSION['email'];
	$sql="INSERT INTO car (eamil,price,type,paths)VALUES ('$email','$price','KIDS','$path')";
	if(mysqli_query($connect,$sql)){
		header("location:kids.php");
	}
	else{
		echo "string";
	}
}
$sql_qur="SELECT * FROM car WHERE eamil='$_SESSION[email]'";
$result=mysqli_query($connect,$sql_qur);
$count= mysqli_num_rows ($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
	require "header.php";
	?>
</head>
<body>
	<header>
		<nav class="navbar navbar-default">
			<ul class="nav navbar-nav">
				<li><a href="man.php">Man</a></li>
				<li><a href="woman.php">Woman</a></li>
				<li><a href="kids.php">Kids</a></li>
				<li><a href="pay.php"><i class="fas fa-shopping-cart"></i> <?php echo $count;?></a></li>
			</ul>
		</nav>
	</header>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<img src="../images/kids/p1.jpg" class="img-responsive">
					</div>
					<div class="panel-body text-center">
						<p>Child dress</p>
						<a href="kids.php?price=70& img=../images/kids/p1.jpg" class="">70$</a>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<img src="../images/kids/p2.jpg" class="img-responsive">
					</div>
					<div class="panel-body text-center">
						<p>Baby shirt</p>
						<a href="kids.php?price=45& img=../images/kids/p2.jpg" class="">45$</a>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<img src="../images/kids/p3.jpg" class="img-responsive">
					</div>
					<div class="panel-body text-center" >
						<p>Baby pajama</p>
						<a href="kids.php?price=30& img=../images/kids/p2.jpg" class="">30$</a>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<img src="../images/kids/p4.jpg" class="img-responsive">
					</div>
					<div class="panel-body text-center">
						<p>Girl T-shirt</p>
						<a href="kids.php?price=65& img=../images/kids/p2.jpg" class="">65$</a>
					</div>
				</div>
			</div>

			
		</div>
	</div>
</section>
</body>
</html>