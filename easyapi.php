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
	
// ## EASYHABBO VOTING
$time = 1;
$easyhabbotitle = 'Zap Hotel';


$ipaddress = @$_SERVER['REMOTE_ADDR'];

$easyhabbotitle = str_replace(' ', '+', $easyhabbotitle);

$voteurl = 'http://www.easyhabbo.com/in-habbohotel-' . $easyhabbotitle . '-api';

// For development purposes.

if ($ipaddress == '::1')
{
    $ipaddress = '127.0.0.1';
}
if((@$_COOKIE['EasyHabbo'] == null) || (@$_COOKIE['EasyHabbo'] != $ipaddress))
{
    $fp = @fopen('http://easyhabbo.com/check.vote/' . $ipaddress . '/', 'r');
    if ($fp)
    {
        $result = stream_get_contents($fp);
        fclose($fp);
	}
    else
    {
        $result = 'INVALID';    }

	setcookie('EasyHabbo', $ipaddress, time()+($time*3600));
    if ($result != 'INVALID')
    {
        if ($result == '1')
        {
            header("Location: {$voteurl}");
            exit;
        }
    }
}
?>
