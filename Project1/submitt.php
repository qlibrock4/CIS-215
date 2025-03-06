<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <?php
        include 'dbconfig.php';
        $db = connectDB();
        $db->query("CREATE TABLE project_one (id INT PRIMARY KEY AUTO_INCREMENT, email VARCHAR(20), 
        scale VARCHAR(20), makes VARCHAR(20), gender VARCHAR(20));");

        $insert_data = $db->prepare("INSERT INTO project_one (email, scale, makes, gender) VALUES (?);");
        
        
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        
        
        $password = $_POST["pw-name"];
        if(password_verify($_POST["pw-name"], "$2y$10\$RMUPbc4ZpKMCot4fIkCzGuoB6qwXj6PsU4vfY3ZAT1KLZ9rStcdHm")){
            echo("Password is Correct");
        } else {
            echo("Incorrect/Invalid Password Entered. Please Try again.");
        }

        $email = $_POST["email"];
        if(is_null($email)){
            print("<p>Enter valid email.</p>");
        } else{
            insert_data->execute(array($email))
        }

        $how = $_POST["how"];
        if(is_null($how)){
            print("<p>Enter how you feel.</p>");
        } else {
            print("<p>You feel...</p>");
            echo($how);
            insert_data->execute(array($how))
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