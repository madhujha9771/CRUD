<?php 
  include 'connection.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <button class ="btn btn-primary my-5"><a href="formvalidation.html" class="text-light">Add user</a>
      </button>

      <table class="table">
  <thead>
    <tr>
      <th scope="col">Serial no.</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">email id</th>
      <th scope="col">Mob no.</th>
      <th scope="col">Operations</th>


    </tr>
  </thead>
  <tbody>
    <?php 
      $sql= "SELECT * FROM `registration` ";
      $result=mysqli_query($link,$sql);
      if($result)
      {
        $i=1;
        while($row=mysqli_fetch_assoc($result)){
          $id=$row['id'];
          $fname=$row['fname'];
          $lname=$row['lname'];
          $email=$row['email'];
          $mobile=$row['number'];
        ?>
           <tr>
      <th scope="row"><?php echo $i;?></th>
      <td><?php echo $fname;?></td>
      <td><?php echo $lname;?></td>
      <td><?php echo $email;?></td>
      <td><?php echo $mobile;?></td>
      <td>
          
          <button class ="btn btn-primary m"><a href="update.php?id=<?php echo $id;?>" class="text-light">Update</a>
      </button>

      <button class ="btn btn-primary m"><a href="delete.php?id=<?php echo $id;?>" class="text-light">Delete</a>
      </button>
          
        </td>
    </tr> 
      <?php
      

      $i++;
        }
      }


    ?>

  </tbody>
</table>
    </div>

 
  </body>
</html>