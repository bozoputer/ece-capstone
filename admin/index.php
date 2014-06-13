<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>E's Blue Note Record Collection - Admin</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
</head>
<body>
<?php  



?>

	
<form class="pure-form pure-form-aligned">
	<fieldset>
	    <div class="pure-control-group">
	        <label for="artist">Artist</label>
	        <input id="artist" type="text" placeholder="Artist Name" required>
	    </div>

	    <div class="pure-control-group">
	        <label for="title">Album</label>
	        <input id="title" type="text" placeholder="Album Title">
	    </div>

	    <div class="pure-control-group">
	        <label for="year">Year</label>
	        <input id="year" type="number" placeholder="Release Year" required>
	    </div>

	    <div class="pure-control-group">
	        <label for="status">Status</label>
	        <select id="status" required>
	            <option>Buying</option>
	            <option>Selling</option>
	        </select>
        </div>

	    <div class="pure-control-group">
	        <label for="price">Price</label>
	        <input id="price" type="text" placeholder="Price" required>
	    </div>

	    <div class="pure-control-group">
	        <label for="condition">Condition</label>
	        <input id="condition" type="text" placeholder="Condition" required>
	    </div>

	    <div class="pure-controls">
	        <button type="submit" class="pure-button pure-button-primary">Add album</button>
	    </div>
	</fieldset>
</form>
<script src="//code.jquery.com/jquery-1.9.0.min.js"></script>
<script src="js/jquery.validation.js"></script>
<script>
$("form").validate();
</script>
</body>
</html>