<?php
session_start();
session_unset();
session_destroy();
if (isset($_COOKIE['name'])&&isset($_COOKIE['pass'])) {
   $ckbox="checked";
}else{
   $ckbox="";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <p id="session" />
    <script src="js/jq.js"></script>
    <script src="js/jqc.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/main.js"></script>
    <script language="javascript" type="text/javascript">
        window.history.forward();
        window.history.backward();
    </script>
    <title>SIGN IN HERE</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-image: url('images/bg.jpg');margin:150px">
       <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/key.png" alt="sing up image"></figure>
                        <a href="signup.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">LOG IN</h2>
                        <form id="loginform">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Enter your Username" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Enter your Password" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="remember-me" class="agree-term"  <?php echo $ckbox ?> />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <a id="signin" class="form-submit">Log in</a>
                            </div>
                        </form>
                    
                    </div>
                </div>
            </div>
        </section>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            if (Cookies){
                $("#name").val(Cookies.get("name"));
                $("#pass").val(Cookies.get("pass"));
            }
            $("#remember-me").change(function(){
            if ($("#remember-me").prop("checked")){
                var name =  $("#name").val();
                var pass =  $("#pass").val();
                Cookies.set('name',name,{expires:2});
                Cookies.set('pass',pass,{expires:2});
            }else{
               Cookies.remove('name');
               Cookies.remove('pass');
               $("#name").val("");
               $("#pass").val("");
            }
            });
            $("#signin").on("click",function(){
                    form =$('#loginform').serialize();
                    $.ajax({
                            url:'transactions/login.php',
                            type:'POST',
                            data: form,
                            dataType:'json',
                            success:function(result){
                                if (result == "success") {
                                    window.location.href = 'main.php';
                                }else{
                                    alert("User or Password Invalid");
                                }
                            },
                            error:function(){
                                console.log('error');
                            }
                    });
            });
        });
    </script>
</body>
</html>