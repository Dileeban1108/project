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
    $U_name=$_POST['userName'];
    $Nic=$_POST['NIC'];
    $Email=$_POST['Email'];
    $pwd=$_POST['password'];
    
    if(empty($U_name) or empty($Nic) or empty($Email) or empty($pwd)){
        echo "<div class='errorSU'>seems somthing is require</div>";
        require 'signup.php';
    }else{
        $sql="INSERT INTO user(userName,NIC,email,pwd) VALUES('$U_name','$Nic','$Email','$pwd');";
        $result=mysqli_query($connect,$sql);
        
        header("LOCATION:signup.php?signup successful");
    }
    ?>
</body>
</html>
