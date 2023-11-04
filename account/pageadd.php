<?php 

session_start();
if( !isset($_SESSION['id_u']) ){
    header("Location: ../index.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/webstyling.css">
    <title>Add Biography</title>
</head>
<body>
    <div class="wrapper">
        <h1 class="title">Add Biography</h1>
        <form action="../controller/add.php" method="post">
            <label for="">Name</label>
            <input type="text" class="form" name="name" autocomplete="off" required>
            <label for="">Biography</label>
            <textarea name="bio" class="bio" required></textarea>
            <table>
                <tr>
                    <th><button class="red btn"><a href="dashboard.php">Back</a></button></th>
                    <th><input type="submit" class="green input-btn" value="Add"></th>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>