<?php
//Delete a record.

//Input:
//  id: id number of the album. POST.

$album_id = $_POST['id'];

//Connect to DB.
require'../../ext_includes/capstone2.inc.php';
$db = mysqli_connect($host, $user_name, $password, $db);

//Delete the record.
$query = "delete from records where id = $album_id";
$db->query($query);

//Back to admin menu.
header('location:index.php');

exit();
?>
