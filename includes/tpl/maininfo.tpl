<div class="habblet-container ">		
<div class="cbb clearfix red "> 

<h2 class="title">Information: <?php echo mysql_real_escape_string($_GET["user"]); ?></h2>

<?php

		// run some queries.
		$getInfo = dbquery("SELECT * FROM users WHERE username = '". mysql_real_escape_string($_GET["user"]) . "'");
		$Infos = mysql_fetch_assoc($getInfo);
		
		if(!mysql_num_rows($getInfo))
		{
			Header("Location: social.php?user=".USER_NAME);
		}
		
		$getRank = dbquery("SELECT * FROM ranks WHERE id = '" . $Infos['rank'] . "'");
		$Rank = mysql_fetch_assoc($getRank);
		
		$getFrands = dbquery("SELECT * FROM messenger_friendships WHERE user_one_id = '" . $Infos['id'] . "'");
		$Frands = mysql_fetch_assoc($getFrands);
?>

<img src='http://www.habbo.nl/habbo-imaging/avatarimage?figure=<?php echo $Infos['look']; ?>&direction=4' align='right'>
<li>
<ol> <b>Username:</b> <?php echo $Infos['username']; ?> </ol>
<ol> <b>Rank:</b> <?php echo $Rank['name']; ?> </ol>
<ol> <b>Motto:</b> <?php echo $Infos['motto']; ?> </ol>
<ol> <b>Credits:</b> <?php echo $Infos['credits']; ?> </ol>
<ol> <b>Pixels:</b> <?php echo $Infos['activity_points']; ?> </ol>
<ol> <b>Friends:</b> <?php echo mysql_num_rows($getFrands); ?> </ol>
</li>

</div></div>
<?php if(mysql_real_escape_string($_GET["user"]))
{ ?>
<div class="habblet-container ">		
<div class="cbb clearfix red "> 

<h2 class="title">Control Panel</h2>

<center>coming soon.</center>

</div></div>

<?php } ?>