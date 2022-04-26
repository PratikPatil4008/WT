<!DOCTYPE HTML>  
<html>
<head>

 <!-- Latest compiled and minified CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
  *{
    padding:0;
    margin:0;
  }
  body{
    background-color: lightblue;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
  }
</style>
</head>
<body>  
<div class="container text-center">
        <div class="card" style="box-shadow:1px 1px 1px 1px grey; background-image: url(k.webp); background-repeat: no-repeat; background-size: 100%; ">  
            <div class="card-body">

<?php
// define variables and set to empty values



?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="sh.php">  
  Name: <input type="text" name="name" required >
  <br><br>
  E-mail: <input type="email" name="email" required>
  <br><br>
  Website: <input type="text" name="website" required>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40" required></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female"required>Female
  <input type="radio" name="gender" value="male"required>Male
  <input type="radio" name="gender" value="other"required>Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
  <!-- <button onclick="clickMe()"> Click </button> -->
</form>

<br>






</div>
</div>
</div>
</body>
</html>