<?php

  // Youtube Embed [ https://youtube.com/embed/VIDEO_ID ]

  $video = "https://www.youtube.com/watch?v=kgN7veo9tC0&list=PL93xoMrxRJIsYc9L0XBSaiiuq01JTMQ_o&index=1";
  $parsed_video = parse_url($video, PHP_URL_QUERY);
  parse_str($parsed_video, $result);
  echo "<iframe src='https://youtube.com/embed/" . $result["v"]. "' ></iframe>";