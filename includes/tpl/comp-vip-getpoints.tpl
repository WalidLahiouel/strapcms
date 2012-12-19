<div class="habblet-container ">		
<div class="cbb clearfix activehomes ">

<h2 class="title">Obtenir des Coquillages</h2>

    <?php
    $getPackages = dbquery("SELECT * FROM shells_packages");
    
    if (mysql_num_rows($getPackages) > 0)
	{
		$oe = 1;
		
		while ($package = mysql_fetch_assoc($getPackages))
		{
			if ($oe == 2)
			{
				$oe = 1;
			}
			else
			{
				$oe = 2;
			}
        echo '<table width="100%" style="padding: 5px; background-color: ' . (($oe == 2) ? '#9ED1E4' : '#BBDAE4') . ';">
        <tbody>
			<tr>
            <td width="110" style="padding: 10px;" valign="middle">
						<img style="margin-top: -10px;" src="' . $package['image'] . '">
					</td>
            <td valign="top" style="text-align: left;">
            <h3>' . $package['name'] .'</h3>
            <p>
				' . $package['desc'] .'
			</p>
            
            <div style="border-top: 1px dotted; padding-top: 8px; ">
            
            <div style="float: left; padding-top: 5px;">
					Seulement <b style="color:red">' . $package['price'] . '</b>
				</div>
            
            <div style="float: right;">
            <a href="%www%/purchase/confirmPaymentDetails/online/' . $package['number'] . '" class="new-button green-button" style="margin: 0;"><b>Acheter</b><i></i></a>
            </div>
            </div>
			
		</td>
	</tr>
	</table>';
    }
   }
    ?>
	
</div>
</div>
<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>