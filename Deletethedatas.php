<?php
// Include the database configuration file
include 'dbConection.php';

if(isset($_GET['Delete_id'])){
    $id = $_GET['Delete_id'];
    $sql = "DELETE FROM users WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "User deleted successfully";
        header('Location: ../Mainpage.php');
    }else{
        die(mysqli_error($conn));
    }
}


?>