<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="ajaxx.css">
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
	$q="SELECT * from users";
	$result=$conn->query($q);
	$output='<table class="styled-table"  border="1" width=100%><tr><th >ID</th><th>UerName</th><th>Email</th><th>Action</th></</tr>';
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{

			
			$output.= "<tr><td>{$row["id"]}</td>
			        <td>{$row["username"]}</td>
			        <td>{$row["email"]}</td>
			        <td><button ><a href='deleteuser.php?deleteid={$row["id"]}'>Delete</a></button>
			        <button ><a href='edituser.php?editid={$row["id"]}'>Edit</a></button></td>
			       
			        </tr>";
		}
		$output.='</table>';
	}
	else
		echo "O results";
	
	
}
$conn->close();
echo $output;
?>

</body>
</html>