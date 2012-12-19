<?php
/*=======================================================================
| StrapCMS 2.2 - Perfect handshaking with the game for PhoenixEmu
| #######################################################################
| UberCMS - Advanced Website and Content Management System for uberEmu
| #######################################################################
| Copyright (c) 2010, Roy 'Meth0d'
| http://www.meth0d.org
| Copyright (c) 2012, Jonteh
| http://zaphotel.net
| Copyright (c) 2012, Jérémy 'Emetophobic'
| http://strapfamily.com
| Copyright (c) 2012, Walid 'Jack'
| http://retrodev.fr
| Copyright (c) 2012, Anthony 'Anthony93260'
| http://cola-hotel.net
| #######################################################################
| StrapCMS is part of StrapFamily Distribution, coded part by Jonteh
| from uberCMS 2.0.1, coded part by Jack and Anthony93260.
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

define('DS', DIRECTORY_SEPARATOR);
define('LB', chr(13));
define('CWD', str_replace('allseeingeye' . DS, '', dirname(__FILE__) . DS));
define('INCLUDES', CWD . 'includes' . DS);

define("includes_directory", INCLUDES);
define("config_directory", INCLUDES . "configuration/");

require_once config_directory . "ubercms_config.php";
define("regOnlineText", $frontend['online_text_reg']);

require_once includes_directory . "class.core.php";
require_once includes_directory . "class.db.mysql.php";
require_once includes_directory . "class.cron.php";
require_once includes_directory . "class.users.php";
require_once includes_directory . "class.tpl.php";
require_once includes_directory . "class.cdn.php";
require_once includes_directory . "class.zaphotel.php";
require_once includes_directory . "class.gtfo.php";
require_once includes_directory . "class.uber2.php";


define("vembaEnabled", $vemba['enable']);

$core = new uberCore();
$core->ParseConfig();
$cron = new uberCron();
$users = new uberUsers();
$tpl = new uberTpl();
$cdn = new ZapDataNetwork();
$zaphotel = new zaphotel();
$gtfo  = new GtfoClean();
$uber = new UberTwo();

$tpl->SetParam("siteName", $site['name']);
$tpl->SetParam("shortName", $site['short_name']);
$tpl->SetParam("footerLinks", $frontend['footer_links']);
$tpl->SetParam("footerText", $frontend['footer_text']);
$tpl->SetParam("vembaId", $vemba['id']);
$tpl->SetParam("fpOnlineText", $frontend['online_text_fp']);
$tpl->SetParam("regOnlineText", $frontend['online_text_reg']);
$tpl->SetParam("twitter", $site['twitter_account']);
$tpl->SetParam("facebook", $site['facebook_account']);
$tpl->SetParam("hotel_on_maintenance", $misc['maintenance_text']);
$tpl->SetParam("support_email", $site['contact_email']);
$tpl->SetParam("staff_about", $misc['staff_about']);
$tpl->SetParam("web_gallery", $imaging['web_gallery']);
$tpl->SetParam("c_images", $imaging['c_images']);



$headers = @apache_request_headers();

// ***************************************************
// Reverse proxy & cloudflare setup checked & ips corrected if needed
if ($reverseproxy['enabled'] == true) {
	if (isset($headers["X-Forwarded-For"])) {
		$_SERVER["REMOTE_ADDR"] = $headers["X-Forwarded-For"];
	}
}
else if ($cloudflare['enabled'] == true) {
	if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
		$_SERVER["REMOTE_ADDR"] = $_SERVER["HTTP_CF_CONNECTING_IP"];
	}
}
if ($reverseproxy['enabled'] == true && $cloudflare['enabled'] == true) {
	$ip['orig'] = $_SERVER["REMOTE_ADDR"];
	$realClient = explode(",", $ip['orig']);
	$realClientIP = $realClient[0];

	$_SERVER["REMOTE_ADDR"] = $realClientIP;
}

// ***************************************************
// Check for VPN blocks
if ($vpn['block'] == true) {
	$user['hostname'] = @gethostbyaddr($_SERVER["REMOTE_ADDR"]);
	if(in_array($user['hostname'], $vpn['blocked_hosts'])) {
		exit($vpn['blocked_message']);
	}
}

if($voting['thehabbos_enabled'] == true) {
	$mode = "1";
}
else {
	$mode = "2";
}

// ****** Set Params for Client use
$tpl->SetParam('connection_info_host', $client['connection_info_host']);
$tpl->SetParam('connection_info_port', $client['connection_info_port']);
$tpl->SetParam('site_url', WWW);
$tpl->SetParam('client_reload_url', WWW);
$tpl->SetParam('client_fatal_error_url', WWW . "/flash_client_error");
$tpl->SetParam('external_variables_txt', $client['external_variables_txt']);
$tpl->SetParam('external_texts_txt', $client['external_texts_txt']);
$tpl->SetParam('furnidata_load_url', $client['furnidata_load_url']);
$tpl->SetParam('productdata_load_url', $client['productdata_load_url']);
$tpl->SetParam('client_starting', $client['client_starting']);
$tpl->SetParam('habbo_swf', $client['habbo_swf']);
$tpl->SetParam('swf_base_dir', $client['swf_base_dir']);


date_default_timezone_set('Europe/Paris');
define('UBER', true);



define('USER_IP', $_SERVER['REMOTE_ADDR']);

@set_magic_quotes_runtime('0');
error_reporting(E_ALL);

session_start();

$db = new MySQL($core->config['MySQL']['hostname'], $core->config['MySQL']['username'],
				$core->config['MySQL']['password'], $core->config['MySQL']['database']);
$db->Connect();

$cron->Execute();

if (isset($_SESSION['UBER_USER_N']) && isset($_SESSION['UBER_USER_H']))
{
	$userN = $_SESSION['UBER_USER_N'];
	$userH = $_SESSION['UBER_USER_H'];
	
	if ($users->ValidateUser($userN, $userH))
	{
		define('LOGGED_IN', true);
		define('USER_NAME', $userN);
		define('USER_ID', $users->name2id($userN));
		define('USER_HASH', $userH);
		
		$users->CacheUser(USER_ID);
	}
	else
	{
		@session_destroy();
		header('Location: ./index.html');
		exit;
	}	
}
else
{
	define('LOGGED_IN', false);
	define('USER_NAME', 'Guest');
	define('USER_ID', -1);
	define('USER_HASH', null);
}

define('FORCE_MAINTENANCE', ((uberCore::GetMaintenanceStatus() == "1") ? true : false));

if (FORCE_MAINTENANCE && !defined('IN_MAINTENANCE'))
{
	if (!LOGGED_IN || !$users->HasFuse(USER_ID, 'fuse_ignore_maintenance'))
	{
		header("Location: " . WWW . "/maintenance.php");
		exit;
	}
}

if ((!defined('BAN_PAGE') || !BAN_PAGE) && ($users->IsIpBanned(USER_IP) || (LOGGED_IN && $users->IsUserBanned(USER_NAME))))
{
	header("Location: " . WWW . "/banned.php");
	exit;
}

$core->CheckCookies();

function dbquery($strQuery = '')
{
	global $db;
	
	if($db->IsConnected())
	{
		return $db->DoQuery($strQuery);
	}
	
	return $db->Error('Could not process query, no active db connection detected..');
}

function filter($strInput = '')
{
	global $core;
	
	return $core->FilterInputString($strInput);
}

function clean($strInput = '', $ignoreHtml = false, $nl2br = false) {
	global $core;
	return $core->CleanStringForOutput($strInput, $ignoreHtml, $nl2br);
}

function derpC($strInput = '', $ignoreHtml = true, $nl2br = false) {
	global $core;
	return $core->CleanStringForOutput($strInput, $ignoreHtml, $nl2br);
}
function shuffle_assoc(&$array)
{
	$keys = array_keys($array);

	shuffle($keys);

	foreach($keys as $key)
	{
		$new[$key] = $array[$key];
	}

	$array = $new;

	return true;
}

if (defined('MUST_LOG') && !LOGGED_IN) {
    header('Location: ' . WWW . '/');
}

function fixText($str, $quotes = true, $clean = false, $ltgt = false, $transform = false, $guestbook = false)
{
    global $core;
    
    return $core->fixText($str, $quotes, $clean, $ltgt, $transform, $guestbook);
}

function GenRandom()
{
    global $core;
    
    return $core->GenRandom();
}

function BBCode($str)
{
    global $core;
    
    return $core->BBCode($str);
}

function unicodeText($str, $clean = false)
{
    $str = str_replace("°", "\u00a1", $str);
    $str = str_replace("ø", "\u00bf", $str);
    $str = str_replace("—", "\u00d1", $str);
    $str = str_replace("Ò", "\u00f1", $str);
    $str = str_replace("¡Å", "\u00c1", $str);
    $str = str_replace("·", "\u00e1", $str);
    $str = str_replace("…", "\u00c9", $str);
    $str = str_replace("È", "\u00e9", $str);
    $str = str_replace("”", "\u00d3", $str);
    $str = str_replace("Û", "\u00f3", $str);
    $str = str_replace("⁄", "\u00da", $str);
    $str = str_replace("˙", "\u00fa", $str);
    $str = str_replace("Õç", "\u00cd", $str);
    $str = str_replace("Ì", "\u00ed", $str);
    
    $str = str_replace('"', '\"', $str);
    
    return $str;
}

function Contains($str, $words, $filter = false)
{
    $return = false;
    
    if ($filter) {
        $str   = strtolower($str);
        $words = strtolower($words);
    }
    
    if (@strpos($str, $words) === false) {
        $return = false;
    } else {
        $return = true;
    }
    
    $getWords = explode(",", str_replace(" ", "", $words));
    
    foreach ($getWords as $Word) {
        if (!$return) {
            if (@strpos($str, $Word) === false) {
                $return = false;
            } else {
                $return = true;
            }
        }
    }
    
    return $return;
}

function write($str, $quotes = true, $clean = false, $ltgt = true, $transform = false, $guestbook = false)
{
    echo fixText($str, $quotes, $clean, $ltgt, $transform, $guestbook);
}

function IsEven($intNumber)
{
    if ($intNumber % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

if ($site['enable_id_flagging'] == true) {
	if (LOGGED_IN) {
		$isFlagged = mysql_num_rows(mysql_query("SELECT `id` FROM `flagged_users` WHERE `id` = '" . USER_ID . "'"));
		if($isFlagged) {
			die(
				"Your account's access has been terminated. <br />" .
				"Please contact <a href='mailto:" . $site['contact_email'] . "'>" . $site['contact_email'] . "</a> to restore account access."
				);
		}
	}
}

function mysql_evaluate($query, $default_value="undefined")
	{
		$result = mysql_query($query) or die(mysql_error());

		if(mysql_num_rows($result) < 1){
		return $default_value;
		} else {
		return mysql_result($result, 0);
		}
	}
?>