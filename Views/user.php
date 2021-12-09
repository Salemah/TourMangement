<?php
session_start();
require_once('../Model/usersmodel.php');
include ('header.php');
if(isset($_SESSION['flag'])){

    $conn = getConnection();
    $email = $_SESSION['email'];
    $sql = "select * from users where email='$email'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);


    ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="users.css">
    <title>UserProfile</title>
</head>

<body>
    <main>
        <div class="main-container">
            <div class="color">
                <div class="profile-pic">
                    <div class="top-pic">
                        <img src="images/pro.jpg" alt="">
                        
                    </div>
                    <div class="list">
                        <li> <a href="userprofile.php">My Profile </a> </li>
                        <li> <a href="">Recent Order </a> </li>
                        <li> <a href="">Recent Tour </a> </li>
                        <li> <a href="">Edit Profile </a> </li>
                        

                    </div>
                    <br> <br> <br> <br> <br>
                    <button id="logout-button"> <a href="logout.php"> <b> Logout</b> </a></button>
                </div>
            </div>
            <div class="right-top">
                <div class="top-section">
                    <?php
                     
                     $jsondata=file_get_contents("customerinfo.json");
                     $data=json_decode($jsondata,true);
                     foreach($data['information'] as $b)
                     { ?>

                      <h1> <b> <?php echo $b['info']; ?> </b>   </h1> 

                    <?php 
                       }

                    ?>

                </div>
                <div class="right-middle">
                    
                   
                            <div class="bottomtop-setion"> 
                                
                                <div class="order">
                                
                                    <h1>sajek</h1>
                                    <br>
                                    <br>
                                    <br>
                                    <button id="logout-button"> <a href="logout.php"> <b> Buy</b> </a></button>
                                   
                                </div>
                                <div class="order">
                                    <h1>coxsbazar</h1>
                                    <br>
                                    <br>
                                    <br>
                                    <button id="logout-button"> <a href="logout.php"> <b> Buy</b> </a></button>
                                   
                                </div>
                                <div class="order">
                                    <h1>bandarban </h1>
                                    <br>
                                    <br>
                                    <br>
                                    <button id="logout-button"> <a href="logout.php"> <b> Buy</b> </a></button>
                                   
                                </div>
                                <div class="order">
                                    <h1>sylhet</h1>
                                    <br>
                                    <br>
                                    <br>
                                    <button id="logout-button"> <a href="logout.php"> <b> Buy</b> </a></button>
                                   
                                </div>
                                </div>
                                <div class="order">
                                    <h1>sylhet</h1>
                                    <br>
                                    <br>
                                    <br>
                                    <button id="logout-button"> <a href="logout.php"> <b> Buy</b> </a></button>
                                   
                                </div>
                                
                            </div>

                           
                        </div>



                    </div>



                </div>

            </div>

        </div>
        <!-- rifht site -->
        <div class="">


        </div>


    </main>
</body>

</html>
<?php }else{
    header('location: Login.php');
} ?>