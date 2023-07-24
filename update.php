


<?php 

include "connection.php";

    if (isset($_POST['update'])) {

        $firstname = $_POST['fname'];

        $lastname = $_POST['lname'];

        $email = $_POST['email'];

        $sql = "UPDATE `registration` SET `fname`='$firstname',`lname`='$lastname',`email`='$email',`number` WHERE `id`='$id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $id = $_GET['id']; 

    $sql = "SELECT * FROM `registration` WHERE `id`='$id'";

    $result = $link->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $first_name = $row['fname'];

            $lastname = $row['lname'];

            $email = $row['email'];

            $id = $row['id'];

            $number=$row['number'];

        } 

    ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Validation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

</head>
<body>
<form action="Senddata.php" method="post" id="basic-form">
    <div class="form-group">
        <label for="name">First Name:</label>
        
        <input type="text" class="form-control required" id="name" name="fname" value="<?php echo $first_name; ?>">
    </div>
    <div class="form-group">
        <label for="lname">Last name:</label>
        <input type="text" class="form-control required" id="lname" name="lname" value="<?php echo $lastname;?>">
    </div>

  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control required email" id="email" name="email" value="<?php echo $email; ?>">
  </div>
  <div class="form-group">
    <label for="mobile">Mob number:</label>
    <input type="number" class="form-control required" id="Mob" name="number" value="<?php echo $number; ?>">
  </div>

  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>


<script>
$(document).ready(function() {
$("#basic-form").validate({

});
});
</script>
<?php }
}
?>



</body>
</html>