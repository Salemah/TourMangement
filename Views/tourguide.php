<?php
session_start();
include ('header.php');
require_once('../Model/usersmodel.php');
if(isset($_SESSION['flag']))
{
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
    <link rel="stylesheet" href="tourguides.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Document</title>
</head>

<!-- // if($_SESSION['flag'] = true;){ -->


 <body>

    <main>
        <br> <br>
        <div class="main-container">
            <div class="color">
                <div class="profile-pic">
                    <br> <br> <br>
                    <div ">
                       
                    </div>
                    <div class="list">
                        <li> <a href="tourguideprofile.php">My Profile </a> </li>
                        <li> <a href="">Recent Guide </a> </li>
                        <li> <a href="">Total Guide </a> </li>
                        <li> <a href="">Edit Profile </a> </li>
                        <li> <a href="">Tour Packege </a> </li>
                       
                    </div>
                    <br>
                    <button  class="myButton"><a href="logout.php">Logout</a></button>
                </div>
            </div>
            <div class="right-top">
                <div class="top-section">
                    
                <h2 style="color:darkblue;">Hello <?= $row['username'] ?> welcome to tour guide page </h2>

                </div>
                <div class="right-middle">
                    <div class="">
                      <br>
                        <div class="Guide-Data">
                        <h1 style="font-family: arial,"color:darkblue;" id="guide-p">Tour Guide Requests</h1>
                        </div>
                        
                       
                        <div class="guide">
                            
                            <div class="bottom-setion">
                                <div class="order">
                                    <h3>Mr Rahim has requested you for Sylhet tour</h3>
                                    <br> <br> 
                                    <button class="myButton">accept</button>    <button class="myButton">reject</button> 
                                </div>
                                <div class="order">
                                <h3>Mr kabir has requested you for sajek tour</h3>
                                    <br> <br> 
                                    <button class="myButton">accept</button>    <button class="myButton">reject</button> 
                                </div>
                                <div class="order">
                                <h3>Mr Salem has requested you for coxsbazar tour</h3>
                                    <br> <br> 
                                    <button class="myButton">accept</button>    <button class="myButton">reject</button> 
                                </div>

                               

                            </div>
                            <br>

                             <center><button class="myButton">Send your CV to all Clients</button>  <button class="myButton">Request clients to hire you</button></center>
                           

                        </div>


                    </div>



                </div>

            </div>

        </div>
        <!-- rifht site -->



    </main>
</body>

</html>
<?php }else{
    header('location: Login.php');
} ?>