<?php

$getSettings = dbquery("SELECT * FROM users WHERE username = '" . USER_NAME . "'");
$userAccount = mysql_fetch_assoc($getSettings);


# lets do this!

if(isset($_GET["buyfurni"]))
{
	if($_GET["buyfurni"] == "")
	{
		
	}	
}
?>
<div class="habblet-container ">		
<div class="cbb clearfix red "> 

<h2 class="title">Badge Shop</h2>
<center>
You can buy ultras/supers in this shop | Your points: <b><?php echo $userAccount["points"]; ?></b><br><b><h3><font color='darkred'>You cannot be logged onto the client during these purchases, if you are, you will not recieve your furni.</font color></b><br>
</h3>
</center>
</div></div>