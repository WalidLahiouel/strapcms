<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- Read config.ini settings & apply them -->
<cfset iniFile = expandPath("/config.ini")>
<cfset CurrentStyle = getProfileString(iniFile, "settings", "style")>
<!-- Read config.ini settings & apply them -->

<cfif isdefined('session.username')>
	<cflocation url="/main.cfm" addtoken="no">
<cfelseif isdefined('session.account')>
	<cflocation url="/characters.cfm" addtoken="no">
</cfif>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Phoenix 3.0</title>
	<cfoutput>
		<link type="text/css" rel="stylesheet" href="/Public/Styles/#CurrentStyle#/CSS/login.css" />
	</cfoutput>
</head>

<body>

<div class="loginBox">
	<div class="top">
		<cfoutput><a href="./"><img src="/Public/Styles/#CurrentStyle#/Images/logo.png" /></a></cfoutput>
		<cfinclude template="/online.cfm" /> Users Online
	</div>
	
	<div class="mid">
		<div class="loginForm">
			<cfif isdefined('url.error') AND url.error is "password">
				<div class="errormsg" id="habbo_name_message_box"> 
					<h3>Wrong password</h3> 
					Make sure you typed it out correctly!
				</div>
			<cfelseif isdefined('url.error') AND url.error is "username">
				<div class="errormsg" id="habbo_name_message_box"> 
					<h3>Wrong username</h3> 
					Make sure you typed it out correctly!
				</div>
			</cfif>
			<form action="/system/functions/login.cfm" method="post">
				New here? <a href="./register" class="reglink">REGISTER FOR FREE</a><br /><br /> 
				Username or Email:<br /><input type="text" name="username" /><br /><br />
				Password:<br /><input type="password" name="password" /><br /><br /> 
				<input type="submit" value="Sign In" onmousedown="this.style.backgroundColor='#ddd';" onmouseup="this.style.backgroundColor='#eee';" onmouseover="this.style.backgroundColor='#eee';" onmouseout="this.style.backgroundColor='#fff';" /> 
			</form>
		</div>
	</div>
	
	<cfinclude template = "/system/footer.cfm" />
</div>

</body>
</html>