<div class="habblet-container ">		
<div class="cbb clearfix red "> 

<h2 class="title">Buy VIP</h2>
<div class="box-content"> 
<div style="text-align: left;">
		Are you interested in one of our packages to the left? Select which one you want from the drop-down box, and press Purchase.
		<br />
		<br />
	</div>
	<div style="text-align:right;">
	<?php if(mysql_result(mysql_query("SELECT `online` FROM `users` WHERE `id` = '" . USER_ID . "'"), 0) == 1) { ?>
		<h4>Please close your game client before purchasing VIP.</h4>
	<?php } else { ?>
	<form method="post" action='viplink.php'>
		<select name="VIP">
		<option value='2'>Super VIP, Level 2 ($7.50)</option>
		<option value='3'>Super VIP, Level 3 ($10.00)</option>
		<option value='4'>Super VIP, Level 4 ($15.00)</option>
		<option value='5'>Ultra VIP, Level 5 ($20.00)</option>
		<option value='6'>Ultra VIP, Level 6 ($25.00)</option>
		<option value='7'>Platinum VIP, Level 7 ($30.00)</option>
		<option value='8'>Platinum VIP, Level 8 ($35.00)</option>
		<option value='9'>Platinum VIP, Level 9 ($50.00)</option>
		<option value='10'>Ultimate VIP, Level 10 ($100.00)</option>
		</select>
		<br /> <br />
		<input type="submit" name="ChooseVIP" value="Purchase VIP using PayPal / Credit Card">
	</form>
	<?php } ?>
</div>
<br />

<div style="text-align:left;">
	<font size='2' color='red'><b>*</b> PLEASE KEEP THE CLIENT CLOSED WHILST PURCHASING.</font><br />
</div>
</div>

</div></div>