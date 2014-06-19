<?php  
require ('../../ext_includes/capstone2.inc.php');
$db = mysqli_connect($host, $user_name, $password, $db);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


//Get the form fields.
$artist = ($_POST['artist']);
$title = ($_POST['title']);
$year = ($_POST['year']);
$status = ($_POST['status']);
$price = ($_POST['price']);
$shape = ($_POST['shape']);


//Make the fields safe.
$artist = $db->escape_string($artist);
$title = $db->escape_string($title);
$year = $db->escape_string($year);
$status = $db->escape_string($status);
$price = $db->escape_string($price);
$shape = $db->escape_string($shape);

//Create and run the SQL.
$sql = "INSERT INTO records (artist, title, year, status, price, shape) VALUES  ('$artist', '$title', '$year', '$status', '$price', '$shape')";

if (!mysqli_query($db,$sql)) {
  die('Error: ' . mysqli_error($db));
}
echo "1 record added ";
echo $sql;

mysqli_close($db);

?>