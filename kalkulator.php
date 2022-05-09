<?php 
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "nazwa_bazy";
    $conn = mysqli_connect($dbhost,$dbuser, $dbpass, $dbname);
    $zap = "zapytanie np. SELECT...";
    $result = mysqli_query($conn, $zap);
    mysqli_close($conn);
?>