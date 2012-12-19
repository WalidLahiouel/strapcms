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

	$req = 'cmd=_notify-validate';
	$header = "";
	
	foreach ($_POST as $key => $value) {
		$value = urlencode(stripslashes($value));
		$req .= "&$key=$value";
	}
	
	$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
	$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
	$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
	
	$fp = fsockopen ('www.paypal.com', 80, $errno, $errstr, 30);
	if (!$fp) { exit; } else { fputs ($fp, $header . $req);
		while (!feof($fp)) {
			$res = fgets ($fp, 1024);
			if (strcmp ($res, "VERIFIED") == 0) {
				$payment_status = $_POST['payment_status'];
				$transaction_id = $_POST['txn_id'];
				$payer_email 	= $_POST['payer_email'];
				$custom_field 	= intval($_POST['custom']);
				$amount_paid	= $_POST['payment_gross'];
				
				if($payment_status == 'Completed') {
					switch ($amount_paid) {
						case "10.00":
							// Give them something for paying 10.00 (in whichever currency your paypal account is in.)
							break;
						}			
				}
				else if ($payment_status == 'Canceled_Reversal') {
					// You could ban them here if they cancel it, PayPal will send a message to this page.
				}
			}
		}
		fclose ($fp);
	}
?>
