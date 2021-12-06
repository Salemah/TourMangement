<?php
include('../controllers/signupjson.php');

?>


<?php
session_start();
require_once('../Model/usersmodel.php');

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $userpassword = $_POST['userpassword'];
    $confirmpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertypes']; 
}


    ?>
    
<script>
    if(        (usernameerror ||
            emailerror ||
            userpassworderror ||
            confirmpassworderror) == false) {
</script>
    <?php

            $conn = getConnection();
                $userinfo = [
                    'username' => $username,
                    'email' => $email,
                    'userpassword' => $userpassword,
                    'confirmpassword' => $confirmpassword,
                    'usertypes' => $usertype
                ];
            
                $status = insertUser($userinfo);
                if($status){
                    header('location: ../Views/Login.php');
                }else{
                    echo "failed to insert!";
                       }
            
      
?>

<script>
                    }
</script>