<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: /');
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
<!--Showing profile-->
    <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" alt="" width="200" height="200">
        <h2><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="vendor/logout.php" class="logout">Log Out</a>
    </form>
</body>
</html>