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
    $q="SELECT * from packege";
    $resultt=$conn->query($q);


    ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="customerts.css">
    <link rel="stylesheet" href="userPackege.css">
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
                        <li> <a id="infoPackege">Packege </a> </li>
                        <li> <a id="recenttour">Recent Tour </a> </li>
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

                <div class="bottom-middle"> 
                    <?php
                    $output='<div class="packge-container"  border="1" width=100%>';
                    if($resultt->num_rows>0)
                    {
                        while($row=$resultt->fetch_assoc())
                        {
                            $output.= "
                                    <div>
                                    <h1>{$row["Name"]}</h1>
                                    <p>{$row["Description"]}</p>
                                    <p>{$row["Price"]}</p>
                                    </div>";
                        }
                        $output.='</div>';
                    }
                    else
                        echo "O results";
                        $conn->close();
                        echo $output;
                        ?>      
                
                
                </div>
                <div id="main">


                <script src="../Controllers/usersjquery.js"></script>
                </div>
            
               
              


            </div>

        </div>
      


    </main>

    <script>

function tanguarFunction() {
  alert("Tanguar haor package successfully added to cart");
}

function coxsbazarFunction() {
    
  alert("package successfully added to cart");
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