<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <?php
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        
        
        include 'dbconfig.php';
        $db = connectDB();

        $insert_data = $db->prepare("INSERT INTO project (email, how, happy, gender) VALUES (?, ?, ?, ?);");

        
        
        


        
        
        $password = $_POST["pw-name"];
        if(password_verify($_POST["pw-name"], "$2y$10\$RMUPbc4ZpKMCot4fIkCzGuoB6qwXj6PsU4vfY3ZAT1KLZ9rStcdHm")){
            echo("Password is Correct");
        } else {
            echo("Incorrect/Invalid Password Entered. Please Try again.");
        }

        
        $email = $_POST["email"];
        $how = $_POST["how"];
        $happy = $_POST["happy"];
        $gender = $_POST["gender"];

        if(is_null($email)){
            print("<p>Email is required");
        } else {
            print("<p>Email:</p>");
            echo($email);
        }
        
        if(is_null($how)){
            print("<p>Enter how you feel.</p>");
        } else {
            print("<p>You feel...</p>");
            echo($how);
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
        
        if (!is_null($email) && !is_null($how) && !is_null($happy) && !is_null($gender)) {
            $insert_data->execute(array($email, $how, $happy, $gender));
        }
        
        $select = $db->prepare("SELECT * FROM project;");
        $select->execute();
        $info = $select->fetchAll();  # would retrieve all rows in data

        
        $row = implode(", ", $info);
        echo($row);

    
    
    ?>


    </body>

</html>