<?php
session_start();
?>

<?php

$host = "127.0.0.1:3325";  
$user = "root";  
$pass = "";  
$dbname = "usersign";
$conn = mysqli_connect($host, $user, $pass, $dbname) or die("unable to connect database"); 

if(isset($_POST["s"])) 
    {     
            $name = $_POST["name"]; 
            $password = $_POST["Password"]; 

            $q = "select name,password from admin where name='$name' && password='$password'";

            $result = mysqli_query($conn,$q);
            $row = mysqli_num_rows($result);


            if($row == 1) 
            { 
                echo'<script>open("admin_page.php")</script>';
            }
            else
            {
                echo'<script>alert("The username or password are incorrect!")</script>';
            }

    } 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="signinstyle.css">
        <script type="text/javascript" src="validation.js"></script>
</head>
<body>
    <nav class="navi">
                <div class="contain">

<div class="logopart" style="margin-top: 10px ; width=50px";>
      <h2>
      <span>M</span>
      <span>I</span>
      <span>X</span>
      <span>B</span>
      <span>E</span>
      <span>A</span>
      <span>T</span>
      </h2>
			
			</div>
                        <div class="part1">

                                <ul class="ulist">
                                        <ul class="ulist" style="margin-top: 10px">

                                                
                                        </ul>
                                </ul>
                        </div>
                        
                        <div class="part1 flex-container">
                                <div>

                                </div>  
                                <ul class="ulist" style="margin-top: 10px;">
                                        <li class="list"><a href="../register.html" style=" display: flex; align-items: center; ">Register</a></li>
                                </ul>                           
                        </div>
                </div>
        </nav>

    
        <div class="bg">
        	<div class="container">
        		<img src="../images/signin1.png" class="user">
        		
        		<h1>ADMIN LOGIN</h1>

                        <form name="f1" action="admin.php" method="post" onsubmit="return login()">
                        	<div class="tbox">
                	               	<input type="text" name="name" placeholder="Username">
                	       </div>
                	       <div class="tbox">
                		      <input type="password" name="Password" placeholder="Password">
                	       </div>

                            <input name="s" class="btn" type="submit" value="LOG IN"/>
                	
                        </form>
                </div>
        </div>
</body>
</html>
