<?php

require_once "../includes/class.rooms.php";

if (!defined('IN_HK') || !IN_HK)
{
	exit;
}

if (!HK_LOGGED_IN || !$users->hasFuse(USER_ID, 'fuse_housekeeping_moderation'))
{
	exit;
}


if (isset($_GET['unban']) && is_numeric($_GET['unban']))
{
	dbquery("DELETE FROM bans WHERE id = '" . intval($_GET['unban']) . "'" . (($users->HasFuse(USER_ID, 'fuse_admin')) ? "" : " AND added_by = '" . HK_USER_NAME . "'") . " LIMIT 1");
	
	if (mysql_affected_rows() >= 1)
	{
		fMessage('ok', 'Ban removed.');
		
		$core->Mus('reloadbans');
		
		header("Location: index.php?_cmd=bans");
		exit;
	}
}

if (isset($_POST['bantype']))
{
	$bantype = filter($_POST['bantype']);
	$value = filter($_POST['value']);
	$reason = filter($_POST['reason']);
	$length = filter($_POST['length']);
	$noAppeal = '';
	
	if (isset($_POST['no-appeal']))
	{
		$noAppeal = filter($_POST['no-appeal']);
	}
	
	if ($bantype != "ip" && $bantype != "user")
	{
		$bantype = "user";
	}
	
	if (strlen($value) <= 0 || strlen($reason) <= 0 || !is_numeric($length) || intval($length) < 60)
	{
		fMessage('error', 'Please fill in all fields correctly! (Also take note a ban must be at least 1 minute in length!)');
		header("Location: index.php?_cmd=bans");
		exit;
	}
	
	// $type, $value, $reason, $expireTime, $addedBy
	uberCore::AddBan($bantype, $value, $reason, time() + $length, HK_USER_NAME, (($noAppeal == "checked") ? true : false));
	$core->Mus('reloadbans');
}

require_once "top.php";

?>			

<h1>Manage bans & appeals</h1>

<br />

<p>
	This tool allows you to place and manage bans.
</p>

<br />

<br />
<h2>Add new ban</h2>
<br />
<form method="post">

Ban type:<br />
<select name="bantype" onclick="onchange="if (this.value == 'ip') { document.getElementById('ban-value-heading').innerHTML = 'IP Address'; } else { document.getElementById('ban-value-heading').innerHTML = 'Username'; }" onkeyup="onchange="if (this.value == 'ip') { document.getElementById('ban-value-heading').innerHTML = 'IP Address'; } else { document.getElementById('ban-value-heading').innerHTML = 'Username'; }" onchange="if (this.value == 'ip') { document.getElementById('ban-value-heading').innerHTML = 'IP Address'; } else { document.getElementById('ban-value-heading').innerHTML = 'Username'; }">
<option value="ip">IP Ban</option>
<option value="user">User ban</option>
</select><br />
<br />

<span id="ban-value-heading">IP Ban</span>:<Br />
<input type="text" name="value"><br />
<br />

Reason:<br />
<input type="text" name="reason"><br />f
<br />

<script type="text/javascript">
function banPreset(val)
{
	document.getElementById('banlength').value = val;
}
</script>

Length (in seconds!):<br />
<input type="text" name="length" id="banlength"> secs<br />
<small>(Presets: <a href="#" onclick="banPreset(3600);">1hr</a> <a href="#" onclick="banPreset(10800);">3hr</a> <a href="#" onclick="banPreset(43200);">12hr</a> <a href="#" onclick="banPreset(86400);">1day</a> <a href="#" onclick="banPreset(259200);">3day</a> <a href="#" onclick="banPreset(604800);">1wk</a> <a href="#" onclick="banPreset(1209600);">2wk</a> <a href="#" onclick="banPreset(2592000);">1mo</a> <a href="#" onclick="banPreset(7776000);">3mo</a> <a href="#" onclick="banPreset(1314000);">1yr</a> <a href="#" onclick="banPreset(2628000);">2yr</a> <a href="#" onclick="banPreset(360000000);">Perm</a>)</small><br />
<br />

<input type="checkbox" name="no-appeal" value="checked"> Do NOT allow the user to appeal this ban<br />
<br />

<input type="submit" value="Ban!">

</form>

<br />
<h2>Bans list</h2>

<br />

<table width="100%" border="0">
<thead>
<tr>
	<td>Ban ID</td>
	<td>Data</td>
	<td align='center'>Reason</td>
	<td>Expires</td>
	<td>Added</td>
	<td>Option</td>
</tr>
</thead>
<tbody>
<?php

$getBans = dbquery("SELECT * FROM bans ORDER BY expire DESC");

while ($ban = mysql_fetch_assoc($getBans))
{
	echo '<tr>
	<td>' . $ban['id'] . '</td>
	<td>' . strtoupper($ban['bantype']) . ' Ban: <b>' . clean($ban['value']) . '</b></td>
	<td style="text-align: center; font-size: 90%;">' . clean($ban['reason'], true, true) . '</td>
	' . (($ban['expire'] <= time()) ? '<td style="text-align: center; background-color: #F6CECE; color: #B40404;">Expired ' . date('d F, Y', $ban['expire']) . '</td>' : '<td>Expires ' . date('d F, Y', $ban['expire']) . '</td>') . '
	<td>On ' . $ban['added_date'] . ' by ' . clean($ban['added_by']) . '</td>
	';
	

	
	echo '
	<td>';
	
	if (strtolower($ban['added_by']) == strtolower(HK_USER_NAME) || mysql_result(mysql_query("SELECT rank FROM users WHERE username = '" . USER_NAME . "'"), 0) > 8)
	{
		echo '<input type="button" onclick="document.location = \'index.php?_cmd=bans&unban=' . $ban['id'] . '\';" value="' . (($ban['expire'] <= time()) ? 'Remove' : 'Unban') . '">';
	}
	
	echo '</td></tr>';
}

?>
</body>
</table>

<?php

require_once "bottom.php";

?>