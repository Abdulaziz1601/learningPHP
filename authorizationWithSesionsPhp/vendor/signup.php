<?php

session_start();
require_once 'connect.php';

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$avatar = $_POST['avatar'];
$pswd = $_POST['pswd'];
$confirmPswd = $_POST['confirmPswd'];

if ($pswd === $confirmPswd) {
    //    If they'll be equal we continue... and work with img
    $path = '../uploads/' . time() . $_FILES['avatar']['name'];
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'],  $path)) {
        $_SESSION['message'] = "Error when loading file!";
        header('Location: ../register.php');
    }

    $pswd = md5($pswd);

    mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$pswd', '$path')");
    $_SESSION['message'] = "Successfully Registered !";
    header('Location: ../index.php');
} else {
    $_SESSION['message'] = "Passwords are not matching";
    header('Location: ../register.php');
}

?>
