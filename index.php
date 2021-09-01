<?php
$conn = mysqli_connect("127.0.0.1:3325","root","","audiolib");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Music page</title>
	<link rel="stylesheet" type="text/css" href="signinstyle.css"><!-- 
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
</head>
<body>
	<!-- Navigation Starts -->
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
			<div class="searchpart">
				<div class="search-box">
					<input class="search-txt" type="text" placeholder="type to search" name="">
					<a class="search-btn" href="#">
					</a>
				</div>	
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

	<div>
		<!-- queue -->

        
		<!-- queue ends -->
		<!-- slider + poster -->
		<div class="main">
			<div class="slidemain">
				<div class="slider">
<div class="slide1"><a href="register.html"><img src="images/eng.jpg" style="height: 350px; width: 800px; cursor: pointer;"></a></div>
<div class="slide1"><a href="register.html"><img src="images/gujarati.jpg" style="height: 350px; width: 800px; cursor: pointer;"></a></div>
<div class="slide1"><a href="register.html"><img src="images/hindi.jpg" style="height: 350px; width: 800px; cursor: pointer;"></a></div>
<div class="slide1"><a href="register.html"><img src="images/punjabi.jpg" style="height: 350px; width: 800px; cursor: pointer;"></a></div>
<div class="slide1"><a href="register.html"><img src="images/eng.jpg" style="height: 350px; width: 800px; cursor: pointer;"></a></div>
<div class="slide1"><a href="register.html"><img src="images/gujarati.jpg" style="height: 350px; width: 800px; cursor: pointer;"></a></div>
<div class="slide1"><a href="register.html"><img src="images/punjabi.jpg" style="height: 350px; width: 800px; cursor: pointer;"></a></div>

				</div>
			</div>
        </div>
        </div>
		

<!-- slider ends -->
<!-- poster starts -->
<!-- poster 1 -->
		<div class="mainblock">
            
            <div class="ptitle">TRENDING SONGS</div>
			<div class="blockback">
				<div class="slider3"><!-- 
###############################################################################################				sample -->

					<div class="block">
							<div class="">
								<img src="images/filhaal.png" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle"><a href="register.html">
                     Filhall</a>
                        </div>	
					</div><!-- 
##############################################################################################	 -->			
                    <div class="block">
							<div class="">
								<img src="images/gendafool.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle"><a href="register.html"> 
Genda Fool</a>
		             </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/goabeech.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle"><a href="register.html">
Goa Beech</a>
                       
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/illegalweapon.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle"><a href="register.html">
Illegal Weapon</a>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/lamborghini.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle"><a href="register.html">
Lamborgini</a>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/ludo.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle"><a href="register.html">
Loca</a>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/malang.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle"><a href="register.html">
Malang</a>

                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/meriaashiqui.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle"><a href="register.html">
                        Meri Aashiqui</a>
                        </div>	
					</div>
                    

				</div>
		</div>
		</div>
<!-- poster 2 -->
		<div class="mainblock">
            
                        <div class="ptitle">POPULAR</div>
            <div class="blockback">
				<div class="slider2">
                    <div class="block">
							<div class="">
								<img src="images/shayad.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle"><a href="register.html">
Shayad</a>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/terebina.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle"><a href="register.html">
Tere Bina</a>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/tumhiaana.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle"><a href="register.html">
Tum Hi Aana</a>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/yalgaar.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle"><a href="register.html">
Yalgaar</a>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/kitnachahne.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle"><a href="register.html">
Tujhe Kitna Chahne Lge</a>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/naagin.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle"><a href="register.html">
Naagin</a>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/kaise%20hua.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle"><a href="register.html">
                       Kaise hua
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/pagal.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle"><a href="register.html">
Pagal</a>
                        </div>	
					</div>
                    
               </div>
			</div>
                		</div>
		</div>
<!-- poster 3 -->
		<div class="mainblock">
			            <div class="ptitle">MIX</div>
			<div class="blockback">
				<div class="slider3">
                    <div class="block">
							<div class="">
								<img src="images/kaam25.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle"><a href="register.html">
                       Kaam 25</a>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/Firse%20Machayenge%20Remix.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle"><a href="register.html">
Firse Machenge Remix</a>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/sorry.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle"><a href="register.html">
Sorry</a>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/soni.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle"><a href="register.html">Soni Gujarat Ni
                                </a>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/tell%20me.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle"><a href="register.html">
Tell me</a>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/vhalam.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle"><a href="register.html">
Vhalam Aavo Ne</a>
                
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/sour%20candy.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle"><a href="register.html">Sour Candy</a>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/Yaari.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle"><a href="register.html">Yaari</a>

                        </div>	
					</div>
                    
									</div>
			</div>
                
		</div>

	</div>	
</body>
</html>
