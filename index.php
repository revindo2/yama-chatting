<?php
	header('Access-Control-Allow-Origin: *');

        $url_varian = "https://www.solusiprogram.net/cl/buana/api/api/test/upload_drive";

        $get_varian = file_get_contents($url_varian);

        $json_varian = json_decode($get_varian, true);
       
        echo "<pre>";
        echo $json_varian;
?>