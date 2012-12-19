<?php
$hotel = 'http://www.habbo.com/';


$url = $hotel.'habbo-imaging/avatarimage?'.http_build_query($_GET);
header('Content-Type: image/png');
exit(file_get_contents($url));
?>