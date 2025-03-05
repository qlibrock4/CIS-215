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
        
        $password = $_POST["pw-name"];
        if(password_verify($_POST["pw-name"], "$2y$10\$RMUPbc4ZpKMCot4fIkCzGuoB6qwXj6PsU4vfY3ZAT1KLZ9rStcdHm")){
            echo("Password is Correct");
        } else {
            echo("Incorrect/Invalid Password Entered. Please Try again.");
        }

        $email = $_POST["email"];
        if(is_null($email)){
            echo ("Enter valid email.");
        }
    

    
    
        $happy = $_POST["happy"];
        if(is_numeric($happy)){
            print("<p>Enter Valid Statement to: What makes you happy?</p>");
        } else {
            print("<p>What made you happy?</p>");
            echo($happy);
        }
        

        $gender = $_POST["gender"];
        if(!is_null($gender)){
            print("<p>The gender you chose is:</p>");
            echo($gender);
        
        } else {
            echo("Enter valid gender.");
        }
        
    ?>


    </body>

</html>