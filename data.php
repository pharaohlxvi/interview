<?php
  // User Info
  $myfile = fopen("./data/user.json", "r") or die("Unable to open file!");
  $user = json_decode(fread($myfile, filesize("./data/user.json")));
  fclose($myfile);

  // Events info
  $myfile = fopen("./data/events.json", "r") or die("Unable to open file!");
  $events = json_decode(fread($myfile, filesize("./data/events.json")));
  fclose($myfile);

  // Articles info
  $myfile = fopen("./data/articles.json", "r") or die("Unable to open file!");
  $articles = json_decode(fread($myfile, filesize("./data/articles.json")));
  fclose($myfile);

  // Initialize array of event's tags
  $interests = array();
  foreach ($events as $event) {
    $interests[$event->id] = 0;
  };

  // Populate array counting according to user's interests
  foreach ($events as $event) {
    foreach ($user->interests as $interest) {
      if (in_array($interest, $event->tags)) {
        $interests[$event->id] += 1;
        // var_dump($interests);
        // echo key($interests);
      };
    };
  };
  // Sort array in descending order
  arsort($interests);
  $interests = array_keys($interests);
?>