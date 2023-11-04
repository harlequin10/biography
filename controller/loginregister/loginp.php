<?php

session_start();
include '../connect.php';

$username = $_POST['name'];
$password = $_POST['pass'];

$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

if(mysqli_num_rows($result) === 1 ){
    $row = mysqli_fetch_array($result);
    if($password !== $row['password']){
        echo '<script type="text/javascript">
            alert("Incorrect Password")
            window.location="../../index.php"
            </script>';

        return false;
    }

    if($password == $row['password']){
        $_SESSION['id_u'] = $row['id_user'];
    }

    echo '<script type="text/javascript">
            alert("Login Success")
            window.location="../../account/dashboard.php"
            </script>';
}else{
    echo '<script type="text/javascript">
            alert("Username do not exist ")
            window.location="../../index.php"
            </script>';
}

?>