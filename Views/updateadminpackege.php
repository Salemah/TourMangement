<?php
session_start();
include ('header.php');
require_once('../Model/usersmodel.php');

if(isset($_GET['updateid'])){

    $conn = getConnection();
    $id = $_GET['updateid'];
    $sql = "select * from packege where Id='$id'";
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
    <form name="signupform" action="updatdpackgeDBB.php"  method="POST" >
    <h1 id="profile-name">Update Packege</h1>
    <input type="text" name="name" placeholder="name" value="<?= $row['Name'] ?>"><br>
    <input type="text" name="description" placeholder="description" value="<?= $row['Description'] ?>"><br>
    <input type="text" name="id" placeholder="id" value="<?= $row['Id'] ?>"><br>
    <input type="text" name="price" placeholder="price" value="<?= $row['Price'] ?>"><br>
    <button class="update-button" type="submit" name="submit">Update</button>
    </form>
    </div>
  
</body>
<?php 
}
else{
    header('location: Login.php');
}?>