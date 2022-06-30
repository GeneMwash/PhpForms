<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | BMI Calc</title>
</head>
<body>
<h1>Welcome to our BMI Calc</h1>
<p>Please use email emobilis@gmail.com and password emobilis@123</p>
<form method="post" action="user_verification_and_bmi_calc_handler.php">
    <input name="u_mail" placeholder="Enter email" type="email"><br><br>
    <input name="u_pass" placeholder="Enter password" type="password"><br><br>
    <input name="u_weight" placeholder="Enter weight" type="text"><br><br>
    <input name="u_height" placeholder="Enter height" type="text"><br><br>
    <input name="btn_calc" value="Calculate" type="submit">
</form>

</body>
</html>
