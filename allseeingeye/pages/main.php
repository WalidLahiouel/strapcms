<?php

if (!defined('IN_HK') || !IN_HK)
{
	exit;
}

if (!HK_LOGGED_IN)
{
	exit;
}

require_once "top.php";
?>			
<p>
	<h1>Staff Panel</h1>
</p>

<center><p>
	<a style="font-size: 120%;" href="uberdown">
	

		
		<b style="color: darkred; font-size: 120%;">
		HOTEL DOWN? CLICK HERE!
		</b>
	
	</a>
</p>
</center>
<br />


<br />

<br /><br />


<?php

require_once "bottom.php";

?>