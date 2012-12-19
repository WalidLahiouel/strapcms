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

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
<title>Zap: Client error</title> 
<style type="text/css">
body
{
	background-color: #fff;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: rgb(65, 65, 66);	
	margin: auto;
	padding-top: 50px;
}

#container
{
	margin: 10px;
	padding: 10px;
	vertical-align: middle;
}

a, a:visited, a:hover, a:active
{
	color: blue;
	text-decoration: none;
	border-bottom: 1px dotted;
}

a:hover
{
	border-bottom: 1px solid;
}

h1
{
	font-size: 300%;
}
</style>
</head>
<body>

<div id="container">
<table width="100%" height="100%">
<tr>
	<td valign="middle" style="text-align: center;">
		<img src="<?php echo WWW; ?>/images/seal.png">
	</td>
	<td valign="middle" style="float: right; padding: 25px;">
		
		<?php if (LOGGED_IN) { ?>
		<h1>Game client error</h1>
		
		<h2>
			Oops! Zap Hotel has encountered an internal error. Please reload the<br />
			client or report this to an administrator.
		</h2>
		
		<br />
		
		<h3>
			<a href="<?php echo WWW; ?>/client">Reload client</a>
		</h3>
		
		<h3>
			
		</h3>		
		<?php } else { ?>
		<h1>Logged out</h1>
		
		<h2>
			You have been logged out of the hotel. Thanks for visiting!
		</h2>
		
		<br />
		
		<h3>
			<a href="<?php echo WWW; ?>/client">Log in again?</a>
		</h3>		
		<?php } ?>
		
		<h3>
			<a href="#" onclick="window.close();">Close window</a>
		</h3>		
		
	</td>
</tr>
</div>
	
</body> 
</html>