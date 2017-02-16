<?php

require_once('vendor/autoload.php');

$rjs = new ReactJS(
  // location of React's code
  file_get_contents('build/react-bundle.js'),
  // app code
  file_get_contents('build/app.js')
);

$data = [
  "time" => date("H:i:s")
];

$rjs->setComponent('App', $data);
?>
<!doctype html>
<html>
  <head>
    <title>React from PHP</title>
    <link rel="stylesheet" href="./public/app.css">
  </head>
  <body>
    <div id="app"><?php echo $rjs->getMarkup(); ?></div>

    <!-- load react and app code -->
    <script src="build/react-bundle.min.js"></script>
    <script src="build/app.js"></script>

    <!-- client-side render -->
    <script>
    <?php echo $rjs->getJS('#app', "GLOB"); ?>
    </script>
  </body>
</html>
