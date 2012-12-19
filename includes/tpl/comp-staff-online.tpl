<div class="habblet-container ">		
<div class="cbb clearfix green "> 

<h2 class="title">Staffs en ligne
</h2> 
<?php

$getMembers = dbquery("SELECT id,username,motto,look,online FROM users WHERE rank > '3' AND online = '1'");

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
						<img style="margin-top: -10px;" src="http://habbr.info/habbo-imaging/avatarimage?figure=' . $member['look'] . '&size=m">
					</td>
					<td valign="top">
						<b style="font-size: 110%;"><a href="%www%/home/' . clean($member['username']) . '">' . clean($member['username']) . '</a></b><br />
						<i>' . clean($member['motto']) . '</i><br />
						<br />
                        </td>
                        </tr>
			</tbody>
			</table>';
    		}
	}
	else
	{
		echo '<i>Il n\'y a pas de staffs en ligne.</i>';
	}
	
	echo '</div>
	</div> 
</div>
<script type="text/javascript">if (!$(document.body).hasClassName(\'process-template\')) { Rounder.init(); }</script> ';

?>