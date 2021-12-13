<?php
session_start();
include ('header.php');
require_once('../Model/usersmodel.php');
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
    <link rel="stylesheet" href="adminn.css">
    <link rel="stylesheet" href="btton test.css">
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
                    <button>Packeges</button><br>
                    <button>Accounts</button><br>
                    <button id="logout-button"><a href="logout.php">Logout</a></button>
                 </div>
            </div>
            <div class="right-dashboard">
                <h2> <i class="fas fa-home"></i> Dashboard</h2>
                <div class="image-box">
                    <div class="first-box" id="s1">
                        <p>TotalCustomer</p>
                        <h1>Person:</h1>
                        <h3>Increased By 60%</h3>
                    </div>
                    <div class="first-box"id="s2">
                        <p>TotalPackege</p>
                        <h1>Packege:8</h1>
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

                
                <!-- <div class="">
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>Packege</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sajek</td>
                                <td>6000</td>
                                <td>Active</td>
                                <td> <button class="btn">Update</button></td>

                            </tr>
                            <tr class="active-row">
                                <td>Tanguarek</td>
                                <td>6000</td>
                                <td>Active</td>
                                <td> <button class="btn">Update</button></td>
                            </tr>
                            <tr class="active-row">
                                <td>Sajek</td>
                                <td>6000</td>
                                <td>Active</td>
                                <td> <button class="btn">Update</button></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div> -->
                <script src="../jquery.js"></script>
                <div id="main">
                <script>
                       $(document).ready(function(){
			             $("#load").on("click",function(e){
                            $("#main").show();
				        $.ajax({  
				        	url:"userdata.php",
					        type:"POST",
					        success:function(data){
						    $("#main").html(data);
					}
				});
			});
		});
                </script>
                </div>
                <!-- dashboard -->
                <div id="main">
                <script>
                       $(document).ready(function(){
			             $("#dashboard").on("click",function(e){
                            $("#main").hide();
				//         $.ajax({  
				//         	url:"userdata.php",
				// 	        type:"POST",
				// 	        success:function(data){
				// 		    $("#main").html(data);
				// 	}
				// });
			});
		});
                </script>
                </div>





            </div>

        </div>

      
    </main>
    
</body>

</html>
<?php }else{
    header('location: Login.php');
} ?>