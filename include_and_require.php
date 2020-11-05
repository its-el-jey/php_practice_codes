<?php

    //include & require
    // include('ninjas.php');
    // require('ninjas.php');

    //difference in handling error
    // include('ninjass.php');     //will only produce a warning(E_WARNING) and the script will continue 
    // require('ninjass.php');     //will produce a fatal error (E_COMPILE_ERROR) nad the script will continue

    //echo 'end of php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('content.php'); ?>
</body>
</html>