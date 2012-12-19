<div class="habblet-container ">		
<div class="cbb clearfix activehomes ">

<h2 class="title">Abonnements VIP</h2>

    <?php
    $getPackages = dbquery("SELECT * FROM vip_packages");
    
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
				<b style="' . (($users->GetUserVar(USER_ID, 'vip_points') < $package['price']) ? 'color: red;' : '' ) . '">' . $package['price'] . ' <img src="%www%/images/shell.png" style="vertical-align: middle;"></b>
				</div>
            
            <div style="float: right;">';
            
            if ($users->GetUserVar(USER_ID, 'vip_points') >= $package['price'] & $package['price'] != 0)
				{
					echo '<a href="#" class="new-button green-button" style="margin: 0;"><b>Acheter</b><i></i></a>';
				}
                elseif ($package['id'] == 1)
                {
                    echo '<a href="#" class="new-button green-button" style="margin: 0;"><b>Essayer !</b><i></i></a>';
                }
				else
				{
					echo '<a href="%www%/shells/get" class="new-button red-button" style="margin: 0;"><b>Pas assez de coquillages</b><i></i></a>';
				}
                echo '
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