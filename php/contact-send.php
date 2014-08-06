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
  <style>
  body {
  	color: #cd005e;
  	font-family: 'Oswald', Arial, sans-serif;
	font-size: 18px;
  }

  div#errors {
  	padding-left: 10px;
  	padding-top: 10px;
  }

  </style>
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
          <li><a href="../pricelist.php">Prices</a></li>
          <li><a href="../contact.html"><span id="current">Contact</span></a></li>
        </ul>
      </section>
    </nav>
  </div>
</div>

<div id="errors">
<?php

//Ensures no one loads page and does simple spam check.
if(isset($_POST['name']) && empty($_POST['spam_check']))
{
	//Include our email validator for later use 
	require 'email-validator.php';
	$validator = new EmailAddressValidator();
	
	//Include config file
	include 'config.php';
	
	//Declare our $errors variable we will be using later to store any errors.
	$errors = array();
	
	//Setup our basic variables
	$input_name = strip_tags($_POST['name']);
	$input_email = strip_tags($_POST['email']);
	$input_message = strip_tags($_POST['message']);
	
	//We'll check and see if any of the required fields are empty.
	//We use an array to store the required fields.
	$required = array('Name field' => 'name', 'Email field' => 'email', 'Message field' => 'message');
	
	//Loops through each required $_POST value 
	//Checks to ensure it is not empty.
	foreach($required as $key=>$value)
	{
		if(isset($_POST[$value]) && $_POST[$value] !== '') 
		{
			continue;
		}
		else {
			$errors[] = $key . ' cannot be left blank. <br />';
		}
	}
	
	//Make sure the email is valid. 
    if (!$validator->check_email_address($input_email)) {
           $errors[] = '<br /> Email address is invalid.';
    }
	
	//Now check to see if there are any errors 
	if(empty($errors))
	{
		
		//No errors, send mail using conditional to ensure it was sent.
		if(mail(webmaster_email, "Message from $input_name", $input_message, "From: $input_email"))
		{
		echo '<br /> Thanks! Your email has been sent.';
		}
		else 
		{
			echo '<br /> There was a problem sending your email. Please try again.';
		}
		
	}
	else 
	{
		
		//Errors were found, output all errors to the user.
		echo implode('<br />', $errors);
		
	}
}
else
{
	die('<br /> Direct access to this page is not allowed.');
}

?>
</div>

<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<script src="../bower_components/foundation/js/foundation.min.js"></script>
<script src="../js/app.js"></script>
</body>
</html>