


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ajax.css">
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
    
    
	$output='<table class="styled-table"  border="1" width=100%><tr><th >Name</th><th>Description</th><th>Price</th></tr>';
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$output.= "<tr>
			        <td>{$row["Name"]}</td>
			        <td>{$row["Description"]}</td>
			        <td>{$row["Price"]}</td>
					
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