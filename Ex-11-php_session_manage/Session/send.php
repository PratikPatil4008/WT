<?php
            
    if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
				
        if ($_POST['username'] == 'Pranav' && $_POST['password'] == 'Pass@123') {
            $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time();
            $_SESSION['username'] = 'Pranav';      
            echo 'You have entered valid use name and password ! <br>';
            echo "Your Session details are: <br>"; 
            echo "Session username: ".$_POST['username']."<br>";
            echo "Session Password: ".$_POST['password']."<br>";
            echo "Session Login Time: ".$_SESSION['timeout']."<br>";
            echo " Click here to clean <a href = 'logout.php' tite = 'Logout'>Session";


        }
        echo " You Have  successfully send The Messege";

    }
    else {
        echo 'Wrong username or password';
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pre-logout</title>
</head>
<body>
<button onclick="window.location.href='logout.php'" style="background-color: black;color:yellow;cursor:pointer;">Logout</button>
</body>
</html>