<div class="habblet-container ">		
<div class="cbb clearfix red "> 

<?php

		$getInfo = dbquery("SELECT * FROM users WHERE username = '". mysql_real_escape_string($_GET["user"]) . "'");
		$Infos = mysql_fetch_assoc($getInfo);
		
		$getBadges = dbquery("SELECT * FROM user_badges WHERE user_id  = '" . $Infos['id'] . "'");
		
		$getAbout = dbquery("SELECT * FROM zcms_profiles WHERE id = '" . $Infos['id'] . "'");
		$About = mysql_fetch_assoc($getAbout);
		
		if(!mysql_num_rows($getAbout))
		{
			$anus = "This user has not upgraded their profile to the new system.";
		}
		else
		{
			$anus = strip_tags($About['about']);
		}

?>

<h2 class="title">User Badges</h2>
<br />
<?php
while($Badges = mysql_fetch_assoc($getBadges))
{
	echo "<img src='http://assets.zaphotel.net/c_images/album1584/".$Badges['badge_id'].".gif'>";
}
?>
<br />

</div></div>
<div class="habblet-container ">		
<div class="cbb clearfix red ">

<h2 class="title">About <?php echo $_GET['user']; ?></h2>
<br />
<center><?php echo strip_tags($About['about']); ?></center>

</div></div>