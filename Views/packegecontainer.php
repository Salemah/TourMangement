<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="packegebox.css">
    <title>Document</title>
</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="tourmanagement";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
	$q="SELECT * from packege";
	$result=$conn->query($q);
    
    
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
                    </div>
			       ";
		}
		$output.='</div>';
	}
	else
		echo "O results";
	
	
}
$conn->close();
echo $output;
?>

</body>
</html>