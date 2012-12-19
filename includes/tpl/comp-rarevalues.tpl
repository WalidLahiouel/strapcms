<?php
	$image_dir = "http://zaphotel.net/valuepics"; // No ending slash
	
	$getValues = mysql_query("SELECT * FROM `values`");
?>
	<div class="habblet-container ">		
		<div class="cbb clearfix blue "> 
			<h2 class="title">Rare Values</h2>
				<div id="habboclub-info" class="box-content">
					<div style="text-align: center;">
<?php

	# Output the HTML tables
	echo '	<table>
				<tr>
					<td width="90px" align="center"></td>
					<td width="100px" align="center"><b>Price in GBs</b></td>
					<td><b>Price in Thrones</b></td>
				</tr>';
				
	while($value = mysql_fetch_assoc($getValues))
	{
		echo '		<tr>
						<td align="center"><img src="' . $image_dir . "/" . $value['image'] . '"></td>
						<td align="center">' . $value['price_gb'] . '</td>
						<td align="center">' . $value['price_t'] . '</td>
					</tr>';
	}
	
	echo '	</table>';
?>

					</div>
				</div>
		</div>
	</div>

	