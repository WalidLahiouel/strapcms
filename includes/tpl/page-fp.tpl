<?php
$users_online = mysql_result(mysql_query("SELECT users_online FROM server_status"), 0);
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>Zap: Powering the future!</title>
    <link href="images/css/login.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
	#people-inside{display:block;float:right;height:65px;position:relative;overflow:hidden;white-space:nowrap;z-index:100;bottom:57px;right:140px}#people-inside b{float:left;padding:5px 10px 4px 16px;font-size:11px;height:56px;min-width:45px;max-width:145px;margin-right:8px;background:transparent url('%www%/images/users_online_bubble.png') no-repeat -8px 0;color:#000;font-weight:normal;text-align:center;display:inline}
	#people-inside i{position:absolute;right:0;top:0;width:8px;height:65px;background:transparent url('%www%/images/users_online_bubble.png') no-repeat 0 0}#people-inside span{display:block}#people-inside .stats-fig{font-size:18px;font-weight:bold}
	</style>
</head>
<script src="http://code.jquery.com/jquery-1.4.4.min.js" type="text/javascript"></script>
<style>
#picOne, #picTwo {
position:absolute;
display: none;
left: 900px;
}
 
#pics {
width:100px;
height:100px;
}

#body-header {
background: #272521;
width: 100%;
height: 34px;
border-bottom: 1px solid #171511;
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
background-image: url('http://localhost/images/top_logo_curtain.png');
background-repeat: no-repeat;
width: 139px;
height: 167px;
position: fixed;
top: -1px;
left: 20px;
z-index: 610;
}
</style>
<script type="text/javascript">
$(document).ready(function() {
    $('#picOne').fadeIn(1500);
});
</script>

<body>
<div id="body-header">
<div id="body-header-container">
<a href="http://localhost/register" title="" class="body-header-slot-left" style="background-image: url(%www%/images/v22_1.gif); background-repeat: no-repeat; background-position: 8px 10px;">&nbsp;&nbsp;&nbsp;&nbsp;Inscription</a>
<a href="http://habbostrap.com" title="" class="body-header-slot-left" style="background-image: url(%www%/images/new_19.gif); background-repeat: no-repeat; background-position: 8px 8px;">&nbsp;&nbsp;&nbsp;&nbsp;Communaut&eacute;</a>
<a href="http://localhost/articles" title="" class="body-header-slot-left" style="background-image: url(%www%/images/forum_3.gif); background-repeat: no-repeat; background-position: 8px 8px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;News</a>
<a href="http://localhost/community/staff" title="" class="body-header-slot-left" style="background-image: url(%www%/images/edit_badge_button.gif); background-repeat: no-repeat; background-position: 8px 8px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L'&eacute;quipe</a>
<div class="body-header-slot-right" style="background-image: url(%www%/images/habbo_online_anim.gif); background-repeat: no-repeat; background-position: 8px 8px;">&nbsp;&nbsp;&nbsp;&nbsp;%hotel_status%</div>
</div>
</div>
<div class="header">
	<div class="center static relative">
		<div class="logo"><img src="images/partnerbuttons/danger.png" id='picOne'></div>
		<form method="post">
			<div class="loginBox-E">
				<label for="username">Pseudo Habbo</label>
					<br />
				<input type="text" name="credentials_username" id="username" />
					<br />
			</div>
			<div class="loginBox-P">
				<label for="password">Mot de passe</label>
					<br />
				<input type="password" name="credentials_password" id="password" />
					<br />
			</div>
			<div class="loginBox-S">
				<input type="submit" value="Entrer" name="Login" />
			</div>
					<!-- 
					
						Old version of users online
					div class="usersOnline"><br /><center>%hotel_status%<br /><br /></center 
					
					-->
		</div>
		</form>
	</div>
</div>
<div class="main">
	<div class="center static relative backdrop" onclick="location.href='register'">
		<div class="joinNow-C">
			<div class="button" onclick="location.href='register'">
				<span class="text-big">Inscrit-toi</span>
				<span class="text-small">GRAUITEMENT!</span>
				
			</div>
		</div>
		<div id="people-inside">
        <b><span><span class="stats-fig"><?php echo number_format($users_online); ?></span> à l'intérieur</span></b>
        <i></i>
    </div>
    
	</div>
</div>

</body>
</html>