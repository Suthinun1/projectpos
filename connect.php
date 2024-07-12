<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'db_osproject';

    $conn = new mysqli($hostname,$username,$password,$dbname);

    if (!$conn) {
        echo "error" . mysql_connect_error();
    }
?>