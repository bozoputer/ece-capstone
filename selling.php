<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>E's Blue Note Record Collection - About</title>
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
          <li><a href="intro/index.html">Intro</a></li>
          <li><a href="index.html">About</a></li>
          <li><a href="#"><span id="current">Selling</span></a></li>
          <li><a href="buying.html">Buying</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </section>
    </nav>
  </div>
</div>

<div class="row firstRow">
  <div class="small-12 columns">
    <img id="logo" src="images/bnLogo3.png" />
  </div>
</div>

<div class="row">
  <div class="large-12 columns">
    <div class="row">
      <ul class="carousel" data-orbit>
        <li>
          <div class="large-3 small-6 columns">
            <img src="http://placehold.it/250x250&text=Thumbnail"/>
            <h6 class="panel">Description</h6>
          </div>
          <div class="large-3 small-6 columns">
            <img src="http://placehold.it/250x250&text=Thumbnail"/>
            <h6 class="panel">Description</h6>
          </div>
          <div class="large-3 small-6 columns">
            <img src="http://placehold.it/250x250&text=Thumbnail"/>
            <h6 class="panel">Description</h6>
          </div>  
          <div class="large-3 small-6 columns">
            <img src="http://placehold.it/250x250&text=Thumbnail"/>
            <h6 class="panel">Description</h6>
          </div>
        </li>

        <li>
          <div class="large-3 small-6 columns">
            <img src="http://placehold.it/250x250&text=Thumbnail"/>
            <h6 class="panel">Description</h6>
          </div>
          <div class="large-3 small-6 columns">
            <img src="http://placehold.it/250x250&text=Thumbnail"/>
            <h6 class="panel">Description</h6>
          </div>
          <div class="large-3 small-6 columns">
            <img src="http://placehold.it/250x250&text=Thumbnail"/>
            <h6 class="panel">Description</h6>
          </div>  
          <div class="large-3 small-6 columns">
            <img src="http://placehold.it/250x250&text=Thumbnail"/>
            <h6 class="panel">Description</h6>
          </div>
        </li>

        <li>
          <div class="large-3 small-6 columns">
            <img src="http://placehold.it/250x250&text=Thumbnail"/>
            <h6 class="panel">Description</h6>
          </div>
          <div class="large-3 small-6 columns">
            <img src="http://placehold.it/250x250&text=Thumbnail"/>
            <h6 class="panel">Description</h6>
          </div>
          <div class="large-3 small-6 columns">
            <img src="http://placehold.it/250x250&text=Thumbnail"/>
            <h6 class="panel">Description</h6>
          </div>  
          <div class="large-3 small-6 columns">
            <img src="http://placehold.it/250x250&text=Thumbnail"/>
            <h6 class="panel">Description</h6>
          </div>
        </li>

        <li>
          <div class="large-3 small-6 columns">
            <img src="http://placehold.it/250x250&text=Thumbnail"/>
            <h6 class="panel">Description</h6>
          </div>
          <div class="large-3 small-6 columns">
            <img src="http://placehold.it/250x250&text=Thumbnail"/>
            <h6 class="panel">Description</h6>
          </div>
          <div class="large-3 small-6 columns">
            <img src="http://placehold.it/250x250&text=Thumbnail"/>
            <h6 class="panel">Description</h6>
          </div>  
          <div class="large-3 small-6 columns">
            <img src="http://placehold.it/250x250&text=Thumbnail"/>
            <h6 class="panel">Description</h6>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="row">
  <div class="large-12 columns">
    <div class="row">
      <div class="large-8 columns">
        <div class="panel radius">

        <div class="row">
          <div class="large-6 small-6 columns">

            <h4>Header</h4><hr/>
            <h5 class="subheader">Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Donec dignissim nibh fermentum odio ornare sagittis.
            </h5>

            <div class="show-for-small" align="center">
              <a href="#" class="small radius button" data-reveal-id="pricelist">Call To Action!</a>

              <br>

              <a href="#" class="small radius button">Call To Action!</a>
            </div>
          </div>
        <div class="large-6 small-6 columns">

          <p>
          </p>
        </div>
      </div>
    </div>
  </div>

      <div class="large-4 columns hide-for-small">
        <h4>Get In Touch!</h4><hr/>
        <a class="large button expand" href="#" data-reveal-id="pricelist">Call To Action!</a>
        <a class="large button expand" href="#">Call To Action!</a>
      </div>
    </div>
  </div>
</div>

<!-- Foundation Reveal - Price list modal -->
<div id="pricelist" class="reveal-modal" data-reveal>
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
  <a class="close-reveal-modal">&#215;</a>
</div>
    
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bower_components/foundation/js/foundation.min.js"></script>
  <script src="js/app.js"></script>
</body>
</html>
