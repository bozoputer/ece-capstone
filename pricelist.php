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

		include('../ext_includes/capstone.inc.php');

		$result = mysqli_query($con,"SELECT * FROM records");

		echo "<table>
		<tr>
		<th>Artist</th>
		<th>Title</th>
		<th>Year</th>
		<th>Status</th>
		<th>Price</th>
		<th>Condition</th>
		</tr>";

		while($row = mysqli_fetch_array($result)) {
		  echo "<tr>";
		  echo "<td>" . $row['artist'] . "</td>";
		  echo "<td>" . $row['title'] . "</td>";
		  echo "<td>" . $row['year'] . "</td>";
		  echo "<td>" . $row['status'] . "</td>";
		  echo "<td>" . $row['price'] . "</td>";
		  echo "<td>" . $row['condition'] . "</td>";
		  echo "</tr>";
		}

		echo "</table>";

		mysqli_close($con);
		?> 
	</div>
</div>
</body>
</html>