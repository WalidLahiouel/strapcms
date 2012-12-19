<?php

if (!defined('IN_HK') || !IN_HK)
{
	exit;
}

if (!HK_LOGGED_IN)
{
	exit;
}

require_once "top.php";

?>

<h1 style="border: 1px solid; "><img src="images/uberdown.png" style="vertical-align: middle;"> REPORT DOWNTIME <span style="font-weight: normal;">Emergency reporting</span></h1>

<h2 style="border: 1px solid; padding: 3px;"><b>WARNING:</b> This is only for CRITICAL issues such as reporting downtime. Abuse of this system <u>WILL</u> lead to <u>REMOVAL</u>.</h2>

<form method="post" style="margin-left: auto; margin-right: auto; margin-top: 40px; margin-bottom: 40px; border: 1px solid; width: 75%;">

<h1 style="padding: 10px;">Report form</h1>

<p style="padding: 10px;">

	In the event of a serious technical problem with the hotel, a system called Zapdown comes into play. Selected individuals (including the Moderators and staff at Zap) have access to a web-based form, where they can report critical disruptions to the service. While you are working a shift as Moderator it is your responsibility to report major problems promptly.

</p>

<p>

	<ol style="margin-left: 40px;">
		<li />First check the STATUS TOOL in Housekeeping - <?php echo WWW; ?>/manage/.<br />
		<li />If you see any RED ERROR, there is most likely a problem. This may not always be accurate.<br />
		<li />If you are certain there is a problem, use the form below to report it.
		<li /><i style="color: red;">Allow up to 15 minutes for us to resolve the problem before reporting it. If the Administrators are aware of the problem, then no need to report it.<br /><b>Always be short and descriptive, and never spam this system. One report will suffice.</b></i>
	</ol>

</p>

<br />
<hr />

<?php

if (isset($_POST['downtime_reason'])) {

dbquery("INSERT INTO downtime (username,report) VALUES ('" . USER_NAME . "','" . filter($_POST['downtime_reason']) . "')");

?>

<h1 style="text-align: center; color: blue;">Your report has been filed. Thankyou.</h1>
<?php } else { ?>
<textarea rows="5" name="downtime_reason" style="width: 96%; margin: 15px; padding: 5px; font-size: 140%;" onclick="if(this.value=='Describe the problem. Eg. The hotel is offline'){this.value='';}">Describe the problem. Eg. The hotel is offline</textarea>

<input type="submit" style="margin: 15px; margin-top: 0; float: left; padding: 5px; font-size: 160%; width: 45%; font-weight: bold;" value="REPORT DOWNTIME">
<input type="button" onclick="window.location = 'main';" style="margin: 15px; margin-top: 0; float: right; padding: 5px; font-size: 150%; width: 45%;" value="Cancel report">

<div style="clear: both;"></div>
<?php } ?>

</form>

<?

require_once "bottom.php";

?>