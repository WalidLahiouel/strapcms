<?php
if(!defined('NOWHOS'))
{
	define('NOWHOS', true);
}
define('Xukys', true);
require_once '../global.php';
require_once "../inc/class.homes.php";

if(isset($_POST["stickers"]))
	{
	
	$var = explode('/', $_POST['stickers']);
	//var_dump($var);
		foreach($var as $var_data)
			{
				if(empty($var_data))
				{
					break;
				}
				
				$vardata = explode(':', $var_data);
				$xyz = explode(',', $vardata[1]);
				
				$sql = mysql_query("SELECT skin FROM site_inventory_items WHERE userId = '" . USER_ID . "' AND id = '" . mysql_real_escape_string($vardata[0]) ."' AND isWaiting = '1' LIMIT 1");
				if(mysql_num_rows($sql) > 0)
					{
						$row = mysql_fetch_array($sql);
						
						mysql_query("INSERT INTO homes_items (id, home_id, type, x, y, z, data, skin, owner_id, link) VALUES (NULL, '".USER_ID."', 'sticker', '".mysql_real_escape_string($xyz[0])."', '".mysql_real_escape_string($xyz[1])."', '".mysql_real_escape_string($xyz[2])."', '".$row['skin']."', '', '".USER_ID."', '".mysql_real_escape_string($vardata[0])."');");
//						mysql_query("UPDATE site_inventory_items SET isWaiting = '0' WHERE id = '".mysql_real_escape_string($vardata[0])."' AND userId = '".USER_ID."' LIMIT 1;");
						//echo 'ok';
					}
				else
					{
						mysql_query("UPDATE homes_items SET x = '".mysql_real_escape_string($xyz[0])."', y = '".mysql_real_escape_string($xyz[1])."', z = '".mysql_real_escape_string($xyz[2])."' WHERE id = '".mysql_real_escape_string($vardata[0])."' AND owner_id = '".USER_ID."' LIMIT 1");
						//echo 'else';
					}
			}
	
	
	}
	
if(isset($_POST["stickienotes"]))
	{
	
	$varstickienotes = explode('/', $_POST['stickienotes']);
	//var_dump($var);
		foreach($varstickienotes as $var_datastickienotes)
			{
			if(empty($var_datastickienotes))
				{
					break;
				}
				$vardatastickienotes = explode(':', $var_datastickienotes);
				$xyzstickienotes = explode(',', $vardatastickienotes[1]);
				
				$sqlstickienotes = mysql_query("SELECT skin FROM site_inventory_items WHERE userId = '" . USER_ID . "' AND id = '" . mysql_real_escape_string($vardatastickienotes[0]) ."' AND isWaiting = '1' LIMIT 1");
				
				if(mysql_num_rows($sqlstickienotes) > 0)
					{
						$rowstickienotes = mysql_fetch_assoc($sqlstickienotes);
						
						mysql_query("INSERT INTO homes_items (id, home_id, type, x, y, z, data, skin, owner_id) VALUES (NULL, '".USER_ID."', 'sticker', '".mysql_real_escape_string($xyzstickienotes[0])."', '".mysql_real_escape_string($xyzstickienotes[1])."', '".mysql_real_escape_string($xyzstickienotes[2])."', '".$rowstickienotes['skin']."', '', '".USER_ID."');");
//						mysql_query("UPDATE site_inventory_items SET isWaiting = '0' WHERE id = '".mysql_real_escape_string($vardatastickienotes[0])."' AND userId = '".USER_ID."' LIMIT 1");
					}
				else
					{
						mysql_query("UPDATE homes_items SET x = '".mysql_real_escape_string($xyzstickienotes[0])."', y = '".mysql_real_escape_string($xyzstickienotes[1])."', z = '".mysql_real_escape_string($xyzstickienotes[2])."' WHERE id = '".mysql_real_escape_string($vardatastickienotes[0])."' AND owner_id = '".USER_ID."' LIMIT 1");
					}
			}
	
	
	}

	if(isset($_POST["widgets"]))
	{
	
	$varwidgets = explode('/', $_POST['widgets']);
	//var_dump($var);
		foreach($varwidgets as $var_datawidgets)
			{
			if(empty($var_datawidgets))
				{
					break;
				}
				$vardatawidgets = explode(':', $var_datawidgets);
				$xyzwidgets = explode(',', $vardatawidgets[1]);
				
				$sqlwidgets = mysql_query("SELECT skin FROM site_inventory_items WHERE userId = '" . USER_ID . "' AND id = '" . mysql_real_escape_string($vardatawidgets[0]) ."' AND isWaiting = '1' LIMIT 1");
				
				if(mysql_num_rows($sqlwidgets) > 0)
					{
						$rowwidgets = mysql_fetch_assoc($sqlwidgets);
						
						//mysql_query("INSERT INTO homes_items (id, home_id, type, x, y, z, data, skin, owner_id) VALUES (NULL, '".USER_ID."', 'sticker', '".mysql_real_escape_string($xyzwidgets[0])."', '".mysql_real_escape_string($xyzwidgets[1])."', '".mysql_real_escape_string($xyzwidgets[2])."', '".$rowwidgets['skin']."', '', '".USER_ID."');");
//						mysql_query("UPDATE site_inventory_items SET isWaiting = '0' WHERE id = '".mysql_real_escape_string($vardatawidgets[0])."' AND userId = '".USER_ID."' LIMIT 1");
					}
				else
					{
						mysql_query("UPDATE homes_items SET x = '".mysql_real_escape_string($xyzwidgets[0])."', y = '".mysql_real_escape_string($xyzwidgets[1])."', z = '".mysql_real_escape_string($xyzwidgets[2])."' WHERE id = '".mysql_real_escape_string($vardatawidgets[0])."' AND owner_id = '".USER_ID."' LIMIT 1");
					}
			}
	
	
	}
	
	if(isset($_POST['background']))
	{
		$background = $gtfo->cleanWord($_POST['background']);
		$bg = explode(':', $_POST['background']);
		
			if(is_numeric($bg[0]))
			{
				$sql = mysql_query("SELECT userId from site_inventory_items WHERE id = '".$bg[0]."'");
				$data = mysql_fetch_array($sql);
				//echo $bg[0];
					
					if(mysql_num_rows($sql) > 0)
					{
						if($data['userId'] == USER_ID)
						{
					
							mysql_query("UPDATE homes SET bgimage = '".$bg[1]."' WHERE home_id = '".USER_ID."'");
							//echo 'ok';
						}
					}
					
			}
		
		
		
	}
	
unset($_SESSION['startSessionEditHome']);	
?>
<script language="JavaScript" type="text/javascript">
waitAndGo('/home/<?php echo $_SESSION['UBER_USER_N']; ?>');
</script>