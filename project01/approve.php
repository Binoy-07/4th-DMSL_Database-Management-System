<?php 
    include 'connection.php';

    $userId = $_REQUEST['userId'];
    $s = "update users set status=1 where id=$userId";
    if(mysqli_query($conn, $s)){
        header('Location: pending_users.php');
    }

?>