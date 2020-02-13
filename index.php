<?php

include 'function.php';

    // Object creation
    $userdetails=new DB_con();
    $result=$userdetails->display_record();
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
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Crud Operation</title>
  </head>
  <body>

    <div class="container">
      <div class="mt-3 center">
       <h1>crud operation</h1>
     </div>
     <a class='btn btn-primary add' href='create.php'><i class="fa fa-plus-square"></i> Insert</a><br>

      <table class="table table-bordered table-sm mt-4">
         <thead>
    <tr>
    <th>Id</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Address</th>
    <th>Image</th>
    <th>Edit</th>
    <th>Delete</th>
    </tr>
  </thead>
    <tbody>
    <?php

      while($row = mysqli_fetch_array($result)){
        extract($row);
      $id = $row['id'];
      $firstname = $row['firstname'];
      $lastname  = $row['lastname'];
      $email = $row['email'];
      $mobileno = $row['phoneno'];
      $address = $row['address'];
      $picture = $row['image'];
      $image_src = "image/".$picture;
    ?>
    <tr>

      <td><?php echo $id ?></td>
      <td><?php echo $firstname ?></td>
      <td><?php echo $lastname ?></td>
      <td><?php echo $email ?></td>
      <td><?php echo $mobileno ?></td>
      <td><?php echo $address ?></td>
    <td> <img src='<?php echo $image_src;  ?>' width="50" height="50"></td>
      <td> <a class='btn btn-success btn-sm' href='edit.php?id=<?php echo $id?>'><i class="fa fa-edit"></i> &nbsp;Edit</a>
      </td>
      <td>
        <a class='btn btn-danger  btn-sm' href='delete.php?id=<?php echo $id?>'  
        onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i> &nbsp; Delete</a></td>
    </tr>
<?php

  }?>

   


  </tbody>
      </table>

    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>