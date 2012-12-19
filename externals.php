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
$id = '';

if (isset($_GET['id']))
{
	$id = $_GET['id'];
}

$context = array(
    'http'=>array('max_redirects' => 99)
);
$context = stream_context_create($context);

switch ($id)
{
	case "external_variables":
	
		echo @file_get_contents("bflyswfs/external_variables.txt");

		//	echo "connection.info.host=64.31.13.26" . LB;
		//	echo "connection.info.port=8932" . LB;
			
			break;

	case "external_flash_texts":
	

		echo file_get_contents("lolcats/bflyswfs/external_flash_texts.txt");
		$get = mysql_query("SELECT * FROM external_texts");
		
		while ($ext = mysql_fetch_assoc($get))
		{
			echo clean($ext['skey']) . '=' . clean($ext['sval'], true) . LB;
		}
		
		break;
	
	case "furnidata":
	
		echo @file_get_contents("http://zaphotel.net/gamedata/furnidata.txt");
		echo @file_get_contents("http://zaphotel.net/gamedata/customdata.txt");
		
		break;
	
	case "figuredata":
	
		echo @file_get_contents("http://zaphotel.net/gamedata/figure_data.xml");
		
		break;
}

?>