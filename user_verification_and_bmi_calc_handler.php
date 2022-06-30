<?php
/// check
/// if the button has been clicked
if (isset($_POST["btn_calc"])){
    // start receiving data from form
    $email = $_POST["u_mail"];
    $password = $_POST["u_pass"];
    $weight = $_POST["u_weight"];
    $height = $_POST["u_height"];
    // Check if thr email and password is correct before
    // Calculate the bmi
    if ($email == "emobilis@gmail.com" && $password == "emobilis@123"){
        //proceed to calculate bmi
        $bmi = $weight / pow($height,2);
        echo "Hello,your BMI is $bmi";
    }else{
        echo "Wrong email or password";
    }
}