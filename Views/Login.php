
<?php
include ('header.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Views/Login.css">
    
    <title>Login</title>
</head>

<body>
    <section  class="cxv" >
     
         <div class="login-body">
            <div class="right-half">
                <img id="logo" src="../Resources/images/logo.png" alt=""><br>
                <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>  <br>  
     	<?php } ?>
                
                    
                <form action="../Controllers/logcheck.php" method="post" >
                <input class="inp" type="text" name="email" id="email" placeholder="email"   >  <br>

                <?php   if (isset($emailerror)) { ?>

                  <span style="color: red;">  <?php echo $emailerror ; ?></span>   <br>  
  
                <?php  } ?> 

                <input class="inp" type="password" name="password" id="password" placeholder="Password" > <br>

                <?php   if (isset($passworderror)) { ?>

                
                    <span style="color: red;"><?php echo $passworderror ; ?></span>  <br>


 
                <?php  } ?> 

                <input type="checkbox" name="chkremember" id="check-box"  > Remember Me


                <a href="" id="Forgot-pass">Forgotten Password?</a><br>
                <input id="sign-in-button" type="submit" name="login" value="Login"> <br>

               <?php   if (isset($loginproblem)) { ?>

                <b>  <span style="color: red;"><?php echo $loginproblem ; ?></span>   </b> <br>   


                <?php  } ?> 
               
     
                </form>
                <p class="sign-up-link">Don't Have an account..? <a href="Signup.php" class="Sign-Up">Sign Up</a> here</p>

            </div>
         </div>
        

    </section>

</body>

</html>