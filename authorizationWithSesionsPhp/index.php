<?php
    session_start();
    if (isset($_SESSION['user'])) {
        header('Location: profile.php');
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/main.css">
    <title>Authorization and Registration</title>
</head>
<body>
    <!--Authorization form-->
    <form action="vendor/signin.php" method="post">
        <label>Login</label>
        <input type="text" name="login"  placeholder="Enter your login">

        <label>Password</label>
        <input type="password" name="password" placeholder="Enter your password">

        <button>Log In</button>
        <p>
            You have an account ? - <a href="register.php">Register</a>
        </p>
        <?php
        if (isset($_SESSION['message'])) {
            echo '<p class="msg">' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>
</body>
</html>