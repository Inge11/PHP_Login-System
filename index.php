<?php echo "Whats wrong?";
 define('__CONFIG__',true);
require_once "INC/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.17/dist/css/uikit.min.css" />
</head>
<body>
    <div class="uk-section uk-container uk-text -center">
    <?php echo "HAllo";
    echo date("Y m d");
    ?>
    <p><a href="/php_login_course/PHP_Login-System/login.php">Login</a></p>
    <p><a href="/php_login_course/PHP_Login-System/register.php">Register</a></p>
    
    

    </div>
    
    <?php require_once "inc/footer.php";?>
   
</body>
</html>