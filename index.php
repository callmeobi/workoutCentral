<?php
include ("includes/config.php");

//session_destroy(); LOGOUT FUNCTION

  if (isset($__SESSION['userLoggedIn'])) {
    $userLoggedIn = $_SESSION['userLoggedIn'];
  } else {
    header("Location: register.php");
  }

 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WorkoutCentral!</title>
  </head>
  <body>

  </body>
</html>
