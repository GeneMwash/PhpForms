<?php
// check that button is clicked
if (isset($_GET["c"])){
    // start to compute the volume of a cylinder
    // volume = pi *radius*radius * Height
    $radius =$_GET["r"];
    $height =$_GET["h"];
    // compute
    $volume = pi()* pow($radius,2) * $height;

}
if (isset($_GET["c-2"])){
    // start to compute the volume of a cylinder
    // volume = pi *radius*radius * Height
    $radius =$_GET["r-2"];
    $height =$_GET["h-2"];
    // compute
    $volume2 = pi()* pow($radius,2) * $height;

}

if ($volume > $volume2 ){
    echo "Cylinder 1 is greater than Cylinder 2, Whose value is $volume";
}else{
    echo "Cylinder 2 is graeter than Cylinder 1, Whose value is $volume2";
}