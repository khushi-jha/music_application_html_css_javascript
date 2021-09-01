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
                   <div style="background-color: lightslategrey; padding: 5px 10px; font-size: 20px; color: white">Insert song</div>
                           <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <table align="center">
                        <tr><td>song Name</td><td><input type="text" placeholder="song Name" name="song" value="song"/></td></tr>
                        <tr><td>song Album</td><td><input type="text" placeholder="song ALbum" name="album" value="album"/></td></tr>
                        <tr><td>Song image</td><td><input type="file" name="pics" value="photo"/></td></tr>
                        <tr><td>song</td><td><input type="file" name="audiofile" value="audio"/ ></td></tr>
                        <tr><td></td><td><input type="submit" value="Upload audio and Image" name="save"/></td></tr>
                    </table>
                </form>
                </div>
            </div>
        </div>
    </body>
</html>