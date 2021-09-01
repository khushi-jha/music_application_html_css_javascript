<?php
session_start();
?>

<?php

$host = "127.0.0.1:3325";  
$user = "root";  
$pass = "";  
$dbname = "usersign";
$conn = mysqli_connect($host, $user, $pass, $dbname) or die("unable to connect database"); 

if(isset($_POST["sub"]))
{
	$fname = $_POST["fname"];
	$mail = $_POST["mail"];
	$pno = $_POST["pno"];
	$pass = $_POST["pass"];

	$sql = "INSERT INTO user(name,email,number,password) VALUES('$fname','$mail','$pno','$pass')";

	if($conn->query($sql) === TRUE)
	{
       $_SESSION['name'] = $fname;
       echo '<script>open("inde.php")</script>';
	}

	else
	{
		echo 'Not Inserted';
	}
mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign up</title>
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
                                        <li class="list"><a href="register.html" style=" display: flex; align-items: center; ">Register</a></li>
                                </ul>
                                                
                                                
                                        
                        </div>
                </div>
        </nav>

		<div class="bg">
			<div class="container">
				<img src="images/signin1.png" class="user">
				<h1>SIGN UP</h1>

		            <form name="f2" action="signup.php" method="POST" onsubmit="return signup()">
		                <div class="tbox">
		        	        <input type="text" placeholder="Firstname" name="fname" value="">
		        	    </div>
		        	    <div class="tbox">
		                  	<input type="email" placeholder="Email" name="mail" value="">  
		        	    </div>
		        	    <div class="tbox">
		                   	<input type="text" placeholder="Phone Number" name="pno" value="">
		       	        </div>
		        	    <div class="tbox">
		        	    	<input type="Password" placeholder="Password" name="pass" value="">
		        	    </div>
		        	    <div class="tbox">
		        		   	<input type="Password" placeholder="Confirm Password" name="cpass" value="">
		        	    </div>
		        	    <a href="inde.php"><input name="sub" class="btn" type="submit" onclick="" value="SIGN UP" ></a>
		        	
		            </form>
		    </div>
		</div>
</body>
</html>
