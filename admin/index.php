<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>E's Blue Note Record Collection - Admin</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
	<link rel="stylesheet" href="css/admin.css">
</head>
<body>
<?php  



?>

<div id="addRecord">
<h3>Add new album to price table</h3>
<form class="pure-form pure-form-aligned">
	<fieldset>
	    <div class="pure-control-group">
	        <label for="artist">Artist</label>
	        <input id="artist" type="text" placeholder="Artist Name">
	        <span id="errorMsg"/>
	    </div>

	    <div class="pure-control-group">
	        <label for="album">Album</label>
	        <input id="album" type="text" placeholder="Album Title">
	        <span id="errorMsg"/>
	    </div>

	    <div class="pure-control-group">
	        <label for="year">Year</label>
	        <input id="year" type="text" placeholder="Release Year">
	        <span id="errorMsg"/>
	    </div>

	    <div class="pure-control-group">
	        <label for="status">Status</label>
	        <select id="status">
	            <option>Buying</option>
	            <option>Selling</option>
	        </select>
        </div>

	    <div class="pure-control-group">
	        <label for="price">Price</label>
	        <input id="price" type="text" placeholder="Price">
	        <span id="errorMsg"/>
	    </div>

	    <div class="pure-control-group">
	        <label for="condition">Condition</label>
	        <input id="condition" type="text" placeholder="Condition">
	        <span id="errorMsg"/>
	    </div>

	    <div class="pure-controls">
	        <button type="button" id="addAlbum" class="pure-button pure-button-primary">Add album</button>
	    </div>
	</fieldset>
</form>
</div>
<script src="//code.jquery.com/jquery-1.9.0.min.js"></script>
<script>
$(document).ready(function() {
	$("#artist").focus();
	$("#addAlbum").click(function() {
		var artist = $("#artist").val();
		var album = $("#album").val();
		var year = $("#year").val();
		var price = $("#price").val();
		var pricePattern = new RegExp (/^([1-9]{1}[\d]{0,2}(\,[\d]{3})*(\.[\d]{0,2})?|[1-9]{1}[\d]{0,}(\.[\d]{0,2})?|0(\.[\d]{0,2})?|(\.[\d]{1,2})?)$/)
		var priceResult = price.match(pricePattern);
		var condition = $("#condition").val().toLowerCase();

		if (artist, album, year, price, condition == "") {
			alert("Please fill out all fields.");
		}
		else if (year < 1939 || year > 2014)  {
			alert("Invalid year for Blue Note Records. Please try again");
		}
		else if (year.length !== 4 || isNaN(year)) {
			alert("Invalid year. Please try again");
		}
		else if (priceResult == null) {
			alert("Invalid price. Please try again");
		}
		else if (condition !== "nm" && condition !== "e" && condition !== "vg" && condition !== "g" && condition !== "f" && condition !== "p") {
			alert("Condition must be NM, E, VG, G, F, or P. Please try again");
		} 
		else {
			$("#addAlbum").submit();
		}
	});
});


</script>
</body>
</html>