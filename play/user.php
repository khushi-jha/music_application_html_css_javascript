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
                <tr><td><a href="">User Detail</a></td></tr>
                <tr><td><a href="../signin.php">Logout</a></td></tr>
                    </table>
                </div>
                <div class="main">
                   <div style="background-color: lightslategrey; padding: 5px 10px; font-size: 20px; color: white">Users's information</div>
                    <?php
$conn = mysqli_connect("127.0.0.1:3325","root","","usersign");
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
$result = mysqli_query($conn,"SELECT name,email FROM user LIMIT 24,9");
echo "<table border='1'  align='center'>
<tr>
<th>name</th>
<th>email</th>
</tr>";
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
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

