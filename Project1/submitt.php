<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <?php
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        include("Project1.php");

        if(password_verify($_POST["pwd-name"], "$2y$10\$RMUPbc4ZpKMCot4fIkCzGuoB6qwXj6PsU4vfY3ZAT1KLZ9rStcdHm")){
            echo("Thank you for your submission");
        } else {
            echo("Incorrect Password Entered. Please Try again.");
        }


    ?>

    </body>

</html>