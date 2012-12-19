<?php

require_once "global.php";
echo "<font face='verdana'>";

$getUI = dbquery("SELECT * FROM users WHERE username = '" . USER_NAME . "'");
$UI = mysql_fetch_assoc($getUI);

if($UI['dj'] == 0)
{
	die("<h1>ACCESS DENIED: NOT A DJ</h1>");
}
else
{
	if(isset($_GET["remove"]))
	{
		$remReq = filter($_GET["remove"]);
		dbquery("DELETE FROM dj_req WHERE id = '" . $remReq . "'");
	
		Header("Location: view_req.php");
		echo "Deleted <br /><br />";
	}

	echo "<center><h1>DJ Request Panel</h1><br />";

	$getReq = dbquery("SELECT * FROM dj_req ORDER BY id DESC");
	
	while($req = mysql_fetch_assoc($getReq))
	{
		echo "<b>Requester</b>: " . $req['username'] . " <b>|</b> <b>Message/Song</b>: " . $req['dyn'] . " [<a href='view_req.php?remove=" . $req['id'] . "'>Remove</a>]<br />";
	
	}
}
?>