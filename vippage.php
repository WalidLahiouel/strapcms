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
require_once "global.php";

if(USER_ID=="-1")
{
	Header("Location: index.php");
	//die("You need to log in."); // place holder
}

if(isset($_POST["ChooseFurni"]))
{
	switch($_POST["Furni"])
	{
		case "1":
		Header("Location: https://www.2checkout.com/checkout/purchase?sid=1699743&quantity=1&product_id=18");
		break;
		
		case "3":
		Header("Location: https://www.2checkout.com/checkout/purchase?sid=1699743&quantity=1&product_id=19");
		break;
		
		case "5":
		Header("Location: https://www.2checkout.com/checkout/purchase?sid=1699743&quantity=1&product_id=20");
		break;
		
		case "10":
		Header("Location: https://www.2checkout.com/checkout/purchase?sid=1699743&quantity=1&product_id=21");
		break;
	}
}
else if(isset($_POST["ChooseVIP"]))
{
	if(mysql_result(mysql_query("SELECT online FROM users WHERE username = '" . USER_NAME . "'"), 0) == 1)
	{
		?>
		<head>
		<script type="text/javascript">

		alert("Please close the client before purchasing!");

		</script>
		</head>
		<?php
	}
	else
	{
		$_SESSION["VipPackage"] = filter($_POST["VIP"]);
		header("Location: " . WWW . "/order/vip");
	}
	
}
else if(isset($_POST["ChooseCoins"]))
{
	if(mysql_result(mysql_query("SELECT online FROM users WHERE username = '" . USER_NAME . "'"), 0) == 1)
	{
		?>
		<head>
		<script type="text/javascript">

		alert("Please close the client before purchasing!");

		</script>
		</head>
		<?php
	}
	else
	{
		switch($_POST["Coins"])
		{
			case "10Coins":
			Header("Location: https://www.2checkout.com/checkout/purchase?sid=1699743&quantity=1&product_id=14&ship_name=" . USER_NAME . "&item_name_1=" . $_POST["Coins"]);
			break;
			case "25Coins":
			Header("Location: https://www.2checkout.com/checkout/purchase?sid=1699743&quantity=1&product_id=15&ship_name=" . USER_NAME . "&item_name_1=" . $_POST["Coins"]);
			break;
			case "50Coins":
			Header("Location: https://www.2checkout.com/checkout/purchase?sid=1699743&quantity=1&product_id=16&ship_name=" . USER_NAME . "&item_name_1=" . $_POST["Coins"]);
			break;
			case "100Coins":
			Header("Location: https://www.2checkout.com/checkout/purchase?sid=1699743&quantity=1&product_id=17&ship_name=" . USER_NAME . "&item_name_1=" . $_POST["Coins"]);
			break;
		}
	}
}
		

define('TAB_ID', 21);
define('PAGE_ID', 22);

$tpl->Init();

$tpl->AddGeneric('head-init');

$tpl->AddIncludeSet('generic');
$tpl->AddIncludeFile(new IncludeFile('text/css', 'http://%cdn%/%hotel%/%web_build%/web-gallery/styles/newcredits.css', 'stylesheet'));
$tpl->AddIncludeFile(new IncludeFile('text/javascript', 'http://%cdn%/%hotel%/%web_build%/web-gallery/static/js/newcredits.js'));
$tpl->WriteIncludeFiles();

$tpl->AddGeneric('head-overrides-generic');
$tpl->AddGeneric('head-bottom');
$tpl->AddGeneric('generic-top');

$tpl->Write('<div id="column1" class="column">');
// $tpl->AddGeneric('comp-club-teaser');
$tpl->AddGeneric('vip-how');
$tpl->Write('</div>');

$tpl->Write('<div id="column2" class="column">');
$tpl->AddGeneric('buynow');
$tpl->AddGeneric('onebip');
$tpl->AddGeneric('buythrones');
// $tpl->AddGeneric('comp-vip-members');
$tpl->Write('</div>');

$tpl->AddGeneric('generic-column3');
$tpl->AddGeneric('footer');

$tpl->SetParam('page_title', 'VIP');
$tpl->SetParam('body_id', 'home');

$tpl->Output();


?>