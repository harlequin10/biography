<?php 

session_start();
if( isset($_SESSION['id_u']) ){
    header("Location: account/dashboard.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/webstyling.css">
    <title>Register Form</title>
</head>
<body>
    <div class="wrapper">
        <h1 class="title">Register</h1>
        <form action="controller/loginregister/regp.php" method="post">
            <label for="">Username</label>
            <input type="text" class="form" name="name" autocomplete="off" required>
            <label for="">Password</label>
            <input type="password" class="form" name="pass" required>
            <label for="">Confirm Password</label>
            <input type="password" class="form" name="pass2" required>
            <table>
                <tr>
                    <h4>Have an Account? Click Here <a href="index.php">Login</a></h4>
                    <th><input type="submit" class="input-btn green" value="Register"></th>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>