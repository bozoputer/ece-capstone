<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>E's Blue Note Record Collection - About</title>
  <link rel="stylesheet" href="../css/app.css" />
  <link rel="stylesheet" href="../css/styles.css" />
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
  <script src="../bower_components/modernizr/modernizr.js"></script>
</head>
<body>

<div class="row">
  <div class="small-12 columns">
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
		      	   
		echo "<p>Delete " . $row['title'] . " from the database?</p>";

		mysqli_close($db);
	?>

    <ul class="button-group" id="confirmDeleteButtons">
      <li><a href="#" class="button red">Delete</a></li>
      <li><a href="index.php" class="button green">Cancel</a></li>
    </ul>  

  </div>
</div>

<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<script src="../bower_components/foundation/js/foundation.min.js"></script>
<script src="../js/app.js"></script>
</body>
</html>