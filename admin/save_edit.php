<?php

//Connect to DB
require ('../../ext_includes/capstone2.inc.php');
$db = mysqli_connect($host, $user_name, $password, $db);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//Get the form fields.
$album_id = stripslashes($_POST['album_id']);
$artist = stripslashes($_POST['artist']);
$title = stripslashes($_POST['title']);
$year = stripslashes($_POST['year']);
$price = stripslashes($_POST['price']);
$shape = stripslashes($_POST['shape']);


//Make the fields safe.
$artist = $db->escape_string($artist);
$title = $db->escape_string($title);
$year = $db->escape_string($year);
$price = $db->escape_string($price);
$shape = $db->escape_string($shape);

//Create and run the SQL.
$sql = "UPDATE records 
  SET artist = '$artist', 
  title = '$title', 
  year = '$year', 
  price = '$price', 
  shape = '$shape'
  WHERE id = $album_id";

$db->query($sql);

if (!mysqli_query($db,$sql)) {
  die('Error: ' . mysqli_error($db));
}

// echo "1 record added ";
// echo $sql;

//Back to admin menu.
header('location:index.php');

mysqli_close($db);


?>
