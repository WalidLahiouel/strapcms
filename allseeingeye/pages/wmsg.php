<?php

if (!defined('IN_HK') || !IN_HK)
{
	exit;
}

if (!HK_LOGGED_IN || !$users->hasFuse(USER_ID, 'fuse_admin'))
{
	exit;
}

if (isset($_POST['welcome']))
{
	dbquery("UPDATE server_settings SET motd = '" . filter($_POST["welcome"]) . "'");
}

require_once "top.php";

?>			

<h1>Change welcome message</h1>

<br />

<p>
Change the welcome message to the hotel.	</i>
</p>

<br />

<p>
<?php if (isset($_POST['welcome'])) { ?>
<h1 style="padding: 15px;">Changed. <a href="http://zaphotel.net/manage/index.php?_cmd=main">Return to dashboard</a></h1> <?php } else { ?>
<form method="post">

<textarea name="welcome" cols="30" rows="3"></textarea>
<input type="submit" value="Post">

</form>
</p>
<?php
}

require_once "bottom.php";

?>
