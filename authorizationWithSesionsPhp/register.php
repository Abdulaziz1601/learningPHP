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
    <!--Registration form-->
    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>Full name</label>
        <input type="text" name="full_name"  placeholder="Enter your full name">

        <label>login</label>
        <input type="text" name="login" placeholder="Enter your login">

        <label>E-mail</label>
        <input type="email" name="email" placeholder="Enter your e-mail">

        <label>Profile Photo</label>
        <input type="file" name="avatar" >

        <label>Password</label>
        <input type="password" name="pswd" placeholder="Enter your password">

        <label>Confirm Password</label>
        <input type="password" name="confirmPswd" placeholder="Enter your password">

        <button type="submit">Log In</button>
        <p>
            You don't have an account ? - <a href="index.php">Authorize</a>
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