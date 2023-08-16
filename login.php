<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="loginBody">
    <div class="topcontainerL">
    </div>
    <div class="containerL">
    <form action="check.php" method="POST">
        <div class="login"><h4>Log In</h4></div>
        <label for=UserName">User Name:</label>
        <input type="text" name="userName" style="float:right;"><br><br>

        <label for="password">password:</label>
        <input type="password" name="password" style="float:right;"><br><br>
        <button class="loginSU">log in</button><br>
        <a href="signup.php">Don't you have an Account?Create One</a>
    </form>
    </div>
    
</body>
</html>