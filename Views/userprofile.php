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
   
  <table class="GeneratedTable">
  <thead>
    <tr>
      <th> <h1 id="profile-name">My Profile</h1></th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <h2> <td> Name : <?= $row['username'] ?> </td> </h2> 
    <tr>
    <h2> <td> Id :  <?= $row['id'] ?> </td> </h2> 
    </tr>
    <tr>
    <h2> <td> Email :  <?= $row['email'] ?> </td> </h2> 
    </tr>
    <tr>
      <td>  Usertype:  <?= $row['usertype'] ?></td>
    </tr>
    <tr>
      <td>Phone number : 01785555256</td>
    </tr>
   
        
    
  </tbody>
  
</table>
<a href="<?= $row['usertype'] ?>.php" class="myButton">Return Back</a>
</body>
<?php }else{
    header('location: Login.php');
} ?>