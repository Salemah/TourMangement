<?php
session_start();
include ('header.php');
require_once('../Model/usersmodel.php');
//require_once('../Controllers/ajax.js');
if(isset($_SESSION['flag'])){
    $conn = getConnection();
    $email = $_SESSION['email'];
    $sql = "select * from users where email='$email'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $rr = "select id from users order by id";
    $query_run = mysqli_query($conn, $rr );
    $rows = mysqli_num_rows($query_run);
    $packgecount = "select id from packege order by id";
    $packge_query_run = mysqli_query($conn, $packgecount);
    $packgerows = mysqli_num_rows($packge_query_run);
    
    
     

                        
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminh.css">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Admin</title>
</head>

<body>
    <main>
        <div class="Main-container">
            <div class="left">

                <div class="img-head">
                    <div class="left-admin">
                        <img id="imgs" src="../Resources/images/travel.jpg" alt="">
                    </div>
                    <div class="right-admin">
                        <p><?= $row['username'] ?></p>
                       <p> <?php 
                        echo $_SESSION['email'];
                        ?></p>
        

                    </div>

                </div>
                <div class=" list-item ">
                    <button id="dashboard">Dashboard</button><br>
                    <button id="load">Users</button><br>
                    <button  id="packege">Packeges</button><br>
                    <button id="profile">My Profile</button><br>
                    <button id="updateprofile">Update Profile</button><br>
                    <button  id="logout-button"><a href="logout.php">Logout</a></button>
                 </div>
            </div>
            <div class="right-dashboard">
                <h2> <i class="fas fa-home"></i> Dashboard</h2>
               <div class="">
               <?php
                     
                     $jsondata=file_get_contents("customerinfo.json");
                     $data=json_decode($jsondata,true);
                     foreach($data['admin'] as $b)
                     { ?>

                      <h2> <b> <?php echo "Hey "  ,$row['username'];   ?> </b>   </h2> 

                      <h3> <b> <?php echo   $b['info']; ?> </b>   </h3> 


                    <?php 
                       }

                    ?>
               </div>
                <div class="image-box">
                    <div class="first-box" id="s1">
                        <p>TotalCustomer</p>
                        <h1>Person: <?= ' '.$rows.''?> </h1>
                        <h3>Increased By 60%</h3>
                    </div>
                    <div class="first-box"id="s2">
                        <p>TotalPackege</p>
                        <h1>Packege:<?= ' '.$packgerows.''?></h1>
                        <h3>Increased By 60%</h3>
                    </div>
                    <div class="first-box"id="s3">
                        <p>Total Sale</p>
                        <h1>Total Sale:$500</h1>
                        <h3>Increased By 20%</h3>
                    </div>
                  
                     
        
                </div>
                
                <br>
                <hr>
               <script src="../jquery.js"></script>
                
                <div id="main">
                <script src="../Controllers/adminjqueryy.js"></script>
                </div>
               </div>

        </div>

      
    </main>
    
</body>

</html>
<?php }else{
    header('location: Login.php');
} ?>