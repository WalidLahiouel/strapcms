<?php

if (!defined('IN_HK') || !IN_HK)
{
	exit;
}

if (!HK_LOGGED_IN || !$users->hasFuse(USER_ID, 'fuse_admin'))
{
	exit;
}

if (isset($_POST['username']))
{
$u = $_POST['username'];
mysql_query("UPDATE users SET rank = '3' WHERE username = '$u'");
mysql_query("UPDATE users SET credits = credits + '2000000' WHERE username = '$u'");
mysql_query("UPDATE users SET activity_points = activity_points + '2000000' WHERE username = '$u'");
// gotta grab their id
$getid = mysql_fetch_assoc(mysql_query("SELECT * FROM users WHERE username = '$u'"));
$id = $getid['id'];
mysql_query("INSERT into user_badges VALUES ('".$id."', 'VIP', '0')");
mysql_query("UPDATE users SET vip = '1' WHERE username = '$u'");

$core->Mus('updateCredits', 'ALL');
}

require_once "top.php";

?>			

<h1>Make someone super vip</h1>

<br />

<p>
Make a user SUPER VIP	</i>
</p>

<br />

<p>
<?php if (isset($_POST['username'])) { ?>
<h1 style="padding: 15px;">Done.<a href="http://zaphotel.net/manage/index.php?_cmd=main"> Return to dashboard</a></h1> <?php } else { ?>
<form method="post">

Username: <input type='text' name='username' maxlength='20'>
<input type="submit" value="kgo!">

</form>
</p>
<?php
}

require_once "bottom.php";

?>
