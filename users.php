<?php
require_once "global.php";
$newkey = md5(rand(1,500) . rand(1,600) . rand(1,500));
echo $newkey;

?>