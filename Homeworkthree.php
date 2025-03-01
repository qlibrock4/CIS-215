<?php
/*
Quinton Librock
qlibrock@genesee.edu

Both "loopsone" take $n and go from 1 to $n listing all evens by starting at 2 and 
counting up by 2 until the loop ends

Both "loopstwo" will take numbers from 1 to 30 that are left with no remainder and echo them in an array.

Arryfunc gives the array function in_array and gives example of how it is used.
*/

/*
Creates an array of even numbers from 1 to a vairable, by counting up by two from two
*/
function forloopsone($n){ //SCOPE $n: Local, only accessible in the function
    $evennums = [];//Makes emtpy array 

    for ($i = 2; $i <= $n; $i += 2){//States i is 2(first even num after 1), when i is less then variable, add 2 after first variable which is 2 
        array_push($evennums, $i);//Adds numbers to end of array
    }
    echo implode(", ", $evennums);//Writes list of numbers
}
//Local variables

forloopsone(19);


//SCOPE: if i stated $n = 15 and used that throughout this file, that would be a global variable since it can be accessed anywhere.
/*
Creates an array of even numbers from 1 to a vairable, by counting up by two from two
*/
function whileloopsone($q){ //SCOPE: $q is local, can only be used in this function
    $i = 2; //States that the vaiable i starts at 2, because it will be first even number
    $evennumbers = []; //Creates empty array
    while ($i <= $q) {
        array_push($evennumbers, $i); //Pushes numbers in loop to end of array
        $i += 2; //Adds 2 to previous even number to get the next even number
    }
    echo implode(", ", $evennumbers); //Print's array and adds commas to make it the list of the numbers
}

//Local variables
whileloopsone(15); //States the $n variable number

//While was easier
/*
Will return the even numbers divisible by two and three from 1 to 30
*/
function forloopstwo(){
    $bytwo = []; //Makes empty array
    for ($i = 1; $i <= 30; $i++){ //$i variable starts at 0, if variable is less than 30 the loop will continute, it will add after each loop?(I can't remember the special word)
        if ($i % 2 == 0){// If there is no remainder when divided by 2 it will be added on to the end of the array
            array_push($bytwo, $i);
        }
    }
    echo implode(", ", $bytwo);
    $bythree = [];
    for ($i = 1; $i <= 30; $i++){ //$i variable starts at 0, if variable is less than 30 the loop will continute, it will add after each loop?(I can't remember the special word)
        if ($i % 3 == 0){// If there is no remainder when divided by 3 it will be added on to the end of the array
            array_push($bythree, $i);
        }
    }
    echo implode(", ", $bythree);
}
//Local variables
forloopstwo();

/*
Will return the even numbers divisible by two and three from 1 to 30

*/
function whileloopstwo(){
    $onetothirty = [];
    $i = 1; //Same thing as the for loop, just different structure
    while ($i <= 30){ //If it's less than 30 while loop will initiate
        if ($i % 2 == 0){
            array_push($onetothirty, $i);
        }
        $i++; //Goes to next number until it reaches 30
    }
    echo implode(", ", $onetothirty);
    $bythreethirty = [];
    while ($i <= 30){ //If it's less than 30 while loop will initiate
        if ($i % 3 == 0){
            array_push($bythreethirty, $i);
        }
        $i++; //Goes to next number until it reaches 30
    }
    echo implode(", ", $bythreethirty);
}
//Local variables
whileloopstwo();

//While loop was easier

/*
array_merge will merge the two arrays together
return will be the arrays together showing each index
*/
function arryfunc(){ 
    $array = array("Time", "Long", "Fortnite");
    $dosarray = array("Minecraft");
    $mix = array_merge($array, $dosarray);
    var_dump($mix);
}
//Local variables
arryfunc();
//SCOPE: Function arryfunc() is global and can be used/called anywhere in the file
?>

