<!DOCTYPE html>
<html lang="en">
<head>
    <script src="js/jq.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/main.js"></script>
    <title>WELCOME! SIGN UP</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-image: url('images/bg.jpg');margin:150px">
        <!-- Sign up form -->
       
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form id="signup">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Create username" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"  required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Create Password"  required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"  required="required"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="Terms_of_Service.html" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <a class="form-submit" id="btn">REGISTER</a>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/ucc.png" alt="sing up image"></figure>
                        <a href="signin.php" class="signup-image-link">Already member</a>
                    </div>
                </div>
            </div>
</body>
<script type="text/javascript">
    $(document).ready(function(){
        $("#btn").on("click",function(){
            if ($("#agree-term").prop("checked")){
                var pass = $("#pass").val();
                var re_pass = $("#re_pass").val();
                
                if (pass != re_pass) {
                    alert("Password Mismatched!");
                }else{
                    form =$('#signup').serialize();
                    $.ajax({
                            url:'transactions/up.php',
                            type:'POST',
                            data: form,
                            dataType:'json',
                            success:function(result){
                                confirm(result);
                                if (result == "Sign Up successfully!") {
                                    window.location.href = 'signin.php';
                                }
                            },
                            error:function(){
                                console.log('error');
                            }
                    });
                }
            }
        });
    });
</script>
</html>
