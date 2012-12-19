<?php


	echo '<div class="habblet-container ">		
<div class="cbb clearfix white "> 
<h2 class="title"><span style="float: left;">VIP Members</span> <span style="float: right; font-weight: normal; font-size: 75%;"></span></h2>';
	
	$getMembers = dbquery("SELECT id,username,motto,look,online FROM users WHERE rank = '2'");
	
	echo '<div class="box-content">';
	
	if (mysql_num_rows($getMembers) > 0)
	{
		$oe = 1;
		
		while ($member = mysql_fetch_assoc($getMembers))
		{
			if ($oe == 2)
			{
				$oe = 1;
			}
			else
			{
				$oe = 2;
			}
	
			echo '<table width="107%" style="padding: 5px; margin-left: -15px; background-color: ' . (($oe == 2) ? '#fff' : '#E6E6E6') . ';">
			<tbody>
				<tr>
					<td valign="middle" width="25">
						<img style="margin-top: -10px;" src="http://www.habbo.nl/habbo-imaging/avatarimage?action=crr=6&figure=' . $member['look'] . '&size=s">
					</td>
					<td valign="top">
						<b style="font-size: 110%;"><a href="%www%/home/' . clean($member['username']) . '">' . clean($member['username']) . '</a></b><br />
						<i>' . clean($member['motto']) . '</i><br />
						<br />';
	
						
					echo '</td>
					<td valign="top" style="float: right;">
						' . (($member['online'] == "1") ? '<b style="color: darkgreen;">Online</b>' : '<b style="color: darkred;">Offline</b>') . '
					</td>
				</tr>
			</tbody>
			</table>';
		}
	}
	else
	{
		echo '<i>No information avaliable.</i>';
	}
	
	echo '</div>
	</div> 
</div> 
<script type="text/javascript">if (!$(document.body).hasClassName(\'process-template\')) { Rounder.init(); }</script> ';


?>