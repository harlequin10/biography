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
    <title>Read</title>
</head>
<body>
    <?php 
    $id_user = $_SESSION['id_u'];
    $idpage = $_GET['id'];
    include '../controller/connect.php';

    $data = mysqli_query($conn, "SELECT * FROM biography WHERE id_user = '$id_user' AND id = '$idpage'");

    while($result=mysqli_fetch_array($data)){ ?>
    
    <div class="box-read">
        <h4>Biography of <?php echo $result['name'] ?></h4>
        <div class="read">
            <p>
                <?php echo $result['biography']; ?>
            </p>
        </div>
        <p> 
            ID Bio : <?php echo $result['id']; ?>
        </p>
        <button class="green btn">
            <a href="dashboard.php">Back</a>
        </button>
    </div>



    <?php
    }
    ?>
</body>
</html>