<?php 
    // konfigurasi database
    $hostname = "";
    $username = "";
    $password = "";
    $database = "";

    $conf = mysqli_connect($hostname,$username,$password,$database);
    if($conf){
        $dbStatus = true;
    }
    else{
        $dbStatus = false;
    }
?>