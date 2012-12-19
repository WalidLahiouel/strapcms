	<div class="habblet-container ">		
		<div class="cbb clearfix blue "> 
			<h2 class="title">Nominees!</h2>
				<div id="habboclub-info" class="box-content">
<?php
	echo '<center><table border="0"><tr><td></td><td><b>Username</b></td><td><b>Current Votes</b></td></tr>';
	$getNominees = mysql_query("SELECT * FROM `prom_nominees` ORDER BY votes DESC LIMIT 20");
	while($data = mysql_fetch_assoc($getNominees))
	{
		$getAcc = mysql_query("SELECT * FROM users WHERE username = '" . $data['nominee'] . "'");
		while($sc = mysql_fetch_assoc($getAcc))
		{ 
			echo "<tr>";
			echo "<td align='center'> <img src='http://zaphotel.net/inc/imager.php?figure=" . $sc['look'] . "&size=s&direction=2&head_direction=3&gesture=sml&size=s'> </td>";
			echo "<td>" . $sc['username'] . "</td>";
			echo "<td align='center'>" . $data['votes'] . "</td>";
			echo "</tr>";
		}
	}
	echo '</table></center>';
?>

				</div>
		</div>
	</div>