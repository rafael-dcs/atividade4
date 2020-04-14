<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="includes/styles/adminStyle.css" type="text/css">
    <title>Login</title>
</head>

<?php
require_once "functions.php";
sessionControl();
?>

<body>
    <section id="loginForm">
        <form action="" method="POST">
        <h2>SIGN IN</h2>
            <span id="loginError">Username or password incorrects</span>
            <div class="form-group">
                <label for="user">Username</label>
                <input type="text" name="user" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" name="pass" class="form-control" placeholder="Password" required>
            </div>
            <div>
                <input type="checkbox" name="remember" checked>
                <label for="remember">Remember me</label>
                <a href="" title="Change password">Forgot password?</a>
            </div>
            <div>
                <input type="submit" id="login" class="btn btn-success" value="LOGIN" name="login">
            </div>
        </form>
    </section>
</body>
</html>