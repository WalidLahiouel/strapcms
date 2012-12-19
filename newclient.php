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

	require_once "global.php";

if (!LOGGED_IN)
{
	header("Location: " . WWW. "/");
	exit;
}

if ($voting['thehabbos_enabled'] == true) {
	if (!isset($_GET["novote"])) {
		header("Location: http://votingapi.com/vote.php?username=" . $voting['thehabbos_username'] . "&api=" . WWW . "/client?novote");
	}
}

if($site['enable_pincodes'] == true && $users->GetUserVar(USER_ID, 'rank') >= $site['pincode_minrank']) {
	if(!isset($_SESSION["staff_PassAuth"])) {
		header ("Location: " . WWW . "/client_denied");
	}
}

// **************************************************************************************************************
// **************************************************************************************************************
$users->CheckSSO(USER_ID);


$userTicket = $users->GetUserVar(USER_ID, 'auth_ticket');

if($server['butterfly_sso'] == true) {
	$checkExists = dbquery("SELECT userid FROM user_tickets WHERE userid = '" . USER_ID . "'");
	if(mysql_num_rows($checkExists)) {
		dbquery("UPDATE user_tickets SET sessionticket = '" . $userTicket . "', ipaddress = '" . $_SERVER["REMOTE_ADDR"] . "' WHERE userid = '" . USER_ID . "'");
	}
	else {
		dbquery("INSERT INTO user_tickets (userid,sessionticket,ipaddress) VALUES ('" . USER_ID . "', '" . $userTicket . "', '" . $_SERVER["REMOTE_ADDR"] . "')");
	}
}
else if($server['phoenix_secure_sessions'] == true) {
	dbquery("UPDATE `users` SET `auth_ticket` = '" . $users->GetUserVar(USER_ID, "auth_ticket") . "' WHERE id = '" . USER_ID . "'");
}


$forwardType = 0;
$forwardId = 0;

// Due to an issue with most servers, tags have been disabled in the CMS by default.

if (mysql_num_rows(dbquery("SELECT * FROM user_tags WHERE user_id = '" . USER_ID . "' LIMIT 1"))) {
	dbquery("DELETE FROM user_tags WHERE user_id = '" . USER_ID . "'");
}

if ($users->getUserVar(USER_ID, 'newbie_status') == "2") {	
	// Run POST-REGISTRATION checks
	dbquery("UPDATE `users` SET
				`motto` = '" . $server['default_motto'] . "',
				`credits` = '" . $server['default_credits'] . "',
				`activity_points` = '" . $server['default_pixels'] . "',
				`look` = '" . $server['default_look'] . "',
				`home_room` = '" . $server['default_room'] . "',
				`rank` = '" . $server['default_rank'] . "',
				`newbie_status` = '3'
				WHERE `id` = '" . USER_ID . "'");
}


dbquery("UPDATE users SET ip_last = '".$_SERVER['REMOTE_ADDR']."' WHERE username = '".USER_NAME."'");

$tpl->Init();

$client = new Template('page-client');
$client->SetParam('page_title', ' ');
$client->SetParam('sso_ticket', $users->GetUserVar(USER_ID, 'auth_ticket', false));
$client->SetParam('flash_base', 'http://images.habbo.com/swf/r64/');
$client->SetParam('flash_client_url', 'http://images.habbo.com/dcr/r51_none_b4ea29afdff17a13afb841a9811ebf55/');
$client->SetParam('hotel_status', $core->GetUsersOnline() . ' users online now!');
$client->SetParam('forwardType', $forwardType);
$client->SetParam('forwardId', $forwardId);

$tpl->AddIncludeSet('default');
$tpl->AddIncludeFile(new IncludeFile('text/css', '%web_gallery%/styles/habboclient.css', 'stylesheet'));
$tpl->AddIncludeFile(new IncludeFile('text/css', '%web_gallery%/styles/habboflashclient.css', 'stylesheet'));
$tpl->AddIncludeFile(new IncludeFile('text/javascript', '%web_gallery%/static/js/habboflashclient.js'));
$tpl->WriteIncludeFiles();
$tpl->AddGeneric('head-bottom');


if (isset($_GET['forceTicket']) && $users->HasFuse(USER_ID, 'fuse_admin'))
{
	$client->SetParam('sso_ticket', $_GET['forceTicket']);
}

$tpl->AddTemplate($client);

$tpl->Output();

?>