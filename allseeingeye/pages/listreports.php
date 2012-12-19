<?php

if (!defined('IN_HK') || !IN_HK)
{
	exit;
}

if (!HK_LOGGED_IN || !$users->hasFuse(USER_ID, 'fuse_sysadmin'))
{
	exit;
}

require_once "top.php";
?>
<h1>Liste des reports de downtimes</h1>

<p>
	Listage des reports fait par un membre de l'équipe pour expliquer pourquoi l'hôtel est down, le système sera optimisé et amélioré plus tard.
</p>

<br />

<table width="100%" border="1">
<thead>
    <td>Pseudo</td>
    <td>Report</td>
</thead>
<?php

$get = dbquery("SELECT * FROM downtime ORDER BY username");

while ($reports = mysql_fetch_assoc($get))
{
	echo '<tr>';
	echo '<td>' . $reports['username'] . '</td>';
	echo '<td>' . $reports['report'] . '</td>';
    echo '</tr>';
}
?>
</table>

<?php

require_once "bottom.php";

?>