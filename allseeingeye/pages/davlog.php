<?php

$con = mysql_connect("localhost", "root", "rofcats666") or die(mysql_error());
$db = mysql_select_db("dav_logs");

$gL = mysql_query("SELECT * FROM logs");
while($sL = mysql_fetch_assoc($gL))
{
	$gN = mysql_query("SELECT * FROM logs WHERE ip = '".$sL['ip']."'");
	$sN = mysql_num_rows($gN);
	echo "<font face='tahoma'> Address: " . $sL['ip'] . " | Attempts: " . $sL['attempts'] . "<br>";
	echo "</font face>";
}
?>