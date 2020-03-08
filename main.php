<?php
session_start();
if(isset($_SESSION["user"])&&isset($_SESSION["pass"])){
?>
<!DOCTYPE html>
<html>
<head>
<script src="js/jq.js"></script>
<script src="js/jqc.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<script src="js/main.js"></script>
	<title>Main Page</title>
<!-- Font Icon -->
<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-image: url('images/bg.jpg');margin:150px" align="center">
<section class="sign-in">
            <div class="container">
                <div class="signin-content">
                	
                    <div align="center">
                    <div class="form-body">
			    <h1>Oracle</h1>
                        <a href="https://www.youtube.com/watch?v=4YyDsjLJw1k&feature=youtu.be"><img src="images/oracle.png" style="width: 40%"></a>
			    <h1>Postgre</h1>
                        <a href="https://www.youtube.com/watch?v=DPUk8g-hyRk&feature=youtu.be"><img src="images/postgre.png" style="width: 40%"></a>
			    <h1>sqlite</h1>
                        <a href="https://youtu.be/rUSzGyfQibU"><img src="images/sqlite.png" style="width: 40%"></a>
                    </div>                 
                    </div>
                </div>
            <div class="form-footer" style="border-top: dotted;" align="right">
                    	<button id="btn" class="form-submit" style="margin: 20px">Log out</button>
            </div> 
            </div>
        </section>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$('#btn').on("click",function(){
			window.location.href = "transactions/logout.php";
		});
	});
</script>
</html>
<?php
}else{
	header("location:signin.php");
}
?>
