<?php

if (!defined('IN_HK') || !IN_HK)
{
	exit;
}

if (!HK_LOGGED_IN || !$users->hasFuse(USER_ID, 'fuse_admin'))
{
	exit;
}

if (isset($_POST['badge']))
{
$badge = $_POST['badge'];
$price = $_POST['price'];

dbquery("INSERT INTO badge_shop (badge_id, cost) VALUES ('" . $badge . "', '" . $price . "')");
}

require_once "top.php";

?>			

<h1>Add a badge to the shop</h1>

<br />

<p>
Add a badge to the point shop	</i>
</p>

<br />

<p>
<?php if (isset($_POST['badge'])) { ?>
<h1 style="padding: 15px;">Done<br><a href="http://zaphotel.net/manage/index.php?_cmd=main"> Return to dashboard</a></h1> <?php } else { ?>
<form method="post">

Badge: <input type='text' name='badge' maxlength='20'><br>
Price: <input type='text' name='price' maxlength='20'><br>
<input type="submit" value="kgo!">

</form>
</p>
<?php
}

require_once "bottom.php";

?>
