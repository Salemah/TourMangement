<?php
include ('header.php');
require_once('../Model/db.php');
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $conn = getConnection();
    $sql = "delete from users where id={$id}";
    //$sql = "insert into packege( Name, Description, Price) values ('$Name','$Description','$Price')";
    $result = mysqli_query($conn,$sql);
    if($result){
        ?>
        <!-- <script>alert("package successfully added ");</script> -->
        <?php
      header('location:admin.php');
    }
    else{
        echo "failed";
    }
}

?>

