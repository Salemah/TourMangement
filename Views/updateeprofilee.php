<?php

require_once('../Model/db.php');

if(isset($_POST['submit'])){

  $Name = $_POST['name'];
  $id= $_POST['id'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $conn = getConnection();
  $sql = "update `users` SET `id`='$id',`username`='$Name',`email`='$email',`userpassword`='$password ' WHERE id='$id'";
  
  
 // $sql = "update users set( username, email, userpassword) values ('$Name','$email','$password') where id='{$id}'";
 $result = mysqli_query($conn,$sql);
if($result)
{
    ?>


<script>alert("user successfully updated ");</script>
  <?php
  
  //header('location:admin.php');
}
else{
  die(mysqli_error($conn));
}


}
?>