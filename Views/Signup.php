<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sign Up | By Code Info</title>
  <link rel="stylesheet" href="../Views/signup.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />
  <script src="../controllers/signupvalidate.js"></script>
</head>

<body>
  <div class="signup-box"> <br>
    <h1 style="font-family: Sans-serif ; color: #12044e; font-style: italic ">Sign Up</h1>

    <form name="signupform" onsubmit="return form()" action="../Controllers/signupvalidation.php" method="POST">



      <label for="username"></label> <br> <br>
      <input " type=" text" name="username" id="username" placeholder="username" />
      <div style="color: red;" id="usernameerror"></div>



      <label style="font-family: Sans-serif ; color: #12044e" for="usertype"> Choose your role:</label>
      <select name="usertypes">
        <option value=""></option>
        <option value="admin">admin</option>
        <option value="customer">customer</option>
        <option value="manager">manager</option>
        <option value="tourguide">tourguide</option>
      </select>



      <label for="email"></label> <br>
      <input type="email" name="email" id="email" placeholder="Email" />
      <div style="color: red;" id="emailerror"></div>


      <label for="userpassword"></label> <br>
      <input type="password" name="userpassword" id="userpassword" placeholder="Password" />
      <div style="color: red;" id="userpassworderror"></div>


      <label for="confirmpassword"></label> <br>
      <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" />
      <div style="color: red"; id="confirmpassworderror" ></div>


      <label for="submit"></label> <br>
      <input style="margin-top:10px" id="btn" type="submit" name="Submit" value="submit">




    </form>

  </div>
  <p class="para-2">
    Already have an account? <a href="login.php">Login here</a>
  </p>
</body>

</html>