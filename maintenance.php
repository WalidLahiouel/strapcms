<?php
	/*
	  	     |
		.   .|---.,---.,---.
		|   ||   ||---'|     	UberCMS 2.0
		`---'`---'`---'`
			UberCMS
			Coded originally by Meth0d (2010-2011)
			Continued by Jonty (2011-now)
			
			Build 2.0.0 SS, Public
	*/

define('IN_MAINTENANCE', true);

require_once "global.php";

if (!defined('FORCE_MAINTENANCE') || !FORCE_MAINTENANCE)
{
	header("Location: " . WWW . "/");
	exit;
}
else if (LOGGED_IN && $users->HasFuse(USER_ID, 'fuse_ignore_maintenance'))
{
	header("Location: " . WWW . "/");
	exit;
}

$tpl->Init();
$tpl->AddGeneric('page-maintenance');
$tpl->AddGeneric('footer');
$tpl->Output();

?>
