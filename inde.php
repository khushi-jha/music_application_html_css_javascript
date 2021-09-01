<?php
session_start();
?>

<?php
$conn = mysqli_connect("127.0.0.1:3325","root","","audiolib");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Music page</title>
	<link rel="stylesheet" type="text/css" href="signinstyle.css"><!-- 
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
</head>
<body>
    <style>
  .dark-mode {
  background-color: silver;
  color: white;
}
    </style>
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
<button onclick="myFunction()">Mode</button>
					</ul>
				</ul>
			</div>

            <div class="searchpart">
               <form method="post" action="inde.php">	
				<div class="search-box">
					<input class="search-txt" type="search" placeholder="type to search" name="search">
                    <input class="search-btn" name="SUBMIT" type="submit" value="">
				</div>
               </form>
            </div>
            
        <div class="part1 flex-container">	
				<ul class="ulist" style="margin-top: 0.1px;">
					<li class="list">
            <div class="dropdown">
                <button class="dropbtn">Welcome <?php echo $_SESSION['name']; ?></button>
                 <div class="dropdown-content">
                   <a href="play/wishlist.php">Favourites</a>
                   <a href="play/queue.php">Queue</a>
                   <a href="index.php">Log-Out</a>

                 </div>
            </div>
                   </li>
            </ul>										
       </div>
		</div>
	</nav>

	<div>
		<!-- queue -->
		<aside>
		<h4 style="text-align: center;"><u>QUEUE</u></h4>
		<hr>
		<div class="queue">
			<div class="queue_image">
				<img src="images/yalgaar.jpg">
			</div>
			<div class="queue_info">
				<h6>
                <?php
                         $t = "<font color='white'>Yalgaar";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='43'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";                           }
                                ?>
                </h6>
				<p>CarryMinati X Wily Frenzy</p>
			</div>
		</div>
		<div class="queue">
			<div class="queue_image">
				<img src="images/malang.jpg">
			</div>
			<div class="queue_info">
				<h6>
                <?php
                         $t = "<font color='white'>Malang";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='38'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";                           }
                                ?>
                </h6>
				<p>Ved Sharma</p>
			</div>
		</div>
		<div class="queue">
			<div class="queue_image">
				<img src="images/gallan-goriyan.jpg">
			</div>
			<div class="queue_info">
				<h6>
                <?php
                         $t = "<font color='white'>Gallan Goriyan";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='45'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";                           }
                                ?>
                </h6>
				<p>Dhvani Bhanushali and Taz</p> 
			</div>

		</div>
		<div class="queue">
			<div class="queue_image">
				<img src="images/kalla.jpg">
			</div>
			<div class="queue_info">
				<h6>
                <?php
                         $t = "<font color='white'>Kalla Sohna Nai";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='48'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";                           }
                                ?>
                </h6>
				<p>Neha Kakkar</p>
			</div>
		</div>
		<div class="queue">
			<div class="queue_image">
				<img src="images/goabeech.jpg">
			</div>
			<div class="queue_info">
				<h6>
                <?php
                         $t = "<font color='white'>Goa Beech";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='33'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";                           }
                                ?>
                </h6>
				<p>Tony Kakkar and Neha Kakkar</p>
			</div>
		</div>
		<div class="queue">
			<div class="queue_image">
				<img src="images/illegalweapon.jpg">
			</div>
			<div class="queue_info">
				<h6>
                <?php
                         $t = "<font color='white'>Illegal Weapon";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='34'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";                           }
                                ?>
                </h6>
				<p>Jasmine Sandlas and Garry Sandhu</p>
			</div>
		</div>
		<div class="queue">
			<div class="queue_image">
				<img src="images/filhaal.png">
			</div>
			<div class="queue_info">
				<h6>
                <?php
                         $t = "<font color='white'>Filhaal";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='31'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";                           }
                                ?>
                </h6>
				<p>B Praak</p> 
			</div>
		</div>
	</aside>
		<!-- queue ends -->
		<!-- slider + poster -->
        

		<div class="main"><h4 style="text-align:center; color:white;"><?php 
if(isset($_POST["SUBMIT"]))
{  
    $t = $_POST['search'];      
    $conn = mysqli_connect("127.0.0.1:3325","root","","audiolib");
    $sql = "SELECT id,filename,album,song,picname FROM audios WHERE song= '$t' ";
    $result = mysqli_query($conn,$sql);
                    
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";                           }
}
?>

</h4>
			<div class="slidemain">
				<div class="slider">
<div class="slide1"><a href="play/po.php"><img src="images/eng.jpg" style="height: 350px; width: 800px; cursor: pointer;"></a></div>
<div class="slide1"><a href="play/po2.php"><img src="images/hindi.jpg" style="height: 350px; width: 800px; cursor: pointer;"></a></div>
<div class="slide1"><a href="play/po3.php"><img src="images/punjabi.jpg" style="height: 350px; width: 800px; cursor: pointer;"></a></div>
<div class="slide1"><a href="play/po1.php"><img src="images/gujarati.jpg" style="height: 350px; width: 800px; cursor: pointer;"></a></div>
<div class="slide1"><a href="play/po.php"><img src="images/eng.jpg" style="height: 350px; width: 800px; cursor: pointer;"></a></div>
<div class="slide1"><a href="play/po1.php"><img src="images/gujarati.jpg" style="height: 350px; width: 800px; cursor: pointer;"></a></div>
<div class="slide1"><a href="play/po3.php"><img src="images/punjabi.jpg" style="height: 350px; width: 800px; cursor: pointer;"></a></div>

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
							<div class="mtitle">
                        <?php
                         $t = "<font color='white'>Filhall";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='31'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";  
                           }
		             ?>
                        </div>	
					</div><!-- 
##############################################################################################	 -->			
                    <div class="block">
							<div class="">
								<img src="images/gendafool.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle">
                         <?php
                         $t = "<font color='white'>Genda Fool";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='32'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";  
                           }
		             ?>
                 </div>

               </div>	
                    
                    <div class="block">
							<div class="">
								<img src="images/goabeech.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle">
                        <?php
                         $t = "<font color='white'>Goa Beech";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='33'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";
                           }
		             ?>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/illegalweapon.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle">
                        <?php
                         $t = "<font color='white'>Illegal Weapon";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='34'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";  
                           }
		             ?>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/lamborghini.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle">
                        <?php
                         $t36 = "<font color='white'>Lamborgini";
                         $result36 = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='36'");
                         
                         while($row36 = mysqli_fetch_array($result36))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";  
                           }
		             ?>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/ludo.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle">
                        <?php
                         $t = "<font color='white'>Loca";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='37'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";  
                           }
		             ?>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/malang.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle">
                        <?php
                         $t = "<font color='white'>Malang";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='38'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";  
                           }
		             ?>

                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/meriaashiqui.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle">
                        <?php
                         $t = "<font color='white'>Meri Aashiqui";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='39'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";  
                           }
		             ?>
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
							<div class="mtitle">
                        <?php
                         $t = "<font color='white'>Shayad";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='40'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";  
                             
                           }
		             ?>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/terebina.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle">
                        <?php
                         $t = "<font color='white'>Tere Bina";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='41'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";  
                           }
		             ?>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/tumhiaana.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle">
                        <?php
                         $t = "<font color='white'>Tum Hi Aana";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='42'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";  
                           }
		             ?>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/yalgaar.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle">
                        <?php
                         $t = "<font color='white'>Yalgaar";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='43'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";  
                           }
		             ?>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/kitnachahne.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle">
                        <?php
                         $t = "<font color='white'>Tujhe Kitna Chahne Lge";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='75'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";  
                           }
                                ?>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/naagin.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle">
                        <?php
                         $t = "<font color='white'>Naagin";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='72'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";  
                           }
                                ?>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/kaise%20hua.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle">
                        <?php
                         $t = "<font color='white'>Kaise hua";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='71'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";  
                           }
                                ?>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/pagal.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle">
                        <?php
                         $t = "<font color='white'>Pagal";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='73'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";  
                           }
                                ?>
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
							<div class="mtitle">
                        <?php
                         $t = "<font color='white'>Kaam 25";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='70'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";  
                           }
                                ?>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/Firse%20Machayenge%20Remix.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle">
                        <?php
                         $t = "<font color='white'>Firse Machenge Remix";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='69'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";  
                           }
                                ?>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/sorry.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle">
                        <?php
                         $t = "<font color='white'>Sorry";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='54'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";  
                           }
                                ?>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/soni.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle">
                        <?php
                         $t = "<font color='white'>Soni Gujarat Ni";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='96'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";  
                           }
                                ?>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/tell%20me.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle">
                        <?php
                         $t = "<font color='white'>Tell me";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='67'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";  
                           }
                                ?>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/vhalam.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle">
                        <?php
                         $t = "<font color='white'>Vhalam Aavo Ne";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='97'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";  
                           }
                                ?>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/sour%20candy.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle">
                        <?php
                         $t = "<font color='white'>Sour Candy";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='66'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";  
                           }
                                ?>
                        </div>	
					</div>
                    
                    <div class="block">
							<div class="">
								<img src="images/Yaari.jpg" style="height: 180px" width="250px;">
							</div>
							<div class="mtitle">
                        <?php
                         $t = "<font color='white'>Yaari";
                         $result = mysqli_query($conn,"SELECT id,filename,album,song,picname FROM audios where id='55'");
                         
                         while($row = mysqli_fetch_array($result))
                           {
                             echo '<a href="play/play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$t.'</a>';
                             echo "<br/>";                           
                         }
                                ?>
                        </div>	
					</div>
                    
									</div>
			</div>
		</div>
    
    <script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>
</body>
</html>