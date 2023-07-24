<?php
 include 'connection.php';



$fname = mysqli_real_escape_string($link, $_REQUEST['fname']);
$lname = mysqli_real_escape_string($link, $_REQUEST['lname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$phone = mysqli_real_escape_string($link, $_REQUEST['number']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$confirmpassword = mysqli_real_escape_string($link, $_REQUEST['confirmpassword']);


echo $sql = "INSERT INTO `registration` (`fname`, `lname`, `email`, `number`, `password`, `confirmpassword`) VALUES ('$fname', '$lname', '$email', '$phone', '$password', '$confirmpassword')";

$result = mysqli_query($link, $sql);

if($result)
{
    header('location:user.php');
}
else
 echo " Error" .mysqli_error($link);
  

mysqli_close($link);
 



?>