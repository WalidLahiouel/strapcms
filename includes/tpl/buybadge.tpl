<?php

$getSettings = dbquery("SELECT * FROM users WHERE username = '" . USER_NAME . "'");
$userAccount = mysql_fetch_assoc($getSettings);

$checkUserBadges = dbquery("SELECT * FROM user_badges WHERE user_id = '" . USER_ID . "'");
$userBadges = mysql_fetch_assoc($checkUserBadges);

$getBadges = dbquery("SELECT * FROM badge_shop");

	if(isset($_POST["BUY_BADGE"]))
	{
		$badge_id = filter($_POST["lolcats"]);
		$user_creds = $userAccount["credits"];
		if (mysql_num_rows(mysql_query("SELECT * FROM badge_shop WHERE badge_id = '" . $badge_id . "'")))
		{
			$getPrice = mysql_result(mysql_query("SELECT cost FROM badge_shop WHERE badge_id = '" . $badge_id . "'"), 0);
			
			if($user_creds < $getPrice)
			{
				header("Location: badgeshop.php?err=bal");
			}
			elseif($user_creds > $getPrice)
			{
				if(mysql_result(mysql_query("SELECT `online` FROM `users` WHERE `id` = '" . USER_ID . "'"), 0) == 1)
				{
					Header("Location: badgeshop.php");
				}
			
				dbquery("INSERT INTO user_badges (user_id, badge_id, badge_slot) VALUES ('" . USER_ID . "', '" . $badge_id . "', '0')");
				dbquery("UPDATE users SET credits = credits - '" . $getPrice . "' WHERE id = '" . USER_ID . "'");
			
				$_SESSION["badge"] = $badge_id;
				Header("Location: badgeshop.php?bought=" . $_SESSION["badge"] . "");
			}
		}	
	}
?>
<div class="habblet-container ">		
<div class="cbb clearfix red "> 

<h2 class="title">Badge Shop</h2>
<center>

You have <b><?php echo number_format($userAccount["credits"]); ?> coins</b> to spend<br>
<?php
if($userAccount["online"] == 1 && USER_ID != 1)
{
	echo "<b><font color='darkred'><h3>Stop! It seems you're currently logged into the hotel.<br />Please close your client to continue.</b></font></h3>";
}
elseif(isset($_GET["err"]) && $_GET["err"] == "bal")
{
	echo "<b><font color='darkred'><h3>Aha! It seems you don't have the right amount of coins.<br />That sucks, but you can always <a href='badgeshop.php'>return to the shop</a>.</b></font></h3>";
}
elseif(isset($_GET["bought"]))
{
	if(!isset($_SESSION["badge"])) { header("Location: badgeshop.php"); }
	
	unset($_SESSION["badge"]);
	
	$bought = filter($_GET["bought"]);
	echo "<img src='c_images/album1584/" . $bought . ".gif'><br />Badge purchased, <a href='badgeshop.php'>continue shopping</a>.";
}
else
{ 
        echo '<table border="0">';
	while($badgeShit = mysql_fetch_assoc($getBadges))
	{
		echo '
			<tr>
			<td align="center"><img src="./c_images/album1584/' . $badgeShit['badge_id'] . '.gif"> </td>
			<td>This badge costs <b>' . number_format($badgeShit['cost']) . ' credits</b>. <form method="post"><input type="submit" value="Buy" name="BUY_BADGE"><input type="hidden" value="' . $badgeShit['badge_id'] . '" name="lolcats"></form></td>
			</tr>';
	} 
        echo '</table>';
}
?>
</center>
</div></div>