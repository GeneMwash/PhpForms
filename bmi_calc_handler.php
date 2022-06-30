<?php
//Check if the button has been clicked
if (isset($_GET["c"])){
    //starts receiving data from the form
     $weight =$_GET["w"];
     $height = $_GET["h"];
     //compute teh data
    $BMI =$weight/pow($height,2);
    echo "Hello there, Your BMI is $BMI";
}