<?php

require 'dbc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $uname=$_POST['userName'];
    $pwd=$_POST['password'];
    
    if(empty($uname) or empty($pwd)){
        echo "<div class='errormsgL'>invalid user name or password, please try again</div>";
        require 'login.php';
    }
    else{
        $sql="SELECT * FROM user WHERE userName='$uname';";
        $result=mysqli_query($connect,$sql);
        $checkResult=mysqli_num_rows($result);
        if($checkResult>0){
            $row=mysqli_fetch_assoc($result);
            if($pwd===$row['pwd']){
                require 'image.html';
            }
            else{
                echo "<div class='errormsgL'>invalid user name or password, please try again</div>";
                require 'login.php'; 
            }
        }
        else{
            echo "<div class='errormsgL'>invalid user name or password, please try again</div>";
            require 'login.php';  
        }
    }
    
    ?>
</body>
</html>

