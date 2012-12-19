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
define('BAN_PAGE', true);

require_once "global.php";

echo "<center>";
$ban = null;

if (uberUsers::IsIpBanned(USER_IP))
{
	$ban = uberUsers::GetBan('ip', USER_IP, true);
}

if (LOGGED_IN && uberUsers::IsUserBanned(USER_NAME))
{
	$ban = uberUsers::GetBan('user', USER_NAME, true);
}

if ($ban == null)
{
	header("Location: " . WWW . "/");
	exit;
}

$tpl->Init();

$tpl->AddGeneric('head-init');

$tpl->AddIncludeSet('generic');
$tpl->WriteIncludeFiles();
$tpl->Output();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"> 
<head> 
	<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
	<title>Zap Hotel: You banned, f00l!</title> 
 
<script type="text/javascript"> 
var andSoItBegins = (new Date()).getTime();
</script> 
    <link rel="shortcut icon" href="http://images.zaphotel.net/%web_build%/web-gallery/favicon.ico" type="image/vnd.microsoft.icon" /> 
    <link rel="alternate" type="application/rss+xml" title="Habbo Hotel - RSS" href="http://www.habbo.com/articles/rss.xml" /> 
<link rel="stylesheet" href="http://images.zaphotel.net/%web_build%/web-gallery/styles/style.css" type="text/css" />
<link rel="stylesheet" href="http://images.zaphotel.net/%web_build%/web-gallery/styles/buttons.css" type="text/css" />
<link rel="stylesheet" href="http://images.zaphotel.net/%web_build%/web-gallery/styles/process.css" type="text/css" />
<link rel="stylesheet" href="http://images.zaphotel.net/%web_build%/web-gallery/styles/embed.css" type="text/css" />
<link rel="stylesheet" href="http://images.zaphotel.net/%web_build%/web-gallery/styles/changepassword.css" type="text/css" />
<script src="http://images.zaphotel.net/%web_build%/web-gallery/static/js/embed.js" type="text/javascript"></script>

<link rel="stylesheet" href="/styles/local/com.css" type="text/css" /> 
 
<script src="/js/local/com.js" type="text/javascript"></script> <br />
<img src='images/logo.png'>
<script type="text/javascript">

var ad_keywords = "gender%3Am,age%3A18";

var ad_key_value = "kvage=18;kvgender=m;kvtags=";

</script>

<script type="text/javascript"> 
document.habboLoggedIn = true;
var habboName = "imFROMjewlake";
var habboId = 41866117;
var facebookUser = false;
var habboReqPath = "";
var habboStaticFilePath = "http://images.zaphotel.net/63_1dc60c6d6ea6e089c6893ab4e0541ee0/184/web-gallery";
var habboImagerUrl = "http://www.habbo.com/habbo-imaging/";
var habboPartner = "";
var habboDefaultClientPopupUrl = "http://www.habbo.com/client";
window.name = "habboMain";
if (typeof HabboClient != "undefined") { HabboClient.windowName = "2de615f77f92babd94eb9c3c0466d17ba27f92b0"; }
 
 
</script> 
 
<meta property="fb:app_id" content="183096284873" /> 
 
<script src="http://images.zaphotel.net/%web_build%/web-gallery/static/js/identity.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://images.zaphotel.net/%web_build%/web-gallery/styles/identity.css" type="text/css" /> 
 
<meta name="description" content="Check into the world’s largest virtual hotel for FREE! Meet and make friends, play games, chat with others, create your avatar, design rooms and more…" /> 
<meta name="keywords" content="habbo hotel, virtual, world, social network, free, community, avatar, chat, online, teen, roleplaying, join, social, groups, forums, safe, play, games, online, friends, teens, rares, rare furni, collecting, create, collect, connect, furni, furniture, pets, room design, sharing, expression, badges, hangout, music, celebrity, celebrity visits, celebrities, mmo, mmorpg, massively multiplayer" /> 
 
 
 
<!--[if IE 8]>
<link rel="stylesheet" href="http://images.zaphotel.net/%web_build%/web-gallery/styles/ie8.css" type="text/css" />
<![endif]--> 
<!--[if lt IE 8]>
<link rel="stylesheet" href="http://images.zaphotel.net/%web_build%/web-gallery/styles/ie.css" type="text/css" />
<![endif]--> 
<!--[if lt IE 7]>
<link rel="stylesheet" href="http://images.zaphotel.net/%web_build%/web-gallery/styles/ie6.css" type="text/css" />
<script src="http://images.zaphotel.net/%web_build%/web-gallery/static/js/pngfix.js" type="text/javascript"></script>
<script type="text/javascript">
try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
</script>
 
<style type="text/css">
body { behavior: url(/js/csshover.htc); }
</style>
<![endif]--> 
<meta name="build" content="63-BUILD328 - 31.03.2011 11:21 - com" /> 
</head> 
 
<body id="embedpage"> 
<div id="overlay"></div> 






<div id="container"> 
 
    <div id="content">

  <div id="landing-container">

    <div class="cbb error-message">

	    <ul style="text-align: center">

		    <li><b><font size='3' color='red'>You have been banned from Zap Hotel!</font></b></li>
			<br />
			<li>The reason for your ban is: <b><?php echo $ban['reason']; ?></b></li>
			<li>The ban is expected to expire on: <b><?php echo date('d F, Y', $ban['expire']) ?></b></li>
			<li>Staff member who you were banned by: <b><?php echo $ban['added_by']; ?></b></li>
			<br />
			<li>You may appeal the decision of this ban by visiting <a href='http://forum.zaphotel.net/index.php?forums/ban-appeals.11/'>this link</a> and creating a 'new thread'.</li>

	    </ul>

      </div>



  </div>





</div>     <script type="text/javascript"> 
        Embed.decorateFooterLinks();
    </script> 
</div> 
<script type="text/javascript"> 
if (typeof HabboView != "undefined") {
	HabboView.run();
}
</script> 
 
 
<script src="http://www.google-analytics.com/ga.js" type="text/javascript"></script> 
<script type="text/javascript"> 
var pageTracker = _gat._getTracker("UA-448325-2");
pageTracker._trackPageview();
</script> 
    

    <!-- Start Quantcast tag -->

<script type="text/javascript">

_qoptions={

qacct:"p-b5UDx6EsiRfMI"

};

</script>

<script type="text/javascript" src="http://edge.quantserve.com/quant.js"></script>

<noscript>

<img src="http://pixel.quantserve.com/pixel/p-b5UDx6EsiRfMI.gif" style="display: none;" border="0" height="1" width="1" alt="Quantcast"/>

</noscript>

<!-- End Quantcast tag -->



<!-- START Nielsen Online SiteCensus V6.0 -->

<!-- COPYRIGHT 2009 Nielsen Online -->

<script src="//secure-au.imrworldwide.com/v60.js">

</script>

<script type="text/javascript">

 nol_t({cid:"Habbohotel",content:"0",server:"secure-au"}).record().post();

</script>

<noscript>

 <div>

 <img src="//secure-au.imrworldwide.com/cgi-bin/m?ci=Habbohotel&cg=0&cc=1&ts=noscript" alt="" />

 </div>

</noscript>

<!-- END Nielsen Online SiteCensus V6.0 --> 
    
    
        
 
 
</body> 
</html> 