<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <p>Thank you for your submission</p>
    <?php
        if(password_verify($_POST["pwd-name"], "$2y$10\$RMUPbc4ZpKMCot4fIkCzGuoB6qwXj6PsU4vfY3ZAT1KLZ9rStcdHm")){
            
        } else {
            echo("Incorrect Password Entered. Please Try again.")
        }


    ?>

    </body>

</html>