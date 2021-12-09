<?php
session_start();
require_once('../Model/usersmodel.php');

if(isset($_SESSION['flag'])){

    $conn = getConnection();
    $email = $_SESSION['email'];
    $sql = "select * from users where email='$email'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);


    ?>



<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Views/_Userprofile.css">
    <title>Document</title>
</head>



<body>
  <div class="signup-box"> <br>
  <table class="GeneratedTable">
  <thead>
    <tr>
      <th> <h1 id="profile-name">My Profile</h1></th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <h2> <td> <b>Name :</b> <?= $row['username'] ?> </td> </h2> 
    <tr>
    <h2> <td> <b>Id :</b>  <?= $row['id'] ?> </td> </h2> 
    </tr>
    <tr>
    <h2> <td> <b>Email :</b>  <?= $row['email'] ?> </td> </h2> 
    </tr>
    <tr>
      <td> <b> Usertype: </b> Customer</td>
    </tr>
    <tr>
      <td><b>Phone number :</b> 01785555256</td>
    </tr>
    <tr>
      <td> <center> <a href="user.php" class="myButton">Return Back</a> </center></td>
    </tr>
    
  </tbody>
</table>
   
 
          

  </div>

  
  
</body>





<?php }else{
    header('location: Login.php');
} ?>