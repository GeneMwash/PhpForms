<?php
// CHeck mif button is clicked

if (isset($_GET["c"])){
    //start by receiving data
    //formula is p*R*T/100
    $principle =$_GET["p"];
    $year = $_GET["y"];
    $rate = 8.6;
    $simpleinterest = $principle*$rate/100*$year;
        echo "Hello Customer your total annual simple interest is $simpleinterest";
}