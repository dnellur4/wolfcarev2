<?php

    $database= new mysqli("localhost","root","","wolfcare");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>