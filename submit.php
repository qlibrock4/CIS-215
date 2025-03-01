<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8" />
</head>
    <body>
        <?php    
            $score = 0;
            /*Sends data to page, stores as variables */
            $colleges = $_POST["college"];
            $locate = $_POST["locate"];
            $type = $_POST["type"];
            $class = $_POST["class"];
            
            /*If the value is 1 then it will add 
            to the overall score of the test to later be echoed */
            
            if($colleges == 1) {
                $score ++;
            }
            if($locate == 1){
                $score ++;
            }
            if($type == 1){
                $score ++;
            }
            if ($class == 1){
                $score ++;
            }

            /*If the score at the end is over 3 correct, which would be 75%
            then it says that they passed. if it is less than 3 which would be 50% or less
            then it says they failed at submission page. */
            if ($score >= 3){
                echo "You passed! Congrats.";
            } elseif($score < 3){
                echo "You failed. try again -->";
            } else {
                echo "Submission. Failed.";
            }



        
            
        ?>

            
        
        
        <a href="homeworkfour.php">Return to quiz</a>        
  

    </body>
</html>
