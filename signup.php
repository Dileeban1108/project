<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="signupBody">
    <div class="containerSU">
    <form action="register.php" method="POST" >
        <div class="signup"><h4>Sign Up</h4></div>
        <label for=UserName">User Name:</label>
        <input style="float:right;" type="text" name="userName" placeholder="USER NAME"><br><br>
        <label for="NIC">NIC:</label>
        <input style="float:right;" type="text" name="NIC" placeholder="NIC"><br><br>
        <label for="Email">Email:</label>
        <input style="float:right;" type="email" name="Email" placeholder="Email"><br><br>
        <label for="password">password:</label>
        <input style="float:right;" type="password" name="password" placeholder="password"><br>
        <button class="submitbtnSU">sign up</button><br><br>
        <a href="login.php">Already have an Account?Log In</a>
    </form>
    </div>
</body>
</html>