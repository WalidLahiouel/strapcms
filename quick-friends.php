<?php
	require_once "global.php";
	
	$result = dbquery("SELECT `receiver` FROM `messenger_friendships` WHERE `sender` = '".USER_ID."'");
	$num = mysql_num_rows($result);
	if ($num == 0)
	{
		print "None of your friends are online.";
	}
	else
	{
		
	$vrienden = array("online" => array(), "offline" => array());
	while ($row = mysql_fetch_array($result, MYSQL_NUM))
	{
		if ($users->Is_Online($row[0]))
			$vrienden['online'][] = $users->Id2Name($row[0]);
		else
			$vrienden['offline'][] = $users->Id2Name($row[0]);
	}
?>

<div class="qtab-subtitle even"><div class="qtab-category">Online friends</div></div>
    <ul id="online-friends">
        <?php
        	$oddeven = "even";
        	
        	foreach($vrienden['online'] as $vriend)
        	{
        		if ($oddeven == "even")
        			$oddeven = "odd";
        		else if ($oddeven == "odd")
        			$oddeven = "even";
        			
        		print "<li class='".$oddeven."'><a href='/home/".$vriend."'>".$vriend."</a></li>";
        	}
        ?>
    </ul>

    <div class="qtab-subtitle even"><div class="qtab-category">Offline friends</div></div>
    <ul id="offline-friends">
	    <?php
	    	$oddeven = "even";
	        	
	      foreach($vrienden['offline'] as $vriend)
	      {
	      	if ($oddeven == "even")
	        	$oddeven = "odd";
	        else if ($oddeven == "odd")
	        	$oddeven = "even";
	        			
	        	print "<li class='".$oddeven."'><a href='/home/".$vriend."'>".$vriend."</a></li>";
	      }
	    ?>
    </ul>
<?php } ?>
<p class="manage-friends"><a href="<?php print WWW; ?>/client">Friends list</a></p>