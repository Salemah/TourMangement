<?php

require_once('../Model/db.php');

if(isset($_POST['submit'])){

  $Name = $_POST['username'];
  $Description = $_POST['description'];
  $Price = $_POST['price'];
  
  
  $conn = getConnection();
  $sql = "insert into packege( Name, Description, Price) values ('$Name','$Description','$Price')";
 $result = mysqli_query($conn,$sql);
if($result)
{?>


<script>alert("package successfully added ");</script>
  <?php
  
  header('location:admin.php');
}
else{
  die(mysqli_error($conn));
}


}
?>