<div class="habblet-container" style="float:left; width: 560px;"> 
<div class="cbb clearfix settings"> 
 
<h2 class="title">Redeem Goldbars</h2> 
<div class="box-content"> 
<?php
/*
$user_has = mysql_num_rows(mysql_query("SELECT * FROM items WHERE base_item = '1145' AND user_id = '" . USER_ID ."' AND room_id = '0'"));
if(mysql_result(mysql_query("SELECT online FROM users WHERE id = '" . USER_ID . "'"), 0) == 1)
{
	echo '<div class="rounded rounded-red" width="20%">
					Please close your game client before using this page.<br />
				</div>
				<div>&nbsp;</div>';
}
else
{
	if(isset($_POST["REDEEM"]))
	{
			
		$derp = filter($_POST["amt"]);
		
		$length = strlen($derp);
		$amt = '';
		for($i = 0; $i < $length; $i++)
		{
			$temp = ord(substr($derp, $i, 1));
			
			if($temp > 47 && $temp < 58)
			$amt .= chr($temp);
		}

		if(strlen($amt) == 0) $amt = 0;

		$amt_rd = $amt * 500;
		if($amt == 0) {
		define('ERROR', '<div class="rounded rounded-red" width="20%">
					You need to type a number.<br />
				</div>
				<div>&nbsp;</div>'); }		
		if($amt > 150) {
		define('ERROR', '<div class="rounded rounded-red" width="20%">
					You cannot redeem more than 150 gold bars at a time for security reasons.<br />
				</div>
				<div>&nbsp;</div>'); }
		if($user_has < $amt)
		{
			define('ERROR', '<div class="rounded rounded-red" width="20%">
					You do not have this many Gold Bars in your hand to redeem.<br />
				</div>
				<div>&nbsp;</div>');
		}
		else
		{
			define('SUCCESS', '<div class="rounded rounded-green" width="20%">
					You successfully redeemed ' . $amt . ' Gold Bars for ' . $amt_rd . ' credits. <br />
				</div>
				<di v>&nbsp;</div>');
			mysql_query("DELETE FROM items_users WHERE user_id = '" . USER_ID . "' AND base_item = '1145' AND room_id = '0' LIMIT " . $amt . "");
			mysql_query("UPDATE users SET credits = credits + '" . $amt_rd . "' WHERE id = '" . USER_ID . "'");
			$user_has = mysql_num_rows(mysql_query("SELECT * FROM items WHERE base_item = '1145' AND user_id = '" . USER_ID ."' AND room_id = '0'"));
		}
	}
	if(defined('ERROR')) { echo ERROR; } elseif(defined('SUCCESS')){ echo SUCCESS; }
?>
<img src='images/goldbar.png' align='left'>You have <b><?php echo $user_has; ?></b> Goldbars in your hand.<br /><br /><br /><br />
<form method="post">
How many Gold Bars do you wish to redeem?<br />
<input type="text" name="amt" /><br />
<br />
<input type="submit" value="Exchange Goldbars" name="REDEEM" />
</form>
<?php
}
*/
?>
</div> 

</div> 
</div> 