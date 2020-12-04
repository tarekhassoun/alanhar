<?php

// Connects to my Database 
$mysqli = new mysqli(
    SQL_DB_HOSTNAME,
    SQL_DB_USERNAME,
    SQL_DB_PASSWORD,
    SQL_DB_DBNAME
);

if ($mysqli->connect_errno) {
    echo "Failed to connect to DB";
    //TODO log error message
    exit();
}


$time_zone_sql = "SET time_zone='0:00'";
$time_zone_query = $mysqli->prepare($time_zone_sql);
$time_zone_query->execute();
