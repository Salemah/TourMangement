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
    <form action="updateeprofilee.php" method="POST" >
    <h1 id="profile-name">My Profile</h1>
    <input type="text" name="name" placeholder="name" value="<?= $row['username'] ?>"><br>
    <input type="text" name="email" placeholder="email" value="<?= $row['email'] ?>"><br>
    <input type="text" name="id" placeholder="email" value="<?= $row['id'] ?>"><br>
    <input type="password" name="password" placeholder="email" value="<?= $row['userpassword'] ?>"><br>
    <button class="myButton" type="submit" name="submit">Update</button>
    </form>
   
  
</body>
<?php }else{
    header('location: Login.php');
} ?>