<?php
	if(mysql_result(dbquery("SELECT `online` FROM `users` WHERE `username` = '" . USER_NAME . "'"), 0) == 1)
	{
		define("ERROR", "Please sign out of the hotel before continuing.");
	}
	elseif(isset($_POST["V_SUBMIT"]))
	{
		if(mysql_result(dbquery("SELECT `online` FROM `users` WHERE `username` = '" . USER_NAME . "'"), 0) == 1)
		{
			define("ERROR", "Please sign out of the hotel before continuing.");
		}
		elseif(isset($_POST["V_CODE"]))
		{
			$code = filter($_POST["V_CODE"]);
			if(mysql_num_rows(dbquery("SELECT * FROM `vip_codes` WHERE `key` = '" . $code . "'")))
			{
				if(mysql_result(dbquery("SELECT `redeemed` FROM `vip_codes` WHERE `key` = '" . $code . "'"), 0) == 0)
				{
					$helpful = "SELECT `product` FROM `vip_codes` WHERE `key` = '" . $code . "'";
					if(mysql_result(dbquery($helpful), 0) == "Platinum VIP")
					{
						dbquery("UPDATE `vip_codes` SET `redeemed` = '1', `redeemed_by` = '" . USER_NAME . "' WHERE `key` = '" . $code . "'");
						dbquery("UPDATE `users` SET `rank` = '4' WHERE `username` = '" . USER_NAME . "'");
						dbquery("UPDATE `users` SET `credits` = `credits` + '5000000' WHERE `username` = '" . USER_NAME . "'");
						dbquery("UPDATE `users` SET `vip` = '1' WHERE `username` = '" . USER_NAME . "'");
						dbquery("UPDATE `users` SET `activity_points` = `activity_points` + '5000000' WHERE `username` = '" . USER_NAME . "'");
						dbquery("INSERT INTO `user_badges` VALUES ('" . USER_ID . "', 'VIP', '0')");
						Header("Location: http://zaphotel.net/redeem.php");
					}
					elseif(mysql_result(dbquery($helpful), 0) == "Super VIP")
					{
						dbquery("UPDATE `vip_codes` SET `redeemed` = '1', `redeemed_by` = '" . USER_NAME . "' WHERE `key` = '" . $code . "'");
						dbquery("UPDATE `users` SET `rank` = '3' WHERE `username` = '" . USER_NAME . "'");
						dbquery("UPDATE `users` SET `vip` = '1' WHERE `username` = '" . USER_NAME . "'");
						dbquery("UPDATE `users` SET `credits` = `credits` + '2000000' WHERE `username` = '" . USER_NAME . "'");
						dbquery("UPDATE `users` SET `activity_points` = `activity_points` + '2000000' WHERE `username` = '" . USER_NAME . "'");
						dbquery("INSERT INTO `user_badges` VALUES ('" . USER_ID . "', 'VIP', '0')");
						Header("Location: http://zaphotel.net/redeem.php");
					}
					elseif(mysql_result(dbquery($helpful) , 0) == "Throne")
					{
						dbquery("UPDATE `vip_codes` SET `redeemed` = '1', `redeemed_by` = '" . USER_NAME . "' WHERE `key` = '" . $code . "'");
						define("ERROR", "Thrones currently aren't automatic. Please contact an admin!");
					}
					else
					{
						echo "Invalid product type. Contact administration.";
					}
				}
				else
				{
					define("ERROR", "This code has already been used.");
				}
			}
			else
			{
				define("ERROR", "This code doesn't exist or you haven't entered one.");
			}
		}
		else
		{
			define("ERROR", "You need to actually enter a code for this to work.");
		}
	}
?>

<div class="habblet-container ">		
<div class="cbb clearfix red "> 
<h2 class="title">Redeem a code</h2>
<div id="habboclub-info" class="box-content">
<div style="text-align: center;">
<?php if(defined("ERROR"))
	{
		echo ERROR . " <a href='http://zaphotel.net/redeem.php'>Go back</a>";
	}
	else
	{
	?>
<form method="post">
<input type="text" name="V_CODE">
<input type="submit" name="V_SUBMIT" value="Redeem">
</form>
<?php }
	if(defined("SUCCESS"))
	{
		echo SUCCESS . " <a href='redeem.php'>Go back</a>";
	}
?>
</div></div>
</div></div>