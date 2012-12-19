<?php

if (!defined('IN_HK') || !IN_HK)
{
	exit;
}

if (!HK_LOGGED_IN || !$users->hasFuse(USER_ID, 'fuse_admin'))
{
	exit;
}

require "top.php";
	echo "<h1>Hotel Alert Logs</h1><br><br><br<br>";

// echo("<table border=\"1\"><tr><td><b>Alert</b></td><td><b>Author</b></td></tr>");



$getLogs = mysql_query("SELECT alert,author FROM cms_alerts ORDER by author DESC LIMIT 150");
while($row = mysql_fetch_assoc($getLogs))
{
	echo("<b>[AUTHOR: ".$row['author']."]</b> - ".$row['alert']."<br>");
	// echo("<tr><td> " . $row['alert'] . "</td><td>" . $row['author'] . "</td></tr></table>");
}
require "bottom.php";

?>