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
<style>

.box{
	 background-color: #686868;
	margin-bottom: 30px;
	color: white; 
	border-radius: 110px;
	padding: 20px;
  width: 600px;

}

.box:hover{
	box-shadow: 5px 5px 5px blue; 
	padding: 20px;
}

.box1{
   background-color: #686868;
	margin-bottom: 20px;
margin-left: 150px;
	padding: 10px; 
	color: white;  
	border-radius: 100px;
  width: 600px;
}

.box1:hover{
	box-shadow: 5px 5px 5px orange;
	padding: 20px;
}
.box2{
 background-color: #686868;
	margin-bottom: 20px;
margin-left: 150px;
	padding: 10px; 
	color: green; 
	border-radius: 100px

}

.box2:hover{
	box-shadow: 5px 5px 5px red;
	padding: 30px;
}
</style>


</head>
<body style="background-image: url('images/bg.jpg');margin:150px" align="center">
<section class="sign-in">
            <div class="container">
                <div class="signin-content">
                	
                    <div align="center">
                    <div class="form-body">
			    <div>
			    	<h1 style="text-align: center;"> BSIT 4B Tutorial</h1>
			    </div>
	
			<div class="box1">
			    <h1 style="">" O R A C L E "</h1>
                        <video width="450" controls=""><source src="images/Basics of Oracle.mp4" type="video/mp4">
                        </video>
			</div>	
			<div class="box1">			
 			    <h1>" P O S T G R E "</h1>
                        <video width="400" controls><source src="images/PostGreSql.mp4" type="video/mp4">
                        </video>
			</div>	
			<div class="box2">	
			    <h1>" S Q L I T E "</h1>
                        <video width="400" controls>
                          <source src="images/SQLites.mp4" type="video/mp4">
                        </video>
                   
			</div>
				    </div>                 
                    </div>
                </div>
            <div class="form-footer" style="border-top: dotted;" align="right">
                    	 <button id="myBtn" style="background-color: #008CBA;; padding: 15px 32px; " >Logout</button>

                       
                        <div id="myModal" class="modal">

                         
                          <div class="modal-content">
                            <span class="close">&times;</span>
                            <center>
                            <p>Are you sure?</p>
                            <button id="btn" class="form-submit" style="margin: 20px">CONFIRM</button>
                            </center>
                          </div>

                        </div>
                        <style type="text/css">
                            
 

                        .modal {
                          display: none; 
                          position: fixed; 
                          z-index: 1; 
                          left: 0;
                          top: 0;
                          width: 100%; 
                          height: 100%; 
                          overflow: auto; 
                          background-color: rgb(0,0,0); 
                          background-color: rgba(0,0,0,0.4); 
                        }

                       
                        .modal-content {
                          background-color: #fefefe;
                          margin: 15% auto; 
                          padding: 20px;
                          border: 1px solid #888;
                          width: 80%; 
                        }

                        
                        .close {
                          color: #aaa;
                          float: right;
                          font-size: 28px;
                          font-weight: bold;
                        }

                        .close:hover,
                        .close:focus {
                          color: black;
                          text-decoration: none;
                          cursor: pointer;
                        }
                                                </style>
                        <script>
                       
                        var modal = document.getElementById("myModal");

                      
                        var btn = document.getElementById("myBtn");

                        
                        var span = document.getElementsByClassName("close")[0];

                       
                        btn.onclick = function() {
                          modal.style.display = "block";
                        }

                       
                        span.onclick = function() {
                          modal.style.display = "none";
                        }

                        
                        window.onclick = function(event) {
                          if (event.target == modal) {
                            modal.style.display = "none";
                          }
                        }
                        </script>
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
