<?php 
require "connect.php";
session_start();
if(isset($_POST['login'])){
	$email=$_POST['email'];
	$pass=md5($_POST['pass']);
	$sql="SELECT * FROM user WHERE email='$email' AND pass='$pass'";
	$res=mysqli_query($connect,$sql);
	if (mysqli_num_rows($res)==1){
          $_SESSION['email']=$email;
          $_SESSION['pass']=$pass;
          header("location:cotaloge.php");
	}
}

if (isset($_POST['sinup'])) {
	$email=$_POST['email'];
	$name=$_POST['name'];
	$pass=md5($_POST['pass']);
	$sqls="INSERT INTO user (email,name,pass)VALUES ('$email','$name','$pass')";
	if (mysqli_query($connect,$sqls)) {
		header("location:index.php");
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require "header.php";?>
</head>
<body>
	<div class="col-md-12 text-center"  >
		<img src="../images/ma.jpg" width="250px" height="250px">
	</div>
<div class="col-md-6 col-md-offset-2" style="margin-top:  30px;">
	<div class="panel panel-default">
		<div class="panel-heading text-center">
			LogIn
		</div>
		<div class="panel-body">
			<form class="form-horizontal" method="POST">
				<div class="form-group">
					<input type="text" name="email" placeholder="Email" class="form-control">
				</div>
				<div class="form-group">
					<input type="password" name="pass" placeholder="Password"  class="form-control">
				</div>
				<div class="form-group">
					<div class="3">
						<input type="submit" name="login" value="Login" class="btn btn-info">

						
						 <button type="button" class="btn btn btn-info" data-toggle="modal" data-target=".bs-example-modal-md">SingUp</button>
					
					</div>
					
				</div>
			</form>
            

<div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
          
          <form method="POST"  class="form-horizontal">
          	<div class="form-group ">
          		<div class="col-md-6">
          		<input type="email" name="email" class="form-control" placeholder="Enter your email">
          		</div>
          	</div>
          	<div class="form-group ">
          		<div class="col-md-6">
          			<input type="text" name="name" class="form-control" placeholder="Enter your name">
          			</div>
          	</div>
            <div class="form-group ">
            	<div class="col-md-6">
            	<input type="password" name="pass" class="form-control" placeholder="Enter password">
            	</div>
            </div>
          	 
          	 <div class="form-group">
          	 	<div class="col-md-6">
          	 	<input type="submit" name="sinup" value="SingUp" class="btn btn-info">
          	 	</div>
          	 </div>

          </form>


          </div>
  </div>
</div>




		</div>
	</div>

	
</div>
</body>
</html>