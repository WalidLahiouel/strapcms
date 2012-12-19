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

require_once "global.php";

$hid = '';
$url = '';

if (isset($_POST['url']))
{
	$url = $_POST['url'];
} 

if (isset($_GET['habbletKey']))
{
	$hid = filter($_GET['habbletKey']);
}

switch (strtolower($hid))
{
	case "credits":
	
		$tpl->Init();
		$credits = new Template('cproxy-credits');
		$tpl->AddTemplate($credits);
		$tpl->Output();
		
		break;
		
	case "news":
	
		$tpl->Init();
		$news = new Template('cproxy-news');
		$tpl->AddTemplate($news);
		$tpl->Output();
		
		break;
		
	case "externallink":
	
		$tpl->Init();
		$link = new Template('cproxy-link');
		$link->SetParam('TargetLink', $url);
		$tpl->AddTemplate($link);
		$tpl->Output();
		
		break;
        
    case "h22":
    
        $tpl->Init();
        $link = new Template('cproxy-h22');
        $tpl->AddTemplate($link);
		$tpl->Output();
        
        break;
		
	default:
		
		print_r($_GET);
		exit;
}
	
?>