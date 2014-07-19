<?php 
require ('../../ext_includes/capstone2.inc.php');
$db = mysqli_connect($host, $user_name, $password, $db);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$album_id = $_GET['id'];

$result = mysqli_query($db,"SELECT title FROM records where id = $album_id;");

$row = mysqli_fetch_array($result);
      	   
echo "<p>Are you sure you want to delete " . $row['title'] . " from the database?</p>";

mysqli_close($db);
?>