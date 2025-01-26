<?php
    $name=$_REQUEST['txtname'];
    $pass=$_REQUEST['pass'];
    if(!empty($name))
    {
    if(!empty($pass))
    {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "test";

        $conn = new mysqli ($host , $dbusername , $dbpassword , $dbname);
        if(mysqli_connect_error())
        {
            die('connect error ('.mysqli_connect_errno().')'
            .mysqli_connect_error());
        }
        else
        {
            $sql = "INSERT INTO login (username,password) values ('$name','$pass')";
            if ($conn->query($sql))
            {
                echo "New record is inserted succesfully";
            }
            else
            {
                echo "Error:".$sql."<br>".$conn->error;
            }
            $conn->close();
        }

    }
    else
    {
        echo "password should not be empty";
        die();
    }
    }
    else
    {
        echo "Username should not be empty";
        die();
    }
?>