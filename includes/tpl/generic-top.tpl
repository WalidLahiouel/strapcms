<style>
#body-header {
background: #272521;
width: 100%;
height: 34px;
border-bottom: 1px solid #171511;
position: fixed;
z-index: 600;
}

#body-header-container {
width: 1000px;
padding: 10px;
margin: auto;
color: white;
}

.body-header-slot {
	float:right;
	padding:10px;
	margin:-9px 0 -10px 0;
	color:white;
	text-decoration:none;
	text-shadow:#000000 1px 1px 1px;
	outline:none; }

.body-header-slot-left {
float: left;
padding: 10px;
margin: -9px 0 -10px 0;
color: white;
text-decoration: none;
text-shadow: #000000 1px 1px 1px;
outline: none;
}

.body-header-slot-right {
float: right;
padding: 10px;
margin: -9px 0 -10px 0;
color: white;
text-decoration: none;
text-shadow: #000000 1px 1px 1px;
outline: none;
}

.body-header-slot:hover {
	background:#171511;
	text-decoration:none;
}

.body-header-slot-left:hover {
	background:#171511;
	text-decoration:none;
}

.body-header-slot-right:hover {
	background:#171511;
	text-decoration:none;
}

div.bobba_curtain {
background-image: url('<?php echo WWW; ?>/images/top_logo_curtain.png');
background-repeat: no-repeat;
width: 139px;
height: 167px;
position: fixed;
top: -1px;
left: 20px;
z-index: 610;
}

a.large-button {
cursor: pointer;
overflow: hidden;
text-decoration: none;
white-space: nowrap;
height: 46px;
margin: 0 0 5px 10px;
display: block;
float: right;
position: relative;
}
</style>
<body id="%body_id%" class="<?php if (!LOGGED_IN) { echo 'anonymous'; } ?> ">
<div id="body-header">
<div id="body-header-container">
<a href="<?php echo WWW; ?>/me" title="%user_title%" class="body-header-slot-left" style="background-image: url(http://habbr.info/habbo-imaging/avatarimage?figure=%look%&size=s); background-repeat: no-repeat; background-position: -2px -10px;">&nbsp;&nbsp;&nbsp;&nbsp;%habboName%</a>
<a href="http://habbostrap.com" title="%community_title%" class="body-header-slot-left" style="background-image: url(%www%/images/new_19.gif); background-repeat: no-repeat; background-position: 8px 8px;">&nbsp;&nbsp;&nbsp;&nbsp;Communaut&eacute;</a>
<a href="<?php echo WWW; ?>/articles" title="%news_title%" class="body-header-slot-left" style="background-image: url(%www%/images/forum_3.gif); background-repeat: no-repeat; background-position: 8px 8px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;News</a>
<a href="<?php echo WWW; ?>/community/staff" title="%staff_title%" class="body-header-slot-left" style="background-image: url(%www%/images/edit_badge_button.gif); background-repeat: no-repeat; background-position: 8px 8px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L'&eacute;quipe</a>
<?php
$getTicketsNumber = mysql_evaluate("SELECT COUNT(*) FROM moderation_tickets WHERE 'status' = 'open'");
$mod_tickets_number = $getTicketsNumber;
?>
<?php if ($users->HasFuse(USER_ID, 'fuse_housekeeping_login')) {

echo ' <a href="%www%/allseeingeye" title="All Seeing-Eye, 1 Administration task pending and not assigned" class="body-header-slot-right" style="background-image: url(%www%/images/status_exclusive.gif); background-repeat: no-repeat; background-position: 10px 11px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (0)</a>';

}
?>
<?php if ($users->HasFuse(USER_ID, 'fuse_housekeeping_login')) {

echo ' <a href="%www%/allseeingeye" title="Moderation Panel, ' . $mod_tickets_number .' call for help pending and not assigned" class="body-header-slot-right" style="background-image: url(%www%/images/my_3.gif); background-repeat: no-repeat; background-position: 9px 9px;">&nbsp;&nbsp;&nbsp;&nbsp;(' . $mod_tickets_number . ')</a>';

}
?>
<a href="%www%/account/logout" title="D&eacute;connexion" class="body-header-slot-right" style="background-image: url(%www%/images/cross.gif); background-repeat: no-repeat; background-position: 11px 9px; width: 14px; height: 14px;"></a>
<a href="#" title="Nombre de joueurs connectés en ce moment même" class="body-header-slot-right" style="background-image: url(%www%/images/habbo_online_anim.gif); background-repeat: no-repeat; background-position: 8px 8px;">&nbsp;&nbsp;&nbsp;&nbsp;%hotel_status%</a>
</div>
</div>
<div id="overlay"></div> 
<div id="header-container"> 
	<div id="header" class="clearfix"> 
		<h1><a href="%www%"></a></h1> 
       <div id="subnavi"> 
			<div id="subnavi-user"> 
			<?php if (LOGGED_IN) { ?>
				<!--<ul> 
					<li id="myfriends"><a href="#"><span>My Friends</span></a><span class="r"></span></li> 
					<li id="mygroups"><a href="#"><span>My Groups</span></a><span class="r"></span></li> 
					<li id="myrooms"><a href="#"><span>My Rooms</span></a><span class="r"></span></li> 
				</ul>-->
			<?php } else { ?>
			<div class="clearfix">&nbsp;</div> 
                <p> 
				        <a href="%www%/client" id="enter-hotel-open-medium-link" target="client" onclick="HabboClient.openOrFocus(this); return false;">Enter Hotel</a> 
                </p> 
			<?php } ?>
			</div> 
			<?php if (LOGGED_IN) { ?>
            <!--<div id="subnavi-search"> 
                <div id="subnavi-search-upper"> 
                <ul id="subnavi-search-links"> 
                    <li><a href="%www%/help" target="habbohelp" onclick="openOrFocusHelp(this); return false">Help</a></li> 
					<li><a href="%www%/account/logout" class="userlink" id="signout">Sign Out</a></li> 
				</ul> 
                </div> 
            </div>-->
            <div id="to-hotel"> 
					    <a href="%www%/vip/get" class="new-button red-button" target="uberClientWnd" onclick="HabboClient.openOrFocus(this); return false;" style="top: 128px; right: 30px;"><b>Deviens VIP !</b><i></i></a>
						<div class="enter-hotel-btn">
        <div class="open enter-btn">
                <a href=%www%/client target="uberClientWnd" onclick="HabboClient.openOrFocus(this); return false;">ENTRER<i></i></a>
            <b></b>
        </div>
    </div>
			
			</div>            
        </div> 
        <script type="text/javascript"> 
		L10N.put("purchase.group.title", "Create a group");
		document.observe("dom:loaded", function() {
            $("signout").observe("click", function() {
                HabboClient.close();
            });
        });
        </script>
		<?php } else { ?>
		           <div id="subnavi-login"> 
                <form action="%www%/account/submit" method="post" id="login-form"> 
            		<input type="hidden" name="page" value="%www%<?php echo $_SERVER['PHP_SELF']; ?>" /> 
                    <ul> 
                        <li> 
                            <label for="login-username" class="login-text"><b>Pseudo Habbo</b></label> 
                            <input tabindex="1" type="text" class="login-field" name="credentials.username" id="login-username" /> 
		                    <a href="#" id="login-submit-new-button" class="new-button" style="float: left; display:none"><b>Entrer</b><i></i></a> 
                            <input type="submit" id="login-submit-button" value="Entrer" class="submit"/> 
                        </li> 
                        <li> 
                            <label for="login-password" class="login-text"><b>Mot de passe</b></label> 
                            <input tabindex="2" type="password" class="login-field" name="credentials.password" id="login-password" /> 
                            <input tabindex="3" type="checkbox" name="_login_remember_me" value="true" id="login-remember-me" /> 
                            <label for="login-remember-me" class="left">Garder ma session active</label> 
                        </li> 
                    </ul> 
                </form> 
                <div id="subnavi-login-help" class="clearfix"> 
                    <ul> 
                        <li class="register"><a href="%www%/account/password/forgot" id="forgot-password"><span>Mot de pass oubli&eacute;?</span></a></li> 
                    	<li><a href="%www%/register"><span>Inscription GRATUITE</span></a></li> 
                    </ul> 
                </div> 
<div id="remember-me-notification" class="bottom-bubble" style="display:none;"> 
	<div class="bottom-bubble-t"><div></div></div> 
	<div class="bottom-bubble-c"> 
					En cochant cette case tu resteras connect&eacute; &agrave; Habbo jusqu'&agrave; ce que tu choisisses de te d&eacute;connecter.
	</div> 
	<div class="bottom-bubble-b"><div></div></div> 
</div> 
            </div> 
        </div>
		<script type="text/javascript"> 
			LoginFormUI.init();
			RememberMeUI.init("right");
		</script> 
		<?php } ?>
		
<ul id="navi"> 
<?php

$data = dbquery("SELECT id,caption,class,url,visibility FROM site_navi WHERE parent_id = '0' ORDER BY order_id ASC");

while ($link = mysql_fetch_assoc($data))
{
	$allowDisplay = true;
	
	switch ($link['visibility'])
	{
		default:
		case 0:
		
			$allowDisplay = false;
			break;
		
		case 1:
		
			break;
			
		case 2:
		
			if (!LOGGED_IN)
			{
				$allowDisplay = false;	
			}
			
			break;
			
		case 3:
		
			if (LOGGED_IN)
			{
				$allowDisplay = false;
			}
			
			break;
	}

	if (!$allowDisplay)
	{
		continue;
	}

	$class = clean($link['class']);
	$showLink = true;
	
	if (defined('TAB_ID') && TAB_ID == $link['id'])
	{
		$class .= ' selected';
		$showLink = false;
	}

	echo '	<li ' . (($class == "tab-register-now") ? 'id="tab-register-now"' : '') . ' class="' . $class . '">';
	
	if ($showLink)
	{
		echo '<a href="' . clean($link['url']) . '">';
	}
	else
	{
		echo '<strong>';
	}
	
	echo $link['caption'];
	
	if ($showLink)
	{
		echo '</a>';
	}
	else
	{
		echo '</strong>';
	}
	
	echo '	<span></span> 
	</li>' . chr(13);
	
	
}
?>
</ul> 
	   <!--<div id="habbos-online"><div class="rounded"><span>%hotel_status% <?php if (FORCE_MAINTENANCE) { ?><br /><br /><b>%shortName% is on Maintenance.</b><?php } ?></span></div></div>--> 
		
	</div> 
</div> 

 
<div id="content-container"> 
 
<?php if (LOGGED_IN || defined('TAB_ID')) { ?>
<div id="navi2-container" class="pngbg"> 
    <div id="navi2" class="pngbg clearfix"> 
	<ul> 
	<?php
	
	$i = 0;
	$lookupParent = '1';
	
	if (defined('TAB_ID'))
	{
		$lookupParent = TAB_ID;
	}
	
	$getSub = dbquery("SELECT id,caption,url,visibility FROM site_navi WHERE parent_id = '" . $lookupParent . "' ORDER BY order_id ASC");
	
	while ($subLink = mysql_fetch_assoc($getSub))
	{
		$allowDisplay = true;

		switch ($subLink['visibility'])
		{
			default:
			case 0:
			
				$allowDisplay = false;
				break;
			
			case 1:
			
				break;
				
			case 2:
			
				if (!LOGGED_IN)
				{
					$allowDisplay = false;	
				}
				
				break;
				
			case 3:
			
				if (LOGGED_IN)
				{
					$allowDisplay = false;
				}
				
				break;
		}
		
		$i++;
		
		if (!$allowDisplay)
		{
			continue;
		}
		
		$class = '';
		$showLink = true;
		
		if (defined('PAGE_ID') && PAGE_ID == $subLink['id']) 
		{
			$class .= ' selected';
			$showLink = false;
		}
		
		if ($i == mysql_num_rows($getSub))
		{
			$class .= ' last';
		}
	
		echo '<li class="' . $class . '">';
		if ($showLink) echo '<a href="' . clean($subLink['url']) . '">';
		echo $subLink['caption'];
		if ($showLink) echo '</a>';
		echo '</li>';
	}
			
	?>
	</ul> 
    </div> 
</div> 
<?php } ?>

<div id="container">
<div id="content" style="position: relative" class="clearfix">
