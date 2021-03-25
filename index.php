<?php
////Variable validation and  setting COOKIE dictionary
//$city = isset($_COOKIE['city'])? $_COOKIE['city'] : '';
//$state = isset($_COOKIE['state'])? $_COOKIE['state'] : '';
//$zipCode = isset($_COOKIE['zipCode'])? $_COOKIE['zipCode'] : '';

//Starting session
session_start();
//Variable validation and
$city = isset($_SESSION['city']) ? $_SESSION['city'] : '';
$state = isset($_SESSION['state']) ? $_SESSION['state'] : '';
$zipCode = isset($_SESSION['zipCode']) ? $_SESSION['zipCode'] : '';


$isCityValid = true;
$isStateValid = true;
$isZipCodeValid = true;

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $city = $_REQUEST['city'];
    $zipCode = $_REQUEST['zipCode'];
    $state = $_REQUEST['state'];
    $isCityValid = preg_match("/^[a-z \-][a-z \-]*[a-z]$/i", $city);
    $isStateValid = preg_match("/^[a-z]{2}$/i", $state);
    $isZipCodeValid = preg_match("/^\d{5}$/i", $zipCode);

    $isValid = $isZipCodeValid && $isCityValid && $isStateValid;
    if ($isValid) {
//        Adding cookies, for duration of 1 hour
//        setcookie('city', $city, time() + 3600);
//        setcookie('state', $state, time() + 3600);
//        setcookie('zipCode', $zipCode, time() + 3600);

//        Working with sessions instead of cookies
        $_SESSION['city'] = $city;
        $_SESSION['state'] = $state;
        $_SESSION['zipCode'] = $zipCode;


//      Redirecting to thank you page, with http headers
        header('Location: ty.php', TRUE, 301);
    }
//    } else { // Killing Cookies
//        setcookie('city', $city, time() - 1);
//        setcookie('state', $state, time() - 1);
//        setcookie('zipCode', $zipCode, time() - 1);
//
//    }

}


?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Submit Form</title>
    <style>h1 {
            text-align: center;
        }</style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Submit Form with a validation</h1>
            <form method="post" action="index.php">
                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control <?= $isCityValid ? '' : 'is-invalid' ?>" id="city"
                           name="city" value="<?= $city ?>" placeholder="Enter city" aria-describedby="emailHelp">
                    <div class="invalid-feedback">
                        Please, enter city.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">State</label>
                    <input type="text" class="form-control <?= $isStateValid ? '' : 'is-invalid' ?> " id="state"
                           name="state" value="<?= $state ?>" placeholder="Enter state" aria-describedby="emailHelp">
                    <div class="invalid-feedback">
                        Please, enter state which is 2 characters long.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="zipCode" class="form-label">zipCode</label>
                    <input type="text" class="form-control <?= $isZipCodeValid ? '' : 'is-invalid' ?>" id="zipCode"
                           name="zipCode" value="<?= $zipCode ?>" placeholder="Enter ZIP Code"
                           aria-describedby="emailHelp">
                    <div class="invalid-feedback">
                        Please, enter state which is 5 characters long.
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>

</body>
</html>