<?php
    ob_start();

    $timezone = date_default_timezone_set("Europe/London");

    $connection = mysqli_connect("localhost","root","","Spotify");

    if(mysqli_connect_errno()){
        echo "Faild to connect: " . mysqli_connect_errno();
    }
