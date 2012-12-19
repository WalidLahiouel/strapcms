<?php

	// Password changing script for UberCMS
	// Recoded: 6th March 2012.
	// Copyright (c) Jonty M
	
	if(isset($_POST["SET_NEW_VALUES"])) {
	if(isset($_POST["old_password"]) && isset($_POST["password_one"]) && isset($_POST["password_two"]))
	{
		// Process the $_POST data, encrypt it so it cannot be exploited & prepare it so
		// it can be compared with the hash in the database.
		$user['old_password'] = $users->UserHash($_POST["old_password"], strtolower(USER_NAME));
		$user['new_pass_one'] = $users->UserHash($_POST["password_one"], strtolower(USER_NAME));
		$user['new_pass_two'] = $users->UserHash($_POST["password_two"], strtolower(USER_NAME));
		
		// Get the users variables from the database
		$user['current_password'] = mysql_result(mysql_query("SELECT password FROM users WHERE username = '" . USER_NAME . "'"), 0);
		
		if($user['old_password'] == $user['current_password'])
		{
			if($user['new_pass_one'] == $user['new_pass_two'])
			{
				mysql_query("UPDATE users SET password = '" . $user['new_pass_two'] . "' WHERE username = '" . USER_NAME . "'");
				$_SESSION["UBER_USER_N"] = USER_NAME;
				$_SESSION["UBER_USER_H"] = $user['new_pass_two'];
				
				define('success', "Password changed successfully.");
			}
			else
			{
				define('error', "Your new passwords need to match.");
			}
		}
		else
		{
			define('error', "Your old password doesn't match with the one we have on our records.");
		}
	}
	else
	{
		define('error', "Please fill in all the fields.");
	}
}

?>
<div class="habblet-container" style="float:left; width: 560px;"> 
<div class="cbb clearfix settings"> 
 
<h2 class="title">Edit your Zap Account</h2> 
<div class="box-content"> 
<?php
if(defined('success'))
{
	?>
 	<div class="rounded rounded-green">
		<?php echo success; ?><br />
	</div>
	<div>&nbsp;</div>
<?php
}
else if(defined('error'))
{
	?>
	<div class="rounded rounded-error">
		<?php echo error; ?><br />
	</div>
	<div>&nbsp;</div>
<?php
}
?>

<form method="post">
Current Password <br /> <input type="password" name="old_password" /> <br /> <br />
New Password <br /> <input type="password" name="password_one" /> <br /><br />
Verify New Password <br / > <input type="password" name="password_two"/> <br />
<br />
<input type="submit" value="Change Password" name="SET_NEW_VALUES" />
</form>
</div> 

</div> 
</div> 