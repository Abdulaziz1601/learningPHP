<?php
    //mysqli_connect - function to connect with DB
    $connect = mysqli_connect('localhost', 'root', '', 'register');

    if (!$connect) {
        die('Error! Cannot connect to DB');
    }