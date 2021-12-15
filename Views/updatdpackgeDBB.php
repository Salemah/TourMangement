

<?php

session_start();
require_once('../Model/usersmodel.php');
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $Name = $_POST['name'];
    $description = $_POST['description'];
   $price = $_POST['price'];

    $conn = getConnection();

    $sql = "update packege set id='$id',Name='$Name',Description='$description',Price='$price ' WHERE id='$id'";
    $result = mysqli_query($conn,$sql);
    //$row = mysqli_fetch_assoc($result);
    if($result)
{
    ?>


<script>alert("user successfully updated ");</script>
  <?php
  
  header('location:admin.php');
}
else{
  die(mysqli_error($conn));
}



}
else{
    header('location: Login.php');
}?>