<?php
if(isset($_POST["claim"]))
{
	$name = mysql_real_escape_string($_POST["horsename"]);
	if(mysql_result(mysql_query("SELECT `online` FROM `users` WHERE `username` = '" . USER_NAME . "'"), 0) == 1)
	{
		define("ERROR", "You are on the hotel/client, please close it and <a href='http://zaphotel.net/me'>reload</a>");
	}
	else
	{
		if(!isset($name))
		{
			define("ERROR", "You need to choose a horse name!");
		}
		else if(mysql_result(mysql_query("SELECT `c_h` FROM `users` WHERE `username` = '" . USER_NAME . "'"), 0) == 1)
		{
			define("ERROR", "You already have a horse!");
		}
		else
		{
			mysql_query("UPDATE `users` SET `c_h` = '1' WHERE `username` = '" . USER_NAME . "'");
			mysql_query("INSERT INTO `user_pets` (`user_id`, `room_id`, `name`, `race`, `color`, `type`, `expirience`, `energy`, `nutrition`, `respect`, `createstamp`, `x`, `y`, `z`) VALUES('" . USER_ID . "', '0', '" . $name . "', '0', 'FFFFFF', '13', '100', '100', '100', '1337', UNIX_TIMESTAMP(now()), '0', '0', '0')") or die(mysql_error());
			define("ERROR", "Your free horse has been claimed.");
		}
	}
}
	
	
	
	echo '<div class="habblet-container ">		
<div class="cbb clearfix blue "> 
<h2 class="title"><span style="float: center;">Claim your free horse!</span> <span style="float: right; font-weight: normal; font-size: 75%;"></span></h2>';
	?>
	 <div id="habboclub-info" class="box-content"> 
<img src="http://zaphotel.net/images/horse-1.png" align="left">
									<?php if(defined("ERROR")){ ?>
									<font color="darkred"><b><?php echo ERROR; ?></b></font><br /><br />
									<?php } else { ?>
									Due to a current error within the hotel catalogue, horses are currently unbuyable through the ingame catalogue. Instead, you can claim your free (on-the-house!)
									horse. We hope to have this issue sorted very soon. <b>Please make sure that when you click the button below, you are not on the hotel, as this will remove your
									chance to get the horse before they are fixed in the catalogue.</b> <br />
									<br />
									<form method="post">
										What do you want to name your horse? <br />
									<?php if(mysql_result(mysql_query("SELECT `c_h` FROM `users` WHERE `username` = '" . USER_NAME . "'"), 0) == 0)
										  { ?>
										<input type="text" name="horsename" maxlength="10"><br />
										<input type="submit" name="claim" value="Claim your free horse!">
										<?php } else { ?>
										<input type="text" value="You already have a horse." disabled="disabled"><br />
										<input type="submit" value="You have already claimed your horse." disabled="disabled">
										<?php } ?>
									</form>
									<?php } ?>
</div>
	 <?php
	echo '</div>
	</div> 

<script type="text/javascript">if (!$(document.body).hasClassName(\'process-template\')) { Rounder.init(); }</script> ';

?>