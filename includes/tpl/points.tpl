<div class="habblet-container ">		
<div class="cbb clearfix red "> 

<h2 class="title">3 Points ($3)</h2>
<?php $Z = mysql_fetch_assoc(mysql_query("SELECT * FROM users WHERE username = '" . USER_NAME . "'"));
	if($Z['online']=="1")
	{
		echo "<center><b>Please log out of the client before purchasing VIP to avoid glitches</center></b>";
	}
	else
	{
	?>
<center>
<br>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="custom" value="<?php echo USER_ID; ?>">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/WEBSCR-640-20110401-1/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/WEBSCR-640-20110401-1/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</center>

<?php } ?>

</div></div>