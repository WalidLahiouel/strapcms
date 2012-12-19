<?php
	if(isset($_POST["PushVote"]))
	{
		$user = mysql_real_escape_string($_POST["User_Vote"]);
		if($user != USER_NAME)
		{
			if(!mysql_num_rows(mysql_query("SELECT ip FROM prom_log WHERE ip = '" . $_SERVER["REMOTE_ADDR"] . "'")))
			{
				if(mysql_num_rows(mysql_query("SELECT * FROM prom_nominees WHERE nominee = '" . $user . "'")))
				{
					mysql_query("UPDATE prom_nominees SET votes = votes + 1 WHERE nominee = '" . $user . "'");
					mysql_query("INSERT INTO prom_log (ip) VALUES('" . $_SERVER["REMOTE_ADDR"] . "')");
					header("Location: prom.php");
				}
				else
				{
					define('ERR', 'User has not been nominated.');
				}
			}
			else
			{
				header("Location: prom.php");
			}
		}
		else
		{
			define('ERR', 'You cannot vote for yourself.');
		}
	}
	
			$form = '<form method="post">
			<input type="text" name="User_Vote" disabled="disabled">
			<input type="submit" name="PushVote" disabled="disabled" value="Voting is now closed.">
		  </form>';
		echo '<div class="habblet-container ">		
		<div class="cbb clearfix blue "> 
			<h2 class="title">Vote now!</h2>
				<div id="habboclub-info" class="box-content">
					<div style="text-align: center;">';
	if(defined('ERR'))
	{
		echo ERR;
	}
	else
	{
		echo "<b>NOTE:</b> Staff are most likely to be at the top. If a staff member wins, the prize is given to the closest non-staff runner up. <br /><br />";
	}
	echo $form;
?>

					</div>
				</div>
		</div>
	</div>