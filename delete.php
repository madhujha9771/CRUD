<?php 

include "connection.php"; 

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM `registration` WHERE `id`='$user_id'";

     $result = $link->query($sql);

     if ($result == TRUE) {

       header('location:user.php');

    }else{

        echo "Error:" . $sql . "<br>" . $link->error;

    }

} 

?>


