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
          <li><a href="forsale.php">For Sale</span></a></li>
          <li><a href="#"><span id="current">Prices</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </section>
    </nav>
  </div>
</div>

<div class="row">
	<div class="small-12 columns">
		<h2>Record Prices and Conditions</h2>
		<p class="notes">All prices USD.</p>
	</div>
</div>

<div class="row">
	<div class="small-12 columns">

		<br />

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
		  echo "<td>" . "$". $row['price'] . "</td>";
		  echo "<td>" . $row['shape'] . "</td>";
		  echo "</tr>";
		}

		echo "</table>";

		mysqli_close($db);
		?> 
	</div>
</div>

<div class="row">
	<div class="small-12 columns">

		<br />
		<br />
		<br />

		<span class="pinkBold">Near Mint (NM)</span>
		<p>A good description of a NM record is “it looks like it just came from a retail store and it was opened for the first time.” In other words, it’s nearly perfect. Many dealers won’t use a grade higher than this, implying (perhaps correctly) that no record or sleeve is ever truly perfect.</p>

		<p>NM covers are free of creases, ring wear and seam splits of any kind.</p>

		<span class="pinkBold">Excellent (E)</span>
		<p>A good description of an E record is “except for a couple minor things, this would be Near Mint”. Most collectors, especially those who want to play their records, will be happy with an E record, especially if it's toward the high end of the grade.</p>

		<p>E records may show some slight signs of wear, including light scuffs or very light scratches that do not affect the listening experience. Slight warps that do not affect the sound are OK. Minor signs of handling are OK, too, such as telltale marks around the center hole. There may be some very light ring wear or discoloration, but it should be barely noticeable.</p>

		<span class="pinkBold">Very Good (VG)</span>
		<p>VG records — which usually sell for no more than 25 percent of a NM record — are among the biggest bargains in record collecting, because most of the “big money” goes for more perfect copies. For many listeners, a VG record or sleeve will be worth the money.</p>

		<p>VG records have more obvious flaws than their counterparts in better shape. VG records have more obvious flaws than their counterparts in better shape. They lack most of the original gloss found on factory-fresh records. Groove wear is evident on sight, as are light scratches deep enough to feel with a fingernail. When played, a VG record has surface noise, and some scratches may be audible, especially in soft passages and during a song’s intro and ending. But the noise will not overpower the music otherwise.</p>

		<span class="pinkBold">Good (G)</span>
		<p>These records go for 10 to 15 percent of the Near Mint value.

		<p>Good does not mean bad, but the record has significant surface noise and groove wear, and the label is worn, with significant ring wear, heavy writing, or obvious damage. A Good cover has ring wear to the point of distraction, has seam splits obvious on sight, and may have even heavier writing.</p>

		<span class="pinkBold">POOR (P) / Fair (F)</span>
		<p>Poor (P) and Fair (F) records go for 0 to 5 percent of the Near Mint value, if they go at all. More likely, they end up going in the trash. Records are cracked, impossibly warped, or skip and/or repeat when an attempt is made to play them. Covers are generally heavily damaged.<p>

		<p>Only the most outrageously rare items ever sell for more than a few cents in this condition.</p>

		<p class="notes">Excerpted from <a href="http://www.goldminemag.com/collector-resources/record-grading-101">Record Grading 101: Understanding The Goldmine Grading Guide</a>.</p>

	</div>
</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/foundation/js/foundation.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>