<?php

if (isset($_POST['man'])) {
	header("location:man.php");
}

if (isset($_POST['woman'])) {
	header("location:woman.php");
}
if (isset($_POST['kids'])) {
	header("location:kids.php");

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
<div class="col-md-5 col-md-offset-3" style="margin-top:  30px;">
	<div class="panel panel-default">
		<div class="panel-heading text-center">
			Cotaloge 
		</div>
		<div class="panel-body">
			<form class="form-horizontal" method="POST">
				<div class="form-group">
					<input type="submit" name="woman"  class="btn btn-info btn-block" value="Shop Woman">
				</div>
				<div class="form-group">
					<input type="submit" name="man"  class="btn btn-info btn-block" value="Shop Man">
				</div>
				<div class="form-group">
					<input type="submit" name="kids"  class="btn btn-info btn-block" value="Shop Kids">
					
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>