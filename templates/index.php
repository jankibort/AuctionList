<?php
    //vars:
    $host = "postgresql";
    $port = 5432;
    $dbname = "data";
    $user = "sm";
    $password = "qwe123";
    //db query vars
    $conn = pg_connect("host=$host  port=$port  dbname=$dbname user=$user password=qwe123");

    echo "Hello, it's php " . phpversion() . " version. You are " . ($conn ? 'connected' : 'not connected') . " to database";



