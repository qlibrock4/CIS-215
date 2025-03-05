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
        $password = $_POST["password"];
        if(password_verify($_POST["pw-name"], "$2y$10\$RMUPbc4ZpKMCot4fIkCzGuoB6qwXj6PsU4vfY3ZAT1KLZ9rStcdHm")){
            echo("Password is Correct");
        } else {
            echo("Incorrect Password Entered. Please Try again.");
        } elseif(is_null($password)){
            print("<p>You need to enter a password</p>");
        }

        
    

    
    
        $happy = $_POST["happy"];
        if(is_numeric($happy)){
            print("<p>Enter Valid Statement to: What makes you happy?</p>");
        } else {
            print("<p>Submission Recieved</p>");
        }
        


        
    ?>


    </body>

</html>