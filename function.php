<?php 
    date_default_timezone_set("Asia/Jakarta");

    function waktu($format = "default"){
        if ($format == "default") {
            $time = date("H.i d/m/Y");
        }
        else{
            $time = "PTK-".date("HisdmY");
        }
        return $time;
    }

    echo "Ini buat format tanggal: ".waktu()."<br>";

    echo "Ini buat format No transaksi: ".waktu("invoice")
?>