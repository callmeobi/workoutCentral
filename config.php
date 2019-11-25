<?php

    ob_start();
    session_start();

    $timezone = date_default_timezone_set("Europe/London");

    $con = mysqli_connect("localhost", "root", "", "workoutcentral");

    if (mysqli_connect_errno()) {
        echo "Failed to Connect: ". mysqli_connect_errno();
    }

 ?>
