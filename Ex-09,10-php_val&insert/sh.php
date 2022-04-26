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
    background-color: lightgreen;
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


<?php
$name = $email = $gender = $comment = $website = "";
if (isset($_POST['submit'])) {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
  {
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  

?>





</div>
</div>
</div>
</body>
</html>