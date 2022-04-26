<?php

include 'connect.php';
$id= $_GET['updateid'];

$sql="SELECT * FROM `crud` WHERE id=$id";
$result=mysqli_query($con, $sql);
$row= mysqli_fetch_assoc($result);

$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];



if(isset($_POST['submit'])){

    $name= $_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql = "UPDATE `crud` SET id=$id, name='$name', email='$email', mobile='$mobile', password='$password' WHERE id=$id";

    $result = mysqli_query($con,$sql);
    if($result){
        // echo "data updated successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));

    }
}

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>CRUD Operations</title>
  </head>
  <body>
 <div class="container">
    <form method="post">
  <div class="form-group">
    <label>Enter name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter name" value=<?php echo $name ?>>
  </div>
  <div class="form-group">
    <label>Enter Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email" value=<?php echo $email ?>>
  </div>
  <div class="form-group">
    <label>Enter mobile</label>
    <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile no" value=<?php echo $mobile ?>>
  </div>
  <div class="form-group">
    <label>Enter password</label>
    <input type="text" class="form-control" name="password" placeholder="Enter password" value=<?php echo $password ?>>
  </div>


  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>

</div>
   

  </body>
</html>