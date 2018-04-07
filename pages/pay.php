<?php
session_start();
require "connect.php";
$sql_qur="SELECT * FROM car WHERE eamil='$_SESSION[email]'";
$result=mysqli_query($connect,$sql_qur);
$count= mysqli_num_rows ($result);
$total=0;
if (isset($_GET['id'])) {
	$sql_dele="DELETE FROM car WHERE id= '$_GET[id]'";
	if(mysqli_query($connect,$sql_dele)){
		header("location:pay.php");
	}
}
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
				<div class="col-md-10">
					<table class="table">
						<thead>
							<tr>
							<th></th>
							<th>Type</th>
							<th>price</th>
						</tr>
						</thead>
						<tbody>
							<?php 
							$sql="SELECT * FROM car WHERE eamil='$_SESSION[email]'";
							$result=mysqli_query($connect,$sql);
							while ($row=mysqli_fetch_array($result)) {
								echo '
                             <tr>
                             <td><img src='.$row['paths'].'  width="80px"></td>
                             <td>'.$row['type'].'</td>
                             <td>'.$row['price'].'</td>
                             <td><a href="pay.php?id='.$row['id'].'" class="btn btn-danger">Delete </a></td>
                             </tr>
							';
							$total+=$row['price'];
							}
							?>
						</tbody>

					</table>
					<div class="text-center">
					  <h3>Total : <?php echo $total;?></h3>
					  <button class="btn btn-info" > Pay </button>

					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>