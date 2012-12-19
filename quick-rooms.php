<?php
	require_once("global.php");
	
	$result = dbquery("SELECT `id`,`caption` FROM `rooms` WHERE `owner` = '".USER_NAME."'");
	$num = mysql_num_rows($result);
	if ($num == 0)
	{
		print "You have no rooms.";
	}
	else
	{
	
	print "<ul id='quickmenu-rooms'>";
	
	$oddeven = "odd";
		
	while ($row = mysql_fetch_array($result, MYSQL_NUM))
	{
		if ($oddeven == "even")
     	$oddeven = "odd";
     else if ($oddeven == "odd")
       $oddeven = "even";
       
     print "<li class='".$oddeven."'><a href='".WWW."/client?forwardId=2&roomId=".$row[0]."' target='uberClientWnd' onclick=\"HabboClient.openOrFocus(this); return false;\">".$row[1]."</a></li>";
	}
		
	print "</ul>";

}
?>

<p class="create-room"><a href="<?php print WWW; ?>/client" target="uberClientWnd" onclick="HabboClient.openOrFocus(this); return false;">Make a new room</a></p>
