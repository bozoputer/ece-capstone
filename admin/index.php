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
          <li><a href="../index.html">Intro</a></li>
          <li><a href="../about.html">About</a></li>
          <li><a href="../selling.php">Selling</a></li>
          <li><a href="../buying.html">Buying</a></li>
          <li><a href="../contact.html">Contact</a></li>
        </ul>
      </section>
    </nav>
  </div>
</div>

<div class="row">
  <div class="small-12 columns">
    <div class="panel">
      <h5>E's Blue Notes - Admininistration Page</h5> 
      <p>Click the appropriate button or hyperlink below to add, update, or delete a record from the pricing table.</p> 
    </div>
  </div>
</div>

<div class="row">
  <div class="small-12 small-centered columns">
    <ul class="button-group">
      <li><a href="#" class="button" data-reveal-id="addRecord">Add</a></li>
      <li><a href="<?php echo 'delete.php?id=' . $row['id'] . ''?>" class="button red" data-reveal-id="deleteRecord">Delete</a></li>
      <li><a href="#" class="button green">Edit</a></li>
    </ul>  
  </div>
</div>

<hr>

<div class="row">
  <div class="small-12 columns">
    <?php

    require'../../ext_includes/capstone2.inc.php';
    $db = mysqli_connect($host, $user_name, $password, $db);

    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($db,"SELECT * FROM records");
    $id = $row['id'];

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
      // echo '<td><a href="update.php?id=' . $row['id'] . '">Update</a></td>';
      // echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';
      echo "</tr>";
    }

    echo "</table>";

    mysqli_close($db);
    ?> 
  </div>
</div>

<!-- Foundation Reveal - Add record modal -->
<div id="addRecord" class="reveal-modal medium" data-reveal>
<form method="POST" action="add_rec.php"> 
  <div class="row">
    <div class="small-12 large-6 columns">
      <label>Artist
        <input type="text" name="artist" id="artist" placeholder="Artist Name" />
      </label>
    </div>
    <div class="small-12 large-6 columns">
      <label>Album
        <input type="text" name="title" id="title" placeholder="Album Title" />
      </label>
    </div>
  </div>

  <div class="row">
    <div class="small-4 columns">
      <label>Year
        <input type="text" name="year" id="year" placeholder="Release Year" />
      </label>
    </div>
    <div class="small-4 columns">
      <label>Price
        <input type="text" name="price" id="price" placeholder="Price" />
      </label>
    </div>
    <div class="small-4 columns">
      <label>Condition
        <input type="text" name="shape" id="shape" placeholder="Album Condition" />
      </label>
    </div>
  </div>

  <div class="row">
    <div class="small-12 columns">
      <a href="#" class="button radius" id="addAlbum">Submit</a>
    </div>
  </div>
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>

<!-- Foundation Reveal - Delete record modal -->
<div id="deleteRecord" class="reveal-modal medium" data-reveal>
  <div class="row">
  <div class="small-12 columns">
    <?php

    require'../../ext_includes/capstone2.inc.php';
    $db = mysqli_connect($host, $user_name, $password, $db);

    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($db,"SELECT * FROM records");
    $id = $row['id'];

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
      // echo '<td><a href="update.php?id=' . $row['id'] . '">Update</a></td>';
      echo '<td><a data-reveal-ajax="true" data-reveal-id="confirmDelete" href="conf-delete.php?id=' . $row['id'] . '">Delete</a></td>';
      echo "</tr>";
    }

    echo "</table>";

    mysqli_close($db);
    ?> 
  </div>
</div>

  <a class="close-reveal-modal">&#215;</a>
</div>

<!-- Foundation Reveal - Confirm delete record modal -->
<div id="confirmDelete" class="reveal-modal medium" data-reveal>

  <a class="close-reveal-modal">&#215;</a>
</div>

<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<script src="../bower_components/foundation/js/foundation.min.js"></script>
<script src="../js/app.js"></script>
<script>
$(document).ready(function() {
  $("#addAlbum").click(function() {
    var artist = $("#artist").val();
    var title = $("#title").val();
    var year = $("#year").val();
    var price = $("#price").val();
    var pricePattern = new RegExp (/^([1-9]{1}[\d]{0,2}(\,[\d]{3})*(\.[\d]{0,2})?|[1-9]{1}[\d]{0,}(\.[\d]{0,2})?|0(\.[\d]{0,2})?|(\.[\d]{1,2})?)$/)
    var priceResult = price.match(pricePattern);
    var shape = $("#shape").val();

    if (artist, title, year, price, shape == "") {
      alert("Please fill out all fields.");
    }
    else if (year < 1939 || year > 2014)  {
      alert("Invalid year for Blue Note Records. Please try again.");
    }
    else if (year.length !== 4 || isNaN(year)) {
      alert("Invalid year. Please try again.");
    }
    else if (priceResult == null) {
      alert("Invalid price. Please try again.");
    }
    else if (shape !== "NM" && shape !== "E" && shape !== "VG" && shape !== "G" && shape !== "F" && shape !== "P") {
      alert("Condition can only be NM, E, VG, G, F, or P (Case-sensitive). Please try again.");
    } 
    else {
      $("form").submit();
    }
  });
});
</script>
</body>
</html>