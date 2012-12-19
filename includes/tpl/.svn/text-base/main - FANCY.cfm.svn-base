<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<!-- Read config.ini settings & apply them -->
<cfset iniFile = expandPath("/config.ini")>
<cfset DSN = getProfileString(iniFile, "coldfusion", "DSN")>
<cfset CurrentStyle = getProfileString(iniFile, "settings", "style")>
<!-- Read config.ini settings & apply them -->

<cfinclude template = "/system/functions/checkusersession.cfm" />
<cfinclude template = "/system/functions/loadsettings.cfm" />

<cfif isdefined('url.login')>
	<cfquery name = "GrabUser" datasource = "#DSN#">
		SELECT *
		FROM users
		WHERE username = '#url.login#'
		AND ip_last = '#CGI.REMOTE_ADDR#'
	</cfquery>
	<cfif isdefined('GrabUser.recordcount') AND GrabUser.recordcount is 1>
		<cfset session.username = #url.login#>
	<cfelse>
		<cfset StructClear(session)>
		<cflocation url="/index.cfm" addtoken="no">
	</cfif>
</cfif>

<cfquery name = "User" datasource = "#DSN#">
	SELECT *
	FROM users
	WHERE username = '#session.username#'
	AND ip_last = '#CGI.REMOTE_ADDR#'
</cfquery>

<cfquery name = "News" datasource = "#DSN#">
	SELECT id, title, shortstory, image, published
	FROM cms_news
	ORDER BY ID DESC
	LIMIT 5
</cfquery>

<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" /> 
	<title>Phoenix 3.0</title> 
	<cfoutput>
		<link type="text/css" rel="stylesheet" href="/Public/Styles/#CurrentStyle#/CSS/main.css" />
	</cfoutput> 
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="/Public/JS/jquery.history.js"></script>

<cfoutput>
	<script type="text/javascript"> 
		var andSoItBegins = (new Date()).getTime();
		document.habboLoggedIn = true;
		var habboName = "#User.username#";
		var habboReqPath = "#cms_url#";
		var habboImagerUrl = "#cms_url#/Public/images/";
		var habboDefaultClientPopupUrl = "#cms_url#/client";
		window.name = "habboMain";
		if (typeof HabboClient != "undefined") { HabboClient.windowName = "ClientWndw"; }
	</script> 

	<script language="javascript"> 
		function RefreshUserCount()
		{
			var html = $.ajax({
			  url: "/online.cfm",
			  async: false
			}).responseText;
 			$('.OnlineCount').fadeOut(200, function () {
				$('.OnlineCount').css("display", "none")
				$('.OnlineCount').html(html + ' Users Online')
				$('.OnlineCount').fadeIn(200)
			});
			setTimeout("RefreshUserCount()",30000);
		}
		RefreshUserCount();
	</script>
	
	<script language="javascript"> 
	(function($){
		var origContent = "";
		var Currentstory = '#News.id#';
		var container = '##midcontent';
		function loadContent(hash) {
			if(hash != "") {
				if(origContent == "") {
					origContent = $(container).html();
				}
				$(container).load("/content/" + hash +"/index.cfm", function(){ 
				});
			} else if(origContent != "") {
				var html = $.ajax({
					url: "/content/" + hash + "/index.cfm",
					async: false
				}).responseText;
				$(container).html(html);
			}
		}
				
		$(document).ready(function() {
			$.history.init(loadContent);

			$('.navButton').click(function() {
				container = '##midcontent';
				$(container).slideToggle(300).delay(300);
				$(container).css('display', 'none');
				$('.navButton').css('font-weight','normal');
				$(this).css('font-weight','bolder');
				var url = $(this).attr('ref');
	 			url = url.replace(/^.*##/, '');
				$.history.load(url);
				$(container).slideToggle(500);
				return;
			});
			
			$('.storybox').click(function()  {
				var Newstory = $(this).attr('ref');
				container = '.HeadlineStory##story' + Currentstory;
				$(container).fadeOut(100, function () {
					$(container).css("display", "none")
					$('.HeadlineStory##story' + Newstory).fadeIn(200)
				});
				Currentstory = Newstory;
				return;
			});

			$('.UserMotto').blur(function()  {
				$('.UserMotto').css("display", "none")
				$.ajax({
					url: "/system/functions/updatemotto.cfm?motto=" + $('.UserMotto').val(),
					async: false
				})
				$('.Usersmotto').html($('.UserMotto').val())
				$('.Usersmotto').css("display", "block")
				return;
			});

		});
	})(jQuery);
	</script>
</cfoutput>
</head> 
 
<body> 
 
<div class="mainBox"> 
	<div class="top"> 
		<cfoutput><a href="./"><img src="/Public/Styles/#CurrentStyle#/Images/logo.png" /></a></cfoutput>
		<div style="float:right">
			<div class="usersBox" style="width:140px;">
				<div class="OnlineCount"><cfinclude template="/online.cfm" /> Users Online</div>
				<br/><a href="/system/functions/logout.cfm">Sign Out</a>
			</div>
			<div id="enter-hotel">
				<div class="open">
						<cfoutput><a href="/client/" target="ClientWndw" onclick="window.open('#cms_url#/client','ClientWndw','width=980,height=597');return false;">Enter Hotel<i></i></a></cfoutput>
					<b></b>
				</div>
			</div>
		</div>
		
		<cfset theroot = expandPath("/content/")>
		<cfdirectory action="LIST" directory="#theroot#" name="dirlist">
		<cfoutput>
			<div class="navBar">
				<cfloop query="dirlist">
					<div class="navButton" ref="#dirlist.name#">#listgetat(dirlist.name, 2, "-")#</div>
				</cfloop>
			</div>
		</cfoutput>
		
	</div> 

	<div class="SubnavBar">
		<div class="navButton" ref="me">Home</div>
		<div class="navButton" ref="community">Account Settings</div>
	</div>

	<div class="mid" id="midcontent"> 
		<cfinclude template="/content/1-Home/index.cfm" />
	</div> 

	<cfinclude template = "/system/footer.cfm" />
</div> 

</body> 
</html>