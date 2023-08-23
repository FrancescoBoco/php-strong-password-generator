<?php
session_start();
include_once __DIR__ . '/functions.php';
// if(isset($_POST['password-length'])){
//     echo generateRandomString($_POST['password-length']);
//     }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        la tua password è <?php if(isset($_SESSION['password-length'])){
    echo generateRandomString($_SESSION['password-length']);
    } ?>
    </h1>
</body>
</html>