<?php
session_start();
?>

<?php
$conn = mysqli_connect("127.0.0.1:3325","root","","audiolib");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>

<?php
if(isset($_GET['id']) && $_GET['action']=="remove" )
{
$query=mysqli_query($conn,"DELETE FROM favourites WHERE id='" . $_GET["id"] . "'");
}
?>

<?php
if(isset($_GET['id']) && $_GET['action']=="queue" )
{
mysqli_query($conn,"insert into queue(id) values('".$_GET['id']."')");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Music App</title>
	<link rel="stylesheet" type="text/css" href="po.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="music-container">

<div class="music-header">
<div class="title"><p>Favourites List</p></div>
<a href="../inde.php"><div class="fa fa-home"></div></a>
</div>

<div class="music-playlist">
<br>
<?php
$ret=mysqli_query($conn,"select audios.filename as filename,audios.picname as picname,audios.song as song,audios.album as album,favourites.sid as pid,favourites.id as wid from favourites join audios on audios.id=favourites.id");
$num=mysqli_num_rows($ret);
	if($num>0)
	{
while ($row=mysqli_fetch_array($ret)) 
{

?>
	<div class="music-box">
		<div class="music-info">
			<div class="music-img">
            <img src="<?php echo $row['picname'] ?>" alt="cover" class="song-cover"/>
			</div>
			<div class="music-name">
				<h6>
                <?php    
                             echo '<a href="play.php?id='.$row['wid'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'">'.$row['song'].'</a>';
                             echo "<br/>";
		             ?>               
                </h6>
				<p><?php echo $row['album'] ?></p>
			</div><br><br>
                        <p class="lnk-wishlist">
							<a class="add-to-cart" href="wishlist.php?id=<?php echo htmlentities($row['wid'])?>&&action=remove" title="remove">
                               <i class="fa fa-minus" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
							</a>
						</p>
                        <p class="lnk-wishlist">
							<a class="add-to-cart" href="wishlist.php?id=<?php echo htmlentities($row['wid'])?>&&action=queue" title="queue">
                               <i class="fa fa-plus-circle" aria-hidden="true"></i>
							</a>
						</p>
		</div><hr>
        <?php } ?>		
	</div>
    <?php } ?>
</div>
</div>
</body>
</html>
