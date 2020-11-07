<?php  
    
    //SUPERGLOBAL sessions
    if(isset($_POST['submit'])){
        session_start();

        $_SESSION['name'] = $_POST['name'];

        // echo $_SESSION['name'];

        //redirecting after clicking submit button
        header('Location: index.php');
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>ternary operator</title>
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <input type="text" name="name">
    <input type="submit" name="submit" value="submit">
    </form>

</body>
</html>