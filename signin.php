<?php
include('conn.php');
$err_msg ="";


if(isset($_POST['signin']))
{
  $name = $_POST['your_name'];
  $pass = $_POST['your_pass'];
  $pass = md5($pass);
  
 
  $check = "SELECT * FROM signup Where username='$name' ";
    if($rs=$conn->query($check)){
      if($rs->num_rows<1){
                echo '<script>alert("Username doesnt  exist")</script>';
             

                          }
                                
    else
        {
            if($row=$rs->fetch_assoc())
            {
              $dbpass=$row['password'];

              if( $dbpass ==$pass)
              {
                
                echo '<script>alert("Log in successfully")</script>';
               // header("Location:index.php");

              
              }
              else
              {
                echo '<script>alert("Password Mismatched")</script>';
              
                


                   
              }
              
            }
        }
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
    <title>SIGN IN HERE</title>

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
  color: orange;
}

a:active {
  color: yellow;
} 
</style>
</head>
   
<body>

    <div class="main" style="background-color: #F99923">

    

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container" style="background-color: #DBCDCD"    >
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/loginuser.png" alt="sing up image"></figure>
                        <a href="signup.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">LOG IN</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Enter your Username" required/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Enter your Password" required />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" required="" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" style="background-color: #06880A"/>
                            </div>
                        </form>
                     
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
