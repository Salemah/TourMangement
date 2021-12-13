<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sign Up | By Code Info</title>
  <link rel="stylesheet" href="../Views/signupp.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />
  <script src="../controllers/signupvalidator.js"></script>
</head>

<body>
  <div class="signup-box"> <br>
    <h1 style="font-family: Sans-serif ; color: #12044e; font-style: italic ">Sign Up</h1>

    <form name="signupform" onsubmit="return form()" action="../Controllers/signupvalidation.php" method="POST">



      <label for="username"></label> <br> <br>
      <input " type=" text" name="username" id="username" placeholder="username" />
     <center> <small class="validate" id="usernameerror"></small>  </center> 


      <label style="font-family: Sans-serif ; color: #12044e" for="usertype"> Choose your role:</label>
      <select name="usertypes">
        <option value=""></option>
        <option value="admin">admin</option>
        <option value="customer">customer</option>
        <option value="manager">manager</option>
        <option value="tourguide">tourguide</option>
      </select>



      <label for="email"></label> 
      <input type="email" name="email" id="email" placeholder="Email" />
     <center> <small class="validate" id="emailerror"></small></center> 


      <label for="userpassword"></label> 
      <input type="password" name="userpassword" id="userpassword" placeholder="Password" />
     <center><small class="validate" id="userpassworderror"></small></center> 


      <label for="confirmpassword"></label> 
      <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" />
     <center> <small class="validate" id="confirmpassworderror" ></small> </center>


      <label for="submit"></label> 
      <input style="margin-top:10px" id="btn" type="submit" name="Submit" value="submit">




    </form>

  </div>
  <p class="para-2">
    Already have an account? <a href="login.php">Login here</a>
  </p>
</body>

</html>