<html>
    <head>
        <title>PHP upload file</title>
    </head>
    <body>
        <?php
            // $file = $_POST['file'];
            if((($_FILES["file"]["type"]=="image/gif")||($_FILES["file"]["type"]=="image/jpeg")||($_FILES["file"]["type"]=="image/jpg")||($_FILES["file"]["type"]=="image/png"))&&($_FILES["file"]["size"]<200000))
            {
                if($_FILES["file"]["error"]>0)
                {
                    echo "Ruturn Code : ".$_FILES["file"]["error"]."</br>";
                }
                else{
                    echo "File Uploaded ! ";
                    echo "File Name : ".$_FILES["file"]["name"]."</br>";
                    echo "File Type : ".$_FILES["file"]["type"]."</br>";
                    echo "File Size : ".($_FILES["file"]["size"]/1024)."KB</br>";
                    echo "Temp File Name : ".($_FILES["file"]["tmp_name"])."</br>";
                    if(file_exists("upload/".$_FILES["file"]["name"]))
                    {
                        echo $_FILES["file"]["name"]. " already exist!</br>";
                    }
                    else{
                        move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
                        echo "File Stored at : "."upload/".$_FILES["file"]["name"];
                    }
                }
            }
            else{
                echo "Inavlid File";
            }
        ?>
    </body>
</html>