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
          <div class="article" id="article1">
            <div class="article_title">
              <p><?php echo $articles[0]->title; ?></p>
            </div>
            <div class="article_img">
              <img src="<?php echo $articles[0]->image; ?>" alt="">
            </div>
            <div class="article_text">
              <?php echo $articles[0]->content; ?>
            </div>
          </div>
          <div class="article" id="article2">
            <p>Hi2</p>
          </div>
        </div>
      </div>
      <div class="events">
        <div class="events_title">
          <h3>Events</h3>
        </div>
      </div>
    </div>
    <script src="" async defer></script>
  </body>
</html>