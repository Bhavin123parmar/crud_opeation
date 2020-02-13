<?php

include_once('function.php');

//object creation
$userdata=new DB_con;

if(isset($_GET['id'])){
	$result=$userdata->getsinglerecord($_GET['id']);
	$row=mysqli_fetch_assoc($result);
	extract($row);

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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title>Edit Record</title>
  </head>
  <body>

  	<div class="mt-3 center">
  		<h2> Edit Record</h2>
  	</div>

    <div class="container mt-3">
    	<form action="" id="form2" method="POST" enctype='multipart/form-data'>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label   class="bold" for="firstname">Firstname</label>
					<input type="text" name="firstname" class="form-control" value="<?php echo $firstname?>" id="first_name">
				</div>
				<div class="form-group col-md-6">
					<label   class="bold" for="surname">Lastname</label>
					<input type="text" name="lastname" class="form-control" value="<?php echo $lastname?>" id="last_name">
				</div>
			</div>
			<div class="form-row">
			<div class="form-group col-md-6">
					<label  class="bold" for="Email">Email</label>
					<input type="text" name="email" class="form-control" value="<?php echo $email?>" id="email_id">
				</div>
				<div class="form-group col-md-6">
					<label  class="bold" for="Mobileno">Phoneno</label>
		<input type="text" name="phoneno" class="form-control" value="<?php echo $phoneno?>" id="mobile_no">
				</div>
			</div>
			<div class="form-row">
			<div class="form-group col-md-6">
					<label  class="bold" for="Adress">Adress</label>
					<input type="text" name="address" value="<?php echo $address?>" class="form-control" id="address_id">
				</div>
				<div class="form-group col-md-6">
			<img src="image/<?php echo $row['image']; ?>" width="50px" height="50px";">
					<label  class="bold" for="Mobileno">Image</label>
					<input type="file" name="file"  id="file1">
				</div>
			</div>
			<button type="submit" name="submit" id="submit" class="btn btn-success btn-lg">Edit</button>

			<a href="index.php" class="btn btn-danger btn-lg">Reset</a>
		</form>
    </div>

    <?php
    if(isset($_POST['submit'])){
    	$userdata->update($id);
    	header("Location:index.php");
    }


    ?>
    <script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/jquery.validate.js"></script>
	<script src="js/additional-methods.js"></script>
	<script src="js/script.js"></script>

  </body>
</html>