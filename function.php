<?php

define('DB_SERVER','localhost');// Your hostname
define('DB_USER','root'); // Databse username
define('DB_PASS' ,''); // Database Password
define('DB_NAME', 'student');// Database name
class DB_con {
	function __construct() {
		$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
		$this->dbh=$con;
// Check connection
		if (mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	}


	function create(){
		$fname 		= $_POST['firstname'];
		$lname 		= $_POST['lastname'];
		$email 		= $_POST['email'];
		$address 	= $_POST['address'];
		$mobileno   = $_POST['mobileno'];

		$name = $_FILES['file']['name'];
		$target_dir= "image/";
		$target_file = $target_dir . basename($_FILES["file"]["name"]);

		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		$extensions_arr = array("jpg","jpeg","png","gif");

		if( in_array($imageFileType,$extensions_arr) ){
			$query = "insert into register(firstname,lastname,email,phoneno,address,image) values('$fname','$lname',
			'$email','$mobileno','$address','$name')";
			$result = mysqli_query($this->dbh,$query);
			return $result;

      // Upload file
			move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
		}
	}


public function display_record(){
		$display    ="select * from register order BY firstname desc";
		$result		= mysqli_query($this->dbh,$display) or die(mysqli_error());
		return $result;
	}

public function getsinglerecord($id){
		$display_record    ="select * from register where id=".$id;
		$result		= mysqli_query($this->dbh,$display_record) or die(mysqli_error());
		return $result;

}

public function update($id){

	move_uploaded_file($_FILES["file"]["tmp_name"],"image/" . $_FILES["image"]["name"]);			
	$image=$_FILES["file"]["name"];

	$sql = "UPDATE register set firstname='".$_POST['firstname']."',
								lastname ='".$_POST['lastname']."',
								email   ='".$_POST['email']."',
								phoneno ='".$_POST['phoneno']."',
								address ='".$_POST['address']."',
								image  = '".$image."' WHERE id='$id' ";
	echo $sql;
	$result =  mysqli_query($this->dbh,$sql);
	
}

public function delete(){
	$id = $_GET['id'];
	$delete = "DELETE From register WHERE id='$id'";
	$result		= mysqli_query($this->dbh,$delete);
	return $result;

}
}