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

	// Lock System to avoid staff account breaches
	$code = sha1($site['pincode']);
	
	$lastIp = $users->GetUserVar(USER_ID, 'ip_last');
	if($_SERVER["REMOTE_ADDR"] != $lastIp) {
		$doesDiffer = '1';
	} else {
		$doesDiffer = '0';
	}
	
	if($site['enable_id_flagging'] == true) {
		$timesFailed = @mysql_num_rows(mysql_query("SELECT null FROM `failed_pins` WHERE `user` = '" . USER_ID . "-" . USER_NAME . "'"));
		if ($timesFailed >= 3) {
			dbquery("INSERT INTO `flagged_users` (`id`) VALUES ('" . USER_ID ."')");
		}
	}
	
	if (isset($_SESSION["staff_PassAuth"])) {
		header ("Location: " . WWW . "/client?novote");
	}
	else if (!LOGGED_IN) {
		header ("Location: " . WWW . "/");
	}
	else if ($users->GetUserVar(USER_ID, "rank") < $site['pincode_minrank']) {
		header ("Location: " . WWW . "/me");
	}
		
	if (isset($_GET["gateway"])) {
		$returnUrl = filter($_GET["gateway"]);
		$_SESSION["returnUrl"] = $returnUrl;
	}
	else {
		$returnUrl = "me";
		$_SESSION["returnUrl"] = $returnUrl;
	}
	
	if (isset($_POST["key1"]) && isset($_POST["key2"]) && isset($_POST["key3"]) && isset($_POST["key4"])) {
		$fullkey = filter($_POST["key1"] . $_POST["key2"] . $_POST["key3"] . $_POST["key4"]);
		if(strtolower(sha1($fullkey)) == $code) {
			$_SESSION["staff_PassAuth"] = true;
			header ("Location: " . WWW . "/" . $_SESSION["returnUrl"]);
		}
		else {
			dbquery("INSERT INTO `failed_pins` (`user`, `pincode`, `destination`, `does_differ`, `ip_curr`) VALUES ('" . USER_ID . '-' . USER_NAME . "', '" . $fullkey . "', '" . $_SESSION["returnUrl"] . "', '" . $doesDiffer . "', '" . $_SERVER["REMOTE_ADDR"] . "')");
		}
	}
?>

<font face='verdana'> <b>PIN System Triggered</b><br />
Please enter your PIN Code below. An incorrect attempt will get your account status frozen and Senior Administration
will be notified. </font> <br /> <br />

<form method="post">
	<select name = "key1">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
	</select>
	<select name = "key2">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
	</select>
	<select name = "key3">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
	</select>
	<select name = "key4">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
	</select>
<br /> <br />
<input type='submit' value='Enter PIN'>
</form>
		