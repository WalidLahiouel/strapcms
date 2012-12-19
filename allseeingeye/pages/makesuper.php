<?php
if (!defined('IN_HK') || !IN_HK)
{
	exit;
}

if (!HK_LOGGED_IN || !$users->hasFuse(USER_ID, 'fuse_admin'))
{
	exit;
}

$username = '';
if (isset($_GET['username']))
{
	$username = $_GET['username'];
	echo $username;
}
switch($username)
{
	case "username":
		echo 'user : ' .$username . ' is now a super vip';
	break;
}
?>