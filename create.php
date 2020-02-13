<?php

include_once('function.php');

//object creation

$userdata=new DB_con();

if(isset($_POST['submit']))
{

//Function Calling
$sql=$userdata->create();


if($sql){
	echo "<script>alert('record inserted successfully.');</script>";
    header("Location:index.php");
 }
else {
	echo "<script>alert('record not inserted.');</script>";
}

}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title>Insert Record</title>
  </head>
  <body>

  	<div class="mt-3 center">
  		<h2> Insert Record</h2>
  	</div>

    <div class="container mt-3">
    	<form action="" id="form1" method="POST" enctype='multipart/form-data'>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label   class="bold" for="firstname">Firstname</label>
					<input type="text" name="firstname" class="form-control" id="firstname">
				</div>
				<div class="form-group col-md-6">
					<label   class="bold" for="surname">Lastname</label>
					<input type="text" name="lastname" class="form-control" id="lastame">
				</div>
			</div>
			<div class="form-row">
			<div class="form-group col-md-6">
					<label  class="bold" for="Email">Email</label>
					<input type="text" name="email" class="form-control" id="email">
				</div>
				<div class="form-group col-md-6">
					<label  class="bold" for="Mobileno">Phoneno</label>
					<input type="text" name="mobileno" class="form-control" id="mobileno">
				</div>
			</div>
			<div class="form-row">
			<div class="form-group col-md-6">
					<label  class="bold" for="Email">Adress</label>
					<input type="text" name="address" class="form-control" id="address">
				</div>
				<div class="form-group col-md-6">
					<label  class="bold" for="Mobileno">Image</label>
					<input type="file" name="file"  id="file">
				</div>
			</div>
			<button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg">Insert</button>

			<a href="index.php" class="btn btn-danger btn-lg">Cancel</a>
		</form>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/jquery.validate.js"></script>
	<script src="js/additional-methods.js"></script>
	<script src="js/script.js"></script>

  </body>
</html>