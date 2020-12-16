<?php
    //connecting to db
    //$servername = "localhost:3307";
    $servername = " sql12.freemysqlhosting.net";
    $username = "sql12382461";
    $password = "nHadcdCfzd";
    $database = "sql12382461";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("Sorry! Cannot connect to database right now");
    }

?>
