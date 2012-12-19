<?php

if (!defined('IN_HK') || !IN_HK)
{
	exit;
}

if (HK_LOGGED_IN)
{
	exit;
}
	



if (isset($_POST['usr']) && isset($_POST['pwd']))
{
	$username = filter($_POST['usr']);
	$password = $users->UserHash($_POST['pwd'], $username);

	if ($users->validateUser($username, $password))
	{		
		$hkId = $users->name2id($username);
		
		if ($users->hasFuse($hkId, 'fuse_housekeeping_login'))
		{	
			session_destroy();
			session_start();
		
			$_SESSION['UBER_USER_N'] = $users->getUserVar($hkId, 'username');
			$_SESSION['UBER_USER_H'] = $password;
			$_SESSION['UBER_HK_USER_N'] = $_SESSION['UBER_USER_N'];
			$_SESSION['UBER_HK_USER_H'] = $_SESSION['UBER_USER_H'];
			
			header("Location: " . HK_WWW . "/index.php?_cmd=main");
			
			exit;
		}
		else
		{
			$_SESSION['HK_LOGIN_ERROR'] = "You do not have permission to access this service";
		}
	}		
	else
	{
		$_SESSION['HK_LOGIN_ERROR'] = 'Invalid details';
	}
}

?>
<html>
<head>
<title>Habbo: All Seeing Eye</title>
<meta name="description" content="HabboStrap is a virtual world where you can meet and make friends. Make friends, join the fun, get noticed!" /> 
<meta name="keywords" content="uber, uberhotel, uber hotel, meth0d, nillus, ragezone, retro, keep it real, private server, free, credits, habbo hotel , virtual, world, social network, free, community, avatar, chat, online, teen, roleplaying, join, social, groups, forums, safe, play, games, online, friends, teens, rares, rare furni, collecting, create, collect, connect, furni, furniture, pets , room design, sharing, expression, badges, hangout, music, celebrity, celebrity visits, celebrities, mmo, mmorpg, massively multiplayer" /> 
 
<!--[if IE 8]>
<link rel="stylesheet" href="%web_gallery%/v2/styles/ie8.css" type="text/css" />
<![endif]--> 
<!--[if lt IE 8]>
<link rel="stylesheet" href="%web_gallery%/v2/styles/ie.css" type="text/css" />
<![endif]--> 
<!--[if lt IE 7]>
<link rel="stylesheet" href="%web_gallery%/v2/styles/ie6.css" type="text/css" />
<script src="%web_gallery%/static/js/pngfix.js" type="text/javascript"></script>
<script type="text/javascript">
try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
</script>
 
<style type="text/css">
body { behavior: url(http://www.habbo.nl/js/csshover.htc); }
</style>
<![endif]-->
<meta name="build" content="%web_build_str%" />
<style type="text/css">
body { background-image: url('http://localhost/images/bg.gif') !important; font-family: Verdana; font-size: 12px; }

#text
{
	display: block;
	padding-top: 100px;
	padding-bottom: 10px;
	margin: 0 auto;
	text-align: right;
	width: 420px;
}

#loginblock
{
    display: block;
	background-color:#C0C0C0;
    border:1px solid gray;
    margin: 10px auto;
    padding:5px;
    width: 400px;
    padding: 5px 15px 10px 15px;
    box-shadow:2px 2px 10px gray; 
    -moz-box-shadow:2px 2px 10px gray;
    -webkit-box-shadow:2px 2px 10px gray;
}

#loginblock .info
{
	padding-bottom: 2px;
	margin-bottom: 5px;
}

input.biginput
{
	width: 100%;
	text-align: center;
	padding: 3px;
}

input.biginput-button
{
	width: 100%;
	text-align: center;
	padding: 3px;
    height: 90px;
}

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
background-image: url('http://localhost/images/top_logo_curtain.png');
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
</style>
</head>
<body>



<div id="loginblock">

	<div class="info">
	<p style="text-align:center;">
		<?php echo $misc['hk_login_phrase']; ?>
	</p>
	</div>
	
</div>
<div id="loginblock">
<center>
	<form method="post">

		<input type="text" name="usr" class="biginput" value="<?php if (LOGGED_IN) { echo USER_NAME; } ?>"><br />
		<br />
		<input type="password" name="pwd" class="biginput" value=""><br />
		<br />
		<input type="submit" style="font-size: 24px; font-style: bold;" class="biginput-button" value="Connexion">

	</form>
	</center>
</div>
<div id="loginblock">
<center><?php echo $misc['hk_login_footer']; ?></center>
</div>
<div class="bobba_curtain"></div>
</body>
</html>