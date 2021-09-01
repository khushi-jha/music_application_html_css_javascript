<html>
<head>
        <link rel="stylesheet" type="text/css" href="admin_page.css">
<style>
table
{
border-style:solid;
border-width:2px;
border-color:black;
}
</style>
</head>
<body>
    <div class="header">
        <h2>Music Portal |  Admin</h2>
       </div>
        <div class="container">
            <div class="gray-part">
                <div class="right">
                   <table id="ghoomo">
                <tr><td><a href="admin_page.php">Change Password</a></td></tr>
                <tr><td><a href="insert_song.php">Insert songs</a></td></tr>
                <tr><td><a href="edit_songs.php">Manage songs</a></td></tr>
                <tr><td><a href="user.php">User Detail</a></td></tr>
                <tr><td><a href="../index.php">Logout</a></td></tr>
                    </table>
                </div>
                <div class="main">
                   <div style="background-color: lightslategrey; padding: 5px 10px; font-size: 20px; color: white">Songs Information</div>
                    <?php
$conn = mysqli_connect("127.0.0.1:3325","root","","audiolib");
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
                    
$t="<font color='black'>Delete";   
$result = mysqli_query($conn,"SELECT filename,picname,id,song,album FROM audios");
echo "<table border='1' align='center'>
<tr>
<th>Id</th>
<th>audio</th>
<th>photo</th>
<th>song</th>
<th>singer</th>
<th>Delete</th>
</tr>";
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['filename'] . "</td>";
  echo "<td>" . $row['picname'] . "</td>";
  echo "<td>" . $row['song'] . "</td>";
  echo "<td>" . $row['album'] . "</td>";
  echo "<td>".'<a href="delete.php?id='.$row['id'].'">'.$t.'</a>'."</td>";   
  echo "</tr>";
  }
echo "</table>";
mysqli_close($conn);
?>

                </div>
            </div>
        </div>
</body>
</html>

