<?php

require_once('../Model/usersmodel.php');
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $Name = $_POST['username'];
    $email = $_POST['email'];
    $userpassword = $_POST['userpassword'];
    $usertype = $_POST['usertype'];
    
   

    $conn = getConnection();

    $sql = "update users set id='$id',username='$Name',email='$email',userpassword='$userpassword ',usertype='$usertype ' WHERE id='$id'";
    $result = mysqli_query($conn,$sql);
    //$row = mysqli_fetch_assoc($result);
    if($result)
{
    ?>


<script>alert("user successfully updated ");</script>
  <?php
  
//   header('location:admin.php');
}
else{
  die(mysqli_error($conn));
}



}
else{
    header('location: Login.php');
}?>