<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>E's Blue Note Record Collection - Prices</title>
  <link rel="stylesheet" href="css/app.css" />
  <link rel="stylesheet" href="css/styles.css" />
  <script src="bower_components/modernizr/modernizr.js"></script>
</head>
<body>  
<div class="row">
	<div class="small-12 columns priceList" style="border: 1px solid red;">
		<?php

		require'../ext_includes/capstone2.inc.php';
		$db = mysqli_connect($host, $user_name, $password, $db);

		// Check connection
		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		$result = mysqli_query($db,"SELECT * FROM records");

		echo "<table>
		<tr>
		<th>Artist</th>
		<th>Title</th>
		<th>Year</th>
		<th>Price</th>
		<th>Shape</th>
		</tr>";

		while($row = mysqli_fetch_array($result)) {
		  echo "<tr>";
		  echo "<td>" . $row['artist'] . "</td>";
		  echo "<td>" . $row['title'] . "</td>";
		  echo "<td>" . $row['year'] . "</td>";
		  echo "<td>" . $row['price'] . "</td>";
		  echo "<td>" . $row['shape'] . "</td>";
		  echo "</tr>";
		}

		echo "</table>";

		mysqli_close($db);
		?> 
	</div>
</div>
</body>
</html>