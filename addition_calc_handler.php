<?php
//Check if the button has been clicked using the method on the form
if(isset($_GET["z"])){
    //start receiving data from form
    $firstNumber =$_GET["x"];
    $SecondNumber =$_GET["y"];
    //Compute
    $answer =$firstNumber + $SecondNumber;
        echo "Hello there your answer is$answer";


}