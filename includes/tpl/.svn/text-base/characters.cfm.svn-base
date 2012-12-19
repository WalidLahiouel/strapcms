<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<!-- Read config.ini settings & apply them -->
<cfset iniFile = expandPath("/config.ini")>
<cfset DSN = getProfileString(iniFile, "coldfusion", "DSN")>
<cfset CurrentStyle = getProfileString(iniFile, "settings", "style")>
<!-- Read config.ini settings & apply them -->

<cfinclude template = "/system/functions/checkaccountsession.cfm" />

<cfquery name = "GrabAvatars" datasource = "#DSN#">
	SELECT *
	FROM users
	WHERE mail = '#session.account#'
	ORDER BY last_online DESC
	LIMIT 50
</cfquery>

<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" /> 
	<title>Phoenix 3.0</title> 
	<cfoutput>
		<link type="text/css" rel="stylesheet" href="/Public/Styles/#CurrentStyle#/CSS/avatarselect.css" />
	</cfoutput> 
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
</head> 

	<script language="javascript"> 
	(function($){
		$(document).ready(function() {
			$('.avatar').click(function()  {
				var Name = $(this).attr('alt');
				var Figure = $(this).attr('figure');
				var LoginDate = $(this).attr('lastlogin');
				container = '.CurrentAvatar';
				$(container).fadeOut(500, function () {
					$('#CharName').html(Name)
					$('.Mainavatar').html('<img src="http://www.habbo.com/habbo-imaging/avatarimage?figure=' + Figure + '" alt="' + Name + '" />')
					$('.LastLogin').html('Last login: ' + LoginDate)
					$(container).fadeIn(500)
				});
				return;
			});

			$('.LoginButton').click(function()  {
				var Name = $('#CharName').html();
				location.href='/system/functions/userlogin.cfm?name=' + Name;
				return;
			});

		});
		
	})(jQuery);
	</script>

<body> 
<div class="MainBox">
	<div class="top"> 
		<cfoutput><a href="./"><img src="/Public/Styles/#CurrentStyle#/Images/logo.png" /></a></cfoutput>
		<cfinclude template="/online.cfm" /> Users Online
	</div> 
	
	<div class="mid"> 
		<div class="CurrentAvatar">
			<cfoutput>
				<div class="box_header" id="CharName">#GrabAvatars.username#</div>
				<div class="Mainavatar"><img src="http://www.habbo.com/habbo-imaging/avatarimage?figure=#GrabAvatars.look#" /></div>
				<div class="LoginButton">Login</div>
				<div class="LastLogin">Last login: #DateFormat(dateAdd("s", GrabAvatars.last_online, "01/01/1970"))#</div>
			</cfoutput>
		</div> 

		<div class="AvatarSelection"> 
			<div class="box_header">Select an Avatar</div>
			<div class="Avatars">
				<cfoutput query="GrabAvatars">
					<img src="http://www.habbo.com/habbo-imaging/avatarimage?figure=#look#&size=s" figure="#look#" alt="#username#" class="avatar" lastlogin="#DateFormat(dateAdd('s', GrabAvatars.last_online, '01/01/1970'))#" />
				</cfoutput>
			</div>
			<form id="Add_Avatar" method="post" action="/register/step2.cfm">
				<input type="hidden" name="email" id="email" value="#session.account#" />
				<input type="hidden" name="bdday" id="bdday" value="why" />
				<input type="hidden" name="bdmonth" id="bdmonth" value="are" />
				<input type="hidden" name="bdyear" id="bdyear" value="you" />
				<input type="hidden" name="password" id="password" value="LookingHere" />
				<div class="AddAvatar" onclick="Add_Avatar.submit();">Add Avatar</div>
			</form>
		</div>
	</div> 
	
	<cfinclude template = "/system/footer.cfm" />
</div> 
 
</body> 
</html>