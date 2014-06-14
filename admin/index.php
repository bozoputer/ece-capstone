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

	
<form class="pure-form pure-form-aligned" id="addRecord">
	<fieldset>
	    <div class="pure-control-group">
	        <label for="artist">Artist</label>
	        <input id="artist" type="text" placeholder="Artist Name" required>
	    </div>

	    <div class="pure-control-group">
	        <label for="album">Album</label>
	        <input id="album" type="text" placeholder="Album Title" required>
	    </div>

	    <div class="pure-control-group">
	        <label for="year">Year</label>
	        <input id="year" type="text" placeholder="Release Year" required>
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
	        <button type="submit" value="Validate!" class="pure-button pure-button-primary">Add album</button>
	    </div>
	</fieldset>
</form>
<script src="//code.jquery.com/jquery-1.9.0.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/additional-methods.min.js"></script>
<script>
jQuery.validator.setDefaults({
debug: true,
success: "valid"
});

$("#addRecord").validate({
	rules: {
		artist: {
			required: true
		},
		title: {
			required: true
		},
		year: {
			required: true
		},
		price: {
			required: true
		},
		condition: {
			required: true
		}
	}
});
</script>
</body>
</html>