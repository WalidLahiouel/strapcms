<?php
/*=======================================================================
| UberCMS - Advanced Website and Content Management System for uberEmu
| #######################################################################
| Copyright (c) 2010, Roy 'Meth0d'
| http://www.meth0d.org
| #######################################################################
| This program is free software: you can redistribute it and/or modify
| it under the terms of the GNU General Public License as published by
| the Free Software Foundation, either version 3 of the License, or
| (at your option) any later version.
| #######################################################################
| This program is distributed in the hope that it will be useful,
| but WITHOUT ANY WARRANTY; without even the implied warranty of
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
| GNU General Public License for more details.
\======================================================================*/

define('TAB_ID', 1);
define('PAGE_ID', 4);

require_once "global.php";

if (!LOGGED_IN)
{
	header("Location: " . WWW . "/");
	exit;
}

// Initialize template system
$tpl->Init();

// Initial variables
$tpl->SetParam('page_title', 'Mes Préférences');
$tpl->SetParam('body_id', 'profile');

// Generate page header
$tpl->AddGeneric('head-init');
$tpl->AddIncludeSet('generic');
$tpl->AddIncludeFile(new IncludeFile('text/javascript', 'http://%cdn%/%hotel%/%web_build%/web-gallery/static/js/settings.js'));
$tpl->AddIncludeFile(new IncludeFile('text/css', 'http://%cdn%/%hotel%/%web_build%/web-gallery/styles/settings.css', 'stylesheet'));
$tpl->AddIncludeFile(new IncludeFile('text/css', 'http://%cdn%/%hotel%/%web_build%/web-gallery/styles/friendmanagement.css', 'stylesheet'));
$tpl->WriteIncludeFiles();
$tpl->AddGeneric('head-overrides-generic');
$tpl->AddGeneric('head-bottom');

// Generate generic top/navigation/login box
$tpl->AddGeneric('generic-top');

// Navigation
$settingsNavi = new Template('comp-settings-navi');
$tpl->AddTemplate($settingsNavi);

// Content
$updateResult = 0;

if (isset($_POST['figureData']) && isset($_POST['newGender']))
{
	$figureData = filter($_POST['figureData']);
	$newGender = filter($_POST['newGender']);
	
	if (!HoloFigure::CheckFigure($figureData, $newGender, $users->HasClub(USER_ID)))
	{
		$updateResult = 2;
	}
	else
	{
		$updateResult = 1;
		//die($figureData);
		dbquery("UPDATE users SET look = '" . $figureData . "', gender = '" . $newGender . "' WHERE id = '" . USER_ID . "' LIMIT 1");
		$core->Mus('updateLook', USER_ID);
	}
}
if(!isset($_GET["page"])) { Header("Location: profile?page=1"); }

$page = mysql_real_escape_string($_GET["page"]);
if($page == "1")
{
	$settingsEditor = new Template('page-settings-editor');
	$tpl->AddTemplate($settingsEditor);
}
elseif($page == "2")
{
	$passEditor = new Template('page-settings-pass');
	$tpl->AddTemplate($passEditor);
}
elseif($page == "3")
{
	$goldbars = new Template('page-settings-goldbar');
	$tpl->AddTemplate($goldbars);
}
elseif($page == "4")
{
	$namechange = new Template('page-settings-namechange');
	$tpl->AddTemplate($namechange);
}

// Footer
$tpl->AddGeneric('footer');

// Output the page
$tpl->Output();

?>