<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Interview</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./styles.css">
    <!-- Map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
      integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
      crossorigin=""
    />
    <!-- Map scripts -->
    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
      integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
      crossorigin="">
    </script>
	  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
  </head>
  <body>
    <?php include ('./data.php'); ?>
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <header>
      <div class="header">
        <img src="./images/logo.png" alt="" class="logo">
      </div>
    </header>
    <div class="container">
      <div class="articles">
        <div class="articles_title">
          <h3>Articles</h3>
        </div>

        <div class="articles_list">

          <!-- Loops through articles and display each of them -->
          <?php foreach ($articles as $article): ?>
            <div class="article">
            <div class="article_title">
              <p><?php echo $article->title; ?></p>
            </div>
            <div class="article_img">
              <img src="<?php echo $article->image; ?>" alt="">
            </div>
            <div class="article_text">
              <?php echo $article->content; ?>
            </div>
          </div>
          <?php endforeach; ?>

        </div>
      </div>

      <div class="events">
        <div class="events_title">
          <h3>Events</h3>
        </div>
        <div class="events_body">

          <!-- Loops through events and displays them -->
          <?php foreach ($interests as $interest): ?>
            <div class="event">
              <span class="event_title"><strong><?php echo $events[$interest - 1]->title; ?></strong></span>
              <p><strong>Location: </strong><?php echo $events[$interest - 1]->location; ?></p>
              <p><strong>Date: </strong><?php echo $events[$interest - 1]->date; ?></p>
            </div>
          <?php endforeach; ?>

          <div id="mapid"></div>

          </div>
        </div>
      </div>

    </div>

        <script>
          var mymap = L.map('mapid').setView([<?php echo $user->geo->lat ?>, <?php echo $user->geo->lng ?>], 10);

          L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox.streets',
            accessToken: 'pk.eyJ1IjoicGhhcmFvaGx4dmkiLCJhIjoiY2pxNnZkajVjMjk5dDN4cDNseTUzeTJidiJ9.3TlNJ6lhRF4KzQUzowo9Tg'
          }).addTo(mymap);

          var userMarker = 
            L.marker([<?php echo $user->geo->lat ?>, <?php echo $user->geo->lng ?>])
            .addTo(mymap)
            .bindPopup("Your location").openPopup();

          <?php foreach ($events as $e): ?>

            var eventMarker = L.marker([<?php echo $e->geo->lat ?>, <?php echo $e->geo->lng ?>]).addTo(mymap);
          
          <?php endforeach; ?>
          
        </script>

    </script>

  </body>
</html>