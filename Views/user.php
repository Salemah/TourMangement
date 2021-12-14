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
    <link rel="stylesheet" href="customers.css">
    <title>UserProfile</title>
</head>

<body>
    <main>
        <div class="main-container">
            <div class="color">
                <div class="profile-pic">
                    <div class="top-pic">
                      <h2>20% sale </h2> <h4> going on Hurry Up!!</h4>
                        
                    </div>
                    <div class="list">
                        <li style="color: black;"> <a  id="info">My Profile </a> </li>
                        <li> <a id="infoPackege">Recent Order </a> </li>
                        <li> <a href="">Recent Tour </a> </li>
                        <li> <a href="">Tour guide </a> </li>
                        
                       
                        

                    </div>
                    <br> <br> <br>
                    <a href="logout.php" class="myButton">Logout</a>  
                        
                   
                </div>
            </div>
            <div class="right-top">
                <div class="top-section">
                    <?php
                     
                     $jsondata=file_get_contents("customerinfo.json");
                     $data=json_decode($jsondata,true);
                     foreach($data['information'] as $b)
                     { ?>

                      <h2> <b> <?php echo "Hey "  ,$row['username'];   ?> </b>   </h2> 

                      <h3> <b> <?php echo   $b['info']; ?> </b>   </h3> 


                    <?php 
                       }

                    ?>

                </div>
                <script src="../jquery.js"></script>
                
                <div id="main">
                <script src="../Controllers/userjquery.js"></script>
                </div>
                <!-- <div class="right-middle">
                
                   
                            <div class="bottomtop-setion"> 
                            
                                
                                <div class="order">
                               
                                    <h1 style="font-family:Comic Sans MS ;">sajek</h1>
                                    <br>
                                    <h4>2 days </h4>
                                    <h5>price-5000tk</h5>
                                    <br>

                                    <button onclick="sajekFunction()" class="myButtonbuy"> buy  </button>  
                                </div>
                                <div class="order">
                                    <h1 style="font-family:Comic Sans MS ;">coxsbazar</h1>
                                    <br>
                                    <h4>4 days and 3 nights</h4>
                                    <h5>price-4000tk</h5>
                                    <br>

                                    <button onclick="coxsbazarFunction()" class="myButtonbuy"> buy </button>  
                                   
                                </div>
                                <div class="order">
                                    <h1 style="font-family:Comic Sans MS;">bandarban </h1>
                                    <br>
                                    <h4>2 days and 3 nights</h4>
                                    <h5>price-5000tk</h5>
                                    <br>

                                    <button onclick="bandarbanFunction()" class="myButtonbuy"> buy  </button>  
                                   
                                </div>
                                <div class="order">
                                    <h1 style="font-family:Comic Sans MS ;" > sylhet</h1>
                                    <br>
                                    <h4>Day trip</h4>
                                    <h5>price-3000tk</h5>
                                    <br>

                                    <button onclick="sylhetFunction()" class="myButtonbuy"> buy  </button>  
                                </div>
                                </div>
                                <div class="order">
                                <center> 
                                    <h1 style="font-family:Comic Sans MS;">Tanguar Haor</h1>
                                    <br>
                                    <h4>2 days and 3 nights</h4>
                                   
                                    <h5>price-7000tk</h5>
                                    <br>

                                   <button onclick="tanguarFunction()" class="myButtonbuy"> buy  </button>      
                                  
                                </div>
                                
                                
                            </div>
                            <br> <br>

                            <center>  <input type="button"  onclick="checkoutFunction()"  class="myButtonbuy" id="button" value="Confirm Purchase">  </center>
                           
                            <center> <div class="thanks"  for="thanks" id="content"> </div></center>
                            <script src="../jquery.js"></script>
                            <div class="userprofile">
                                <script src="../Controllers/adninjquery.js"></script>
                            </div>
                           


                    </div>
                    



                </div> -->
              


            </div>

        </div>
      


    </main>

    <script>

function tanguarFunction() {
  alert("Tanguar haor package successfully added to cart");
}

function coxsbazarFunction() {
  alert("Coxs bazar package successfully added to cart");
}

function sylhetFunction() {
  alert("Sylhet package successfully added to cart");
}

function bandarbanFunction() {
  alert("Bandarban package successfully added to cart");
}
function sajekFunction() {
  alert("Sajek package successfully added to cart");

 

}

</script>

<script>

function checkoutFunction() {


    $('#content').load('thanks.php');


}


</script>

<script type="text/javascript" src="jquery.js"></script>


</body>

</html>



<?php }else{
    header('location: Login.php');
} ?>