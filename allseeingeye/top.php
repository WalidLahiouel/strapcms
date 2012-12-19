<?php

if (!defined('IN_HK') || !IN_HK)
{
	exit;
}

if (!HK_LOGGED_IN)
{
	exit;
}

?>
<html>
<head>
<title>All Seeing-Eye: <?php echo USER_NAME; ?></title>
<style type="text/css">
* {
	
}

body {
	font-family: Verdana;
	font-size: 10px;
background-image: url(<?php echo WWW; ?>/allseeingeye/bg.jpg);
}

table {
	font-size: 10px;
}

table thead {
	font-weight: bold;
}

#menu {
	padding: 5px;
background: #FFF;
-moz-border-radius: 5px;
border-radius: 5px;
}

a {
	color: #333;
	text-decoration: none;
	font-weight: normal;
}

a:hover {
	text-decoration: underline;
}

#menu li {
	margin: 0px;
}

#menu li:hover {
	background: #f6f7fe;
}

#menu li a {
	display: block;
	width: 100%;
}
.container {
    width: 930px;
    margin: auto;}

h1, h2 {
	background: #EFEFEF;
	text-align: left;
-moz-border-radius: 5px;
border-radius: 5px;
padding: 10px;
}

h1 {
	margin-top: 0px;
	font-size: 10px;
	padding: 7px;
	color: #000;
}

h2 {
	margin: 0;
	font-size: 10px;
	margin-top: 1em;
	padding: 7px;
}

#main {
	padding: 5px;
background: #FFF;
-moz-border-radius: 5px;
border-radius: 5px;
}

.plus {
	float: right;
	font-size: 8px;
	font-weight: normal;
	padding: 1px 4px 2px 4px;
	margin: 0px 0px;
	background: #f6f7fe;
	color: #000;
	border: 1px solid #b4b8d0;
	cursor: pointer;
}

.plus:hover {
	background: #f6f7fe;
	border: 1px solid #c97;
}

ul.listmnu {
	list-style: none;
}

.listmnu {
	padding: 3px;
	text-align: left;
}

#top-flashmessage-ok {
	background-color: #E0F8E0;
	color: #088A08;
}

#top-flashmessage-error {
	background-color: #F8E0E0;
	color: #8A0808;
}

#top-flashmessage-ok,#top-flashmessage-error {
	font-family: arial, san-serif;
	border: 1px solid #2E2E2E;
	font-size: 14px;
	text-align: center;
	padding: 5px;
	margin-bottom: 10px;
}

table td
{
	padding: 3px;
}
</style>
<script type="text/javascript">

function Toggle(id)
{
	var List = document.getElementById('list-' + id);
	var Button = document.getElementById('plus-' + id);
	
	if (List.style.display == 'block' || List.style.display == '')
	{
		List.style.display = 'none';
		Button.innerHTML = '+';
	}
	else
	{
		List.style.display = 'block';
		Button.innerHTML = '-';
	}
	
	setCookie('tab-' + id, List.style.display, 9999);	
}

function t(id)
{
	var el = document.getElementById(id);
	
	if (el.style.display == 'block' || el.style.display == '')
	{
		el.style.display = 'none';
	}
	else
	{
		el.style.display = 'block';
	}
}

function setCookie(c_name,value,expiredays)
{
	var exdate=new Date();
	exdate.setDate(exdate.getDate()+expiredays);
	document.cookie=c_name+ "=" +escape(value)+
	((expiredays==null) ? "" : ";expires="+exdate.toGMTString());
}

function checkCookies()
{
	ca = document.cookie.split(';');

	for (i = 0; i < ca.length; i++)
	{
		bits = ca[i].split('=');
		
		key = trim(bits[0]);
		value = trim(bits[1]);
		
		if (key.substr(0, 3) == 'tab')
		{
			tabName = key.substr(4);
			
			if (value == 'none')
			{
				Toggle(tabName);
			}
		}
	}
}

function trim(value)
{
	value = value.replace(/^\s+/,''); 
	value = value.replace(/\s+$/,'');
	return value;
}

function popClient()
{
	window.open('http://localhost/client', 'Habbo:', 'width=980,height=600,location=no,status=no,menubar=no,directories=no,toolbar=no,resizable=no,scrollbars=no'); return false;
}

function popSsoClient(sso)
{
	window.open('http://localhost/client?forceTicket=' + sso, 'Habbo: External user sign on', 'width=980,height=600,location=no,status=no,menubar=no,directories=no,toolbar=no,resizable=no,scrollbars=no'); return false;
}
</script>
</head>
<body onLoad="checkCookies();">
<div class="container">

<table width="100%">
<tr>
	<td id="menu" style="width: 25%;" valign="top">
		
		<h1>Administration</h1>
		<ul class="listmnu">
			<li>Welcome, <?php echo USER_NAME; ?><li>
		</ul>
		
		<h2>
			Main	
		</h2>
		<ul id="list-main" class="listmnu">
			<li><a href="http://localhost/allseeingeye/hobba/tools/main">Main page</a></li>
			<li><a href="http://localhost/me">Return to site</a></li>
			<li><a href="http://localhost/allseeingeye/hobba/tools/logout">Log out</a></li>
		</ul>		
		
		<?php if ($users->hasFuse(USER_ID, 'fuse_admin')) { ?>
		<h2>User Management</h2>
		<ul id="list-hotel" class="listmnu">
			<li><a href='http://localhost/allseeingeye/hobba/tools/makevip'>Make a user VIP</a></li>
			<li><a href='http://localhost/allseeingeye/hobba/tools/changepass'>Change user password</a></li>
			<li><a href="http://localhost/allseeingeye/hobba/tools/iptool">IP address tool</a></li>
			<li><a href="http://localhost/allseeingeye/hobba/tools/extsignon">External user sign on</a></li>
			<li><a href="http://localhost/allseeingeye/hobba/tools/badges">View/manage user's badges</a></li>
		</ul>
		<h2>
			Administrators	
		</h2>
 			<ul id="list-hotel" class="listmnu">
			<li><a href="http://localhost/allseeingeye/hobba/tools/maint">Maintenance</li>
			<li><a href="http://localhost/allseeingeye/hobba/tools/badgedefs">Badge defenitions</a></li>
			<li><a href="http://localhost/allseeingeye/hobba/tools/presets">Moderation tools presets</a></li>
			<li><a href="http://localhost/allseeingeye/hobba/tools/texts">External texts</a></li>
			<li><a href="http://localhost/allseeingeye/hobba/tools/vars">External variables</a></li>
			<li><a href="http://localhost/allseeingeye/hobba/tools/bans">Manage bans & appeals</a></li>
			<li><a href="http://localhost/allseeingeye/hobba/tools/chatlogs">Chatlogs</a></li>
			<li><a href="http://localhost/allseeingeye/hobba/tools/cfhs">Calls for help</a></li>
			<li><a href="http://localhost/allseeingeye/hobba/tools/ha">Hotel Alert</a></li>
			<li><a href="http://localhost/allseeingeye/hobba/tools/addbadgetoshop">Add to badge shop</a></li>
            <li><a href="http://localhost/allseeingeye/hobba/tools/listreports">Downtime reports</a></li>
		</ul>
		<?php } ?>
		
		<?php if ($users->hasFuse(USER_ID, 'fuse_housekeeping_moderation')) { ?>
		<h2>
			Moderators		
		</h2>
		
			<ul id="list-mod" class="listmnu">
			<li><a href='http://localhost/allseeingeye/hobba/tools/eha'><b>Events Hotel Alert</b></a></li>
			<li><a href="http://localhost/allseeingeye/hobba/tools/bans">Manage bans & appeals</a></li>
			<li><a href="http://localhost/allseeingeye/hobba/tools/iptool">IP address tool</a></li>
			<li><a href="http://localhost/allseeingeye/hobba/tools/chatlogs">Chatlogs</a></li>
			<li><a href="http://localhost/allseeingeye/hobba/tools/cfhs">Calls for help</a></li>
		</ul>
		<?php } ?>
		
		<?php if ($users->hasFuse(USER_ID, 'fuse_housekeeping_sitemanagement')) { ?>
		<h2>
			Website Management	
		</h2>
		<ul id="list-site" class="listmnu">
			<li><a href="http://localhost/allseeingeye/hobba/tools/campaigns">Hot Campaigns</a></li>	
			<li><a href="http://localhost/allseeingeye/hobba/tools/newspublish">Write news article</a></li>
			<li><a href="http://localhost/allseeingeye/hobba/tools/news">Manage news articles</a></li>
		</ul>
		<?php } ?>		
		
		<h2>
			System Status	
		</h2>		
		<p id="list-sys" class="listmnu">
		<?php
				$users = mysql_result(mysql_query("SELECT users_online FROM server_status"), 0);
				$rooms = mysql_result(mysql_query("SELECT rooms_loaded FROM server_status"), 0);
				echo 'Users online: <b>' . number_format($users) . '</b><br />';
				echo 'Rooms loaded: <b>' . number_format($rooms) . '</b><br />';
		
		?>
		</p>
		
	</td>
	<td id="spacer" style="width: 5px;" valign="middle">&nbsp;
		
	</td>
	<td id="main" valign="top">

<?php

if (isset($_SESSION['fmsg']) && $_SESSION['fmsg'] != null)
{
	$icon = '';
	
	switch ($_SESSION['fmsg_type'])
	{
		case 'error':
			
			$icon = 'cross.png';
			break;
	
		case 'ok':
		default:
		
			$icon = 'accept.png';
			break;
	}

	echo '<div id="top-flashmessage-' . $_SESSION['fmsg_type'] . '">

		<div id="wrapper">
		
			<img src="' . WWW . '/images/' . $icon . '" style="vertical-align: middle;">
			' . $_SESSION['fmsg'] . '
		
		</div>

	</div>';
	
	$_SESSION['fmsg'] = null;
	$_SESSION['fmsg_type'] = null;
}

?>
</div>
