<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login Page</title>
</head>
<body>
    <form action="check_login.php" method="post">
        
        <div class="login">
        <h1>Login</h1>
        <div>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Enter Email">
        </div>
        
        <br><br>
        <div><label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter password"></div>
        
        <input type="submit" name="login" value="Log in" id="log">
        </div>
    </form>
</body>
</html>