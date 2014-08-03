<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>E's Blue Note Record Collection - Prices</title>
  <link rel="stylesheet" href="css/app.css" />
  <link rel="stylesheet" href="css/styles.css" />
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
  <script src="bower_components/modernizr/modernizr.js"></script>
</head>
<body>
<div class="row fullWidth">
  <div class="large-12 columns">
    <nav class="top-bar navBar" data-topbar>
      <ul class="title-area">  
        <li class="name">
          <h1>
            <a href="#">
            E's Blue Notes
            </a>
          </h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
      </ul>

      <section class="top-bar-section">
        <ul class="right">
          <li><a href="index.html">Intro</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="selling.php">Selling</span></a></li>
          <li><a href="#"><span id="current">Prices</a></li>
          <li><a href="buying.html">Buying</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </section>
    </nav>
  </div>
</div>

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
		<th>Condition</th>
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
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/foundation/js/foundation.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>