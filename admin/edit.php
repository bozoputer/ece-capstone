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
      //Connect to the database
      require ('../../ext_includes/capstone2.inc.php');
      $db = mysqli_connect($host, $user_name, $password, $db);

      // Check connection
      if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

      //Fetch album data.
      $album_id = $_GET['id'];

      $result = mysqli_query($db,"SELECT artist, title, year, price, shape
      from records
      where id = " . $album_id);

      $row = mysqli_fetch_array($result);
      
      //Extract fields.
      $artist = $row['artist'];
      $title = $row['title'];
      $year = $row['year'];
      $price = $row['price'];
      $shape = $row['shape'];
    ?>

  	<form method="POST" action="save_edit.php"> 
      <div class="row">
        <div class="small-12 large-6 columns">
          <label>Artist
            <input type="text" name="artist" id="artist_B" value="<?php print $row['artist']; ?>" />
          </label>
        </div>
        <div class="small-12 large-6 columns">
          <label>Album
            <input type="text" name="title" id="title_B"/>
          </label>
        </div>
      </div>

      <div class="row">
        <div class="small-4 columns">
          <label>Year
            <input type="text" name="year" id="year_B" />
          </label>
        </div>
        <div class="small-4 columns">
          <label>Price
            <input type="text" name="price" id="price_B" />
          </label>
        </div>
        <div class="small-4 columns">
          <label>Condition
            <input type="text" name="shape" id="shape_B" />
          </label>
        </div>
      </div>

      <div class="row">
        <div class="small-12 columns">
          <ul class="button-group" id="editSubmitButtons">
            <li><a href="#" class="button" id="addEditedAlbum">Submit</a></li>
            <li><a href="index.php" class="button green">Cancel</a></li>
          </ul>
        </div>
      </div>
    </form>
  </div>
</div>

<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<script src="../bower_components/foundation/js/foundation.min.js"></script>
<script src="../js/app.js"></script>
<script>
$(document).ready(function() {
  $("li a#addEditedAlbum").on("click", function() {
    var artist_B = $("#artist_B").val();
    var title_B = $("#title_B").val();
    var year_B = $("#year_B").val();
    var price_B = $("#price_B").val();
    var pricePattern_B = new RegExp (/^([1-9]{1}[\d]{0,2}(\,[\d]{3})*(\.[\d]{0,2})?|[1-9]{1}[\d]{0,}(\.[\d]{0,2})?|0(\.[\d]{0,2})?|(\.[\d]{1,2})?)$/);
    var priceResult_B = price_B.match(pricePattern_B);
    var shape_B = $("#shape_B").val();

    if (artist_B, title_B, year_B, price_B, shape_B === "") {
      alert("Please fill out all fields.");
    }
    else if (year_B < 1939 || year_B > 2014)  {
      alert("Invalid year for Blue Note Records. Please try again.");
    }
    else if (year_B.length !== 4 || isNaN(year_B)) {
      alert("Invalid year. Please try again.");
    }
    else if (priceResult_B === null) {
      alert("Invalid price. Please try again.");
    }
    else if (shape_B !== "NM" && shape_B !== "E" && shape_B !== "VG" && shape_B !== "G" && shape_B !== "F" && shape_B !== "P") {
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