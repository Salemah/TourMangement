<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signupp.css">
    <title>Document</title>
</head>
<body>
<div class="signup-box"> <br>
    <h1 style="font-family: Sans-serif ; color: #12044e; font-style: italic ">Sign Up</h1>
    <?php   if (isset($emailerror)) { ?>

<b>  <span style="color: red;">  <?php echo $emailerror ; ?></span>   </b>   <br> <br>

<?php  } ?> 
<form name="signupform" onsubmit="return form()" action="../Controllers/adminadduserdb.php"  method="POST">
<label for="username"></label> 
<input  type=" text" name="username" id="username" placeholder="username" />
<label style="font-family: Sans-serif ; color: #12044e" for="usertype"> Choose your role:</label>
<select name="usertypes">
  <option value="admin">admin</option>
  <option value="customer">customer</option>
  <option value="manager">manager</option>
  <option value="tourguide">tourguide</option>
</select>
<label for="email"></label> 
<input type="email" name="email" id="email" placeholder="Email" />
<label for="userpassword"></label> 
<input type="password" name="userpassword" id="userpassword" placeholder="Password" />
<label for="confirmpassword"></label> 
<input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" />
<label for="submit"></label> 
<input style="margin-top:10px" id="btn" type="submit" name="Submit" value="submit">

</form>

</div>
</body>
</html>