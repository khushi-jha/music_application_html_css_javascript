<?php

$conn = mysqli_connect("127.0.0.1:3325","root","","audiolib");
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

$sql = "DELETE FROM audios WHERE id='" . $_GET["id"] . "'";

if (mysqli_query($conn, $sql)) 
{
    echo "Record deleted successfully";
} 
else 
{
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
