<?php
session_start();
include ('header.php');
require_once('../Model/usersmodel.php');

if(isset($_GET['editid'])){

    $conn = getConnection();
    $id = $_GET['editid'];
    $sql = "select * from users where Id='$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
?>

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="updateadminpackegee.css" />
    <title>Document</title>
</head>
<body>
    <div class="signup-box"> <br>
    <form name="signupform" action="edituserdb.php"  method="POST" >
    <h1 id="profile-name">Update User</h1>
    <input type="text" name="username" placeholder="name" value="<?= $row['username'] ?>"><br>
    <input type="text" name="email" placeholder="email" value="<?= $row['email'] ?>"><br>
    <input type="text" name="id" placeholder="id" value="<?= $row['id'] ?>"><br>
    <input type="text" name="userpassword" placeholder="password" value="<?= $row['userpassword'] ?>"><br>
    <input type="text" name="usertype" placeholder="usertype" value="<?= $row['usertype'] ?>"><br>
    <button class="update-button" type="submit" name="submit">Update</button>
    </form>
    </div>
  
</body>
<?php 
}
else{
    header('location: Login.php');
}?>