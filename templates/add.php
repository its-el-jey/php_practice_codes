<?php 

    // GET METHOD is visible to everyone, only used for sending non-sensitive data
    // if(isset($_GET['submit'])){
    //     echo $_GET['email'];
    //     echo $_GET['title'];
    //     echo $_GET['ingredients'];
    // }
    
    /*  FILTERS, RegEx and more validation
        POST is more secure, invisible to others
        htmlspecialchars used to escape some malicious code and converts special characters to special entities*/
    $title = $email = $ingredients = '';
    $errors = array('email' => '', 'title' => '', 'ingredients' => '',);
    
    if(isset($_POST['submit'])){
        //check email
        if(empty($_POST['email'])){
            $errors['email'] = 'An email is required </br>';
        } else {
            //echo htmlspecialchars($_POST['email']);
            //check if email is valid
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = 'email must be a valid email address <br />';
            }
        }

        //check title
        if(empty($_POST['title'])){
            $errors['title'] = 'A title is required </br>';
        } else {
            //echo htmlspecialchars($_POST['title']);

            //check if title is all letters and spaces
            $title = $_POST['title'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
                $errors['title'] = 'Title must be letters and spaces only <br />';
            }
        }

        //check ingredients
        if(empty($_POST['ingredients'])){
            $errors['ingredients'] = 'At least one ingredient is required </br>';
        } else {
            //echo htmlspecialchars($_POST['ingredients']);
            //check if ing is comma separated
            $ingredients = $_POST['ingredients'];
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
                $errors['ingredients'] = 'Ingredients must be comma separated list <br />';
            }
        }

        if(array_filter($errors)){
            //echo 'errors in the form';
        } else {
            //redirect user
            header('Location: index.php');
        }

    } // end of the POST

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Handling</title>
</head>

    <?php include('header.php') ; ?>
    
    <section class="container grey-text">
        <h4 class="center">Add a Pizza</h4>
        <form action="add.php" method="POST" class="white">
            <label for="">Your Email:</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
            <div class="red-text"><?php echo $errors['email']; ?></div>
            
            <label for="">Pizza Title:</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
            <div class="red-text"><?php echo $errors['title']; ?></div>
            
            <label for="">Ingredients (comma separated):</label>
            <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
            <div class="red-text"><?php echo $errors['ingredients']; ?></div>
            
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>
    
    <?php include('footer.php') ; ?>

</html>