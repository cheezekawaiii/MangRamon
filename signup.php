<?php
include('conn.php');
$err_msg ="";


//Add Data
if(isset($_POST['signup']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['pass'];
  $confirmpass = $_POST['re_pass'];

  if ($password == $confirmpass){ 

    if ($name =='' && $email == '' && $password=='' && $confirmpass =='' ) 
    {

           echo '<script>alert("Incomplete Data")</script>';
           // $err_msg = 'Incomplete Data';
    }
     
    else 
    {
        $check = "SELECT * FROM signup Where username='$name' ";
    if($rs=$conn->query($check)){
      if($rs->num_rows>=1){
        //header( 'Location: register.php');

        echo '<script>alert("Username already exist")</script>';
        //$err_msg = 'Username already exist';
            
                         }

                            


 else {
 $sql="INSERT INTO signup SET
 username = '$name',
 email = '$email',
 password = '".md5($password)."'";
 
 if($rs=$conn->query($sql))
    {
        echo '<script>alert("Success")</script>';
        
    }
                            }
         } 

    }}else{

     echo '<script>alert(" Password Mismatched")</script>';
   
                
    }
}

//END

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WELCOME! SIGN UP</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
  <style>
a:link {
  color: green;
}
a:visited {
  color: green;
}
a:hover {
  color: red;
}
a:active {
  color: yellow;
} 
</style>
</head>
<body>

    <div class="main" style="background-color: #808080">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Create username"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Create Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/ucc.png" alt="sing up image"></figure>
                        <a href="signin.php" class="signup-image-link">Already member</a>
                    </div>
                </div>
            </div>
        </section>

        

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
