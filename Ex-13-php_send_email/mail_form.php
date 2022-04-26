<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Mail</title>
</head>
<body>
    <?php
        if(isset($_REQUEST['email']))
        {
            $email = $_REQUEST['email'];
            $subject = $_REQUEST['subject'];
            $message = $_REQUEST['message'];
            mail("bhokarepranav2001@gmail.com","Subject:$subject",$message,"From:$email");
            echo "Thank you for using our mail form ! ";
        }
        else{
            echo "<form method='post' action='mail_form.php'>
            Email: <input name='email' type='txt'/></br>
            Subject : <input name='subject' type='text'/></br>
            Message : </br>
            <textarea   name='message' rows='15' cols='40'>
            </textarea></br>
            <input type='submit' value='submit'>
            </form> ";
        }
    ?>
</body>
</html>