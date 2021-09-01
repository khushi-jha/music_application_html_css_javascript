<?php

if(isset($_POST['save']))
{
	$dir = 'uploads/';

	$audio_path = $dir.basename($_FILES['audiofile']['name']);

	if(move_uploaded_file($_FILES['audiofile']['tmp_name'],$audio_path))
	{
		echo "uploaded successfully.";

    }

	$dir = 'photos/';

	$pic_path = $dir.basename($_FILES['pics']['name']);

	if(move_uploaded_file($_FILES['pics']['tmp_name'],$pic_path))
	{
		echo "uploaded successfully.";
    }

    
    $song = $_POST['song'];
    $album = $_POST['album'];

    save($audio_path,$pic_path,$song,$album);
}

if(isset($_POST['play']))
{
	 displayaudios();
}

function displayaudios()
{
	$conn = mysqli_connect('localhost','root','','audiolib');
	if(!$conn)
	{
		die('server not connected');
	}

	$query = "select * from audios";

	$r = mysqli_query($conn,$query);

	while ($row = mysqli_fetch_array($r)) 
	{
		echo '<a href="play.php?name='.$row['filename'].'">'.$row['filename'].'</a>';
		echo "<br/>";
	}
		mysqli_close($conn);
}

function save($audio_path,$pic_path,$song,$album)
 {
    $conn = mysqli_connect('127.0.0.1:3325','root','','audiolib');
	if(!$conn)
	{
		die('server not connected');
	}

	$query = "INSERT INTO audios (filename,picname,song,album) values ('$audio_path','$pic_path','$song','$album')";

	mysqli_query($conn,$query);

	if(mysqli_affected_rows($conn)>0)
	{
		echo "audio file path saved in database.";
	}
	mysqli_close($conn);
 }
?>




