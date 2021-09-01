<?php
$conn = mysqli_connect("127.0.0.1:3325","root","","audiolib");
$id = $_GET['id']; 
?>
<!DOCTYPE html>
<html>
<head>
       <meta charset="utf-8">
	<title> Music Box</title>
	<link rel="stylesheet" type="text/css" href="b.css">
       <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script type="text/javascript" src="validation.js"></script>
</head>
<body style="background-color: #84142d;">
    
   <style> 
    .player-controls
{
  display: block;
  color: rgba(255,255,255,1);
  font-size: 31px;
  padding-top: 25px;
  padding-left: 35px;
  cursor: pointer;
}

.player-controls i
{
  margin-right: 15px;
  margin-left: 15px;
  cursor: pointer;
}

.player-controls button{
  margin-right: 50px;
}
       </style>

       <div class="container">
         <div class="player">
            <div class="player-head">
            <img src="<?php echo $_GET['pname'] ?>" alt="cover" class="song-cover"/>
            </div>
 
            <div class="player-body">
                   <img src="<?php echo $_GET['pname'] ?>" alt="cover" class="song-cover">
                   <div class="album-info">

                          <span class="album-title">
                           <?php echo $_GET['sname'] ?>
                          </span>

                          <span class="song-title"> <?php echo $_GET['aname']?>
                             </span>
                          
                              
                          <div class="player-controls">
                                  <?php                              
                                  // Previous button 
                                  $previous= mysqli_query($conn, "SELECT * FROM audios WHERE id<$id order by id DESC");
                                  if($row = mysqli_fetch_array($previous))
                                    {
                                       echo '<a href="play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'"><button type="button"><i class="fa fa-step-backward" aria-hidden="true"></i></button></a>';  
                                    } 
                                  ?>
                               <a href="../inde.php" class="button"><button type="button"><i class="fa fa-home"></i></button></a>
                                  <?php
                                  // Next button 
                                  $next = mysqli_query($conn, "SELECT id,filename,picname,album,song FROM audios WHERE id>$id order by id ASC");
                                  if($row = mysqli_fetch_array($next))
                                    {
                                       echo '<a href="play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'"><button type="button"><i class="fa fa-step-forward" aria-hidden="true"></i></button></a>';  
                                    } 
                                 ?>

                       </div> 

                          </div>
                   </div>
            </div>
              <div class="player-footer">
                     <br>
                    <div class="song-controls" >
                         <audio controls autoplay loop>
                                <source src="<?php echo $_GET['name'] ?>" type="audio/mpeg">
                         </audio>
                    </div> 
                                <?php                               
                                  $queue = mysqli_query($conn, "SELECT * FROM queue WHERE id<$id order by id ASC");
                                  if($row = mysqli_fetch_array($previous))
                                    {
                                       echo '<a href="play.php?id='.$row['id'].'&name='.$row['filename'].'&aname='.$row['album'].'&sname='.$row['song'].'&pname='.$row['picname'].'"></a>';  
                                    } 
                                  ?>
              </div>

         </div>
    
</body>
</html>
