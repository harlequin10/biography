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
    <title>Login Form</title>
</head>
<body>
    <div class="wrapper">
        <h1 class="title">Login</h1>
        <form action="controller/loginregister/loginp.php" method="post">
            <label for="">Username</label>
            <input type="text" class="form" name="name" autocomplete="off" required>
            <label for="">Password</label>
            <input type="password" class="form" name="pass" required>
            <table>
                <tr>
                    <h4>Don't Have an Account? Click Here <a href="register.php">Register</a></h4>
                    <th><input type="submit" class="input-btn green" value="login"></th>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>