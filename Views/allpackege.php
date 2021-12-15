<?php
include ('header.php');
require_once('../Model/usersmodel.php');
$conn = getConnection();
$q="SELECT * from packege";
$result=$conn->query($q);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="allpackege.css">
    <title>Packege</title>
</head>
<body>
<!-- <div class="right-middle"> -->
                
                   
                <div class="bottom-middle"> 
                    <?php
                    $output='<div class="packge-container"  border="1" width=100%>';
                    if($result->num_rows>0)
                    {
                        while($row=$result->fetch_assoc())
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
                
                    
                  
                    
                    
                <br> <br>

                
                <script src="../jquery.js"></script>
                <div class="userprofile">
                    <script src="../Controllers/adninjquery.js"></script>
               
</body>
</html>