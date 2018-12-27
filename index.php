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

          <div class="article">
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

          <div class="article">
            <div class="article_title">
              <p><?php echo $articles[1]->title; ?></p>
            </div>
            <div class="article_img">
              <img src="<?php echo $articles[1]->image; ?>" alt="">
            </div>
            <div class="article_text">
              <?php echo $articles[1]->content; ?>
            </div>
          </div>

          <div class="article">
            <div class="article_title">
              <p><?php echo $articles[2]->title; ?></p>
            </div>
            <div class="article_img">
              <img src="<?php echo $articles[2]->image; ?>" alt="">
            </div>
            <div class="article_text">
              <?php echo $articles[2]->content; ?>
            </div>
          </div>

          <div class="article">
            <div class="article_title">
              <p><?php echo $articles[3]->title; ?></p>
            </div>
            <div class="article_img">
              <img src="<?php echo $articles[3]->image; ?>" alt="">
            </div>
            <div class="article_text">
              <?php echo $articles[3]->content; ?>
            </div>
          </div>

          <div class="article">
            <div class="article_title">
              <p><?php echo $articles[4]->title; ?></p>
            </div>
            <div class="article_img">
              <img src="<?php echo $articles[4]->image; ?>" alt="">
            </div>
            <div class="article_text">
              <?php echo $articles[4]->content; ?>
            </div>
          </div>

          <div class="article">
            <div class="article_title">
              <p><?php echo $articles[5]->title; ?></p>
            </div>
            <div class="article_img">
              <img src="<?php echo $articles[5]->image; ?>" alt="">
            </div>
            <div class="article_text">
              <?php echo $articles[5]->content; ?>
            </div>
          </div>

        </div>
      </div>

      <div class="events">
        <div class="events_title">
          <h3>Events</h3>
        </div>
        <div class="events_body">
          <div class="event">
            <span class="event_title"><strong><?php echo $events[$interests[0] - 1]->title; ?></strong></span>
            <p><strong>Location: </strong><?php echo $events[$interests[0] - 1]->location; ?></p>
            <p><strong>Date: </strong><?php echo $events[$interests[0] - 1]->date; ?></p>
          </div>

          <div class="event">
            <span class="event_title"><strong><?php echo $events[$interests[1] - 1]->title; ?></strong></span>
            <p><strong>Location: </strong><?php echo $events[$interests[1] - 1]->location; ?></p>
            <p><strong>Date: </strong><?php echo $events[$interests[1] - 1]->date; ?></p>
          </div>

          <div class="event">
            <span class="event_title"><strong><?php echo $events[$interests[2] - 1]->title; ?></strong></span>
            <p><strong>Location: </strong><?php echo $events[$interests[2] - 1]->location; ?></p>
            <p><strong>Date: </strong><?php echo $events[$interests[2] - 1]->date; ?></p>
          </div>

          <div class="event">
            <span class="event_title"><strong><?php echo $events[$interests[3] - 1]->title; ?></strong></span>
            <p><strong>Location: </strong><?php echo $events[$interests[3] - 1]->location; ?></p>
            <p><strong>Date: </strong><?php echo $events[$interests[3] - 1]->date; ?></p>
          </div>
        </div>
      </div>

    </div>
    <script src="" async defer></script>
  </body>
</html>