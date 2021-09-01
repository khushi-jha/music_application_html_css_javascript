<?php
$conn = mysqli_connect("127.0.0.1:3325","root","","usersign");
?>

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="admin_page.css">
  </head>
<body>
     <div class="header">
        <h2>Music Portal |  Admin</h2>
       </div>
  <div class="container">
       
    <div class="gray-part">
         <div>
           <table id="ghoomo">
                <tr><td><a href="admin_page.php">Change Password</a></td></tr>
                <tr><td><a href="insert_song.php">Insert songs</a></td></tr>
                <tr><td><a href="edit_songs.php">Manage songs</a></td></tr>
                <tr><td><a href="user.php">User Detail</a></td></tr>
                <tr><td><a href="../index.php">Logout</a></td></tr>
            </table>
        </div>
          <div class="main">

                <div style="background-color: lightslategrey; padding: 5px 10px; font-size: 20px; color: white">Admin change password</div>
              <form method="post" action="admin_page.php">
                <table align="center">
                  <tr><td>Current password</td><td><input type="password" placeholder="Enter current password" name="opwd" id="opwd"></td></tr>
                  <tr><td>New Password</td><td><input type="password" placeholder="Enter new password" name="npwd" id="npwd"></td></tr>
                   <tr><td>Confirm New Password</td><td><input type="password" placeholder="Confirm new password" name="cpwd" id="cpwd"></td></tr>
                  <tr><td></td><td><input type="submit" name="submit" value="Change Password"></td></tr>
                </table>
                  </form>
          </div>
    </div>
  </div>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
 $oldpass=$_POST['opwd'];
 $newpassword=$_POST['npwd'];
$sql=mysqli_query($conn,"SELECT password FROM admin where password='$oldpass'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $conn=mysqli_query($conn,"update admin set password='$newpassword'");
 echo'<script>alert("password changed successfully!")</script>';
}
else
{
 echo'<script>alert("password is incorrect!")</script>';
}
}
?>