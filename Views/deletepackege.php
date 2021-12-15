<?php
include ('header.php');
require_once('../Model/db.php');
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $conn = getConnection();
    $sql = "delete from packege where id={$id}";

    $result = mysqli_query($conn,$sql);
    if($result){
        ?>
        <!--  -->
        <?php
      header('location:admin.php');
      ?>
      <script>alert("package successfully deleted ");</script><?php
    }
    else{
        echo "failed";
    }
}?>