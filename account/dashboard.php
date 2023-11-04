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
    <title>Dashboard</title>
</head>
<body>
    <h2 class="mg-lf-20">The Biography</h2>
    <button class="btn red mg-lf-20"><a href="../controller/loginregister/logout.php">Logout</a></button>
    
   



    <div class="wrapper-grid">
    <?php 
    $id_user = $_SESSION['id_u'];
    include '../controller/connect.php';

    $data = mysqli_query($conn, "SELECT * FROM biography WHERE id_user = '$id_user'");

    while($result=mysqli_fetch_array($data)){ ?>
    
    <div class="box">
        <div class="text-title"> <h4>Biography of <?php echo $result['name'] ?></h4> </div>
        <div class="thebio">
            <p>
                <?php echo $result['biography']; ?>
            </p>
        </div>
        <p> 
            ID Bio : <?php echo $result['id']; ?>
        </p>
        <button class="btn green">
            <a href="pageread.php?id=<?php echo $result['id'] ?> ">Read</a>
        </button>
        <button class="btn blue">
            <a href="pageedit.php?id=<?php echo $result['id'] ?> ">Edit</a>
        </button>
        <button class="btn red">
            <a href="../controller/delete.php?id=<?php echo $result['id'] ?> ">Delete</a>
        </button>
    </div>



    <?php
    }
    ?>

    <div class="box add-box">
        <div class="add-txt">
            <h4>Add Biography</h4>
            <button class="btn green">
                <a href="pageadd.php">Add</a>
            </button>
        </div>
    </div>

    </div>

    <?php
$data = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id_user'");

while($db=mysqli_fetch_array($data)){
echo 'Welcome ';
echo $db['username'];
}
?>
</body>

</html>