<?php
if(!defined("NOWHOS"))
{
	define("NOWHOS", TRUE);
}
if(!defined("Xukys"))
{
define("Xukys", TRUE);
}
require_once('../global.php');

	if(!LOGGED_IN)
	{
		header('Location: '.WWW.'/');
	}


	$widgetId = $gtfo->cleanWord($_POST['widgetId']);

if(isset($_POST['privileged']))
{
	$privileged = $gtfo->cleanWord($_POST['privileged']);
}
if(isset($_POST['zindex']))
{
$zindex = $gtfo->cleanWord($_POST['zindex']);
}
$my_id = USER_ID;
$id = USER_ID;

switch($widgetId)
{
	case "5":
	$widget = "GuestbookWidget";
	break;
	case "3":
	$widget = "FriendsWidget";
	break;
	case "21":
	$widget = "BadgesWidget";
	break;
	case "15":
	$widget = "RatingWidget";
	break;
	case "7":
	$widget = "GroupsWidget";
	break;
	case "2":
	$widget = "RoomsWidget";
	break;
	case "17":
	$widget = "TraxPlayerWidget";
	break;
}

if(!$users->haveWidget($id, $widget))
{
	mysql_query("INSERT INTO homes_items (id, home_id, type, x, y, z, data, skin, owner_id, link) VALUES (NULL, '".USER_ID."', 'widget', '15', '25', '12', '".$widget."', 'w_skin_goldenskin', '".USER_ID."', '0');");
}
else
{
	exit;
}

$getWidget = mysql_query("SELECT * FROM homes_items WHERE owner_id = '" . $my_id . "' AND data = '" . $widget . "' AND type = 'widget' LIMIT 1");
$row = mysql_fetch_assoc($getWidget);
header("X-JSON: {\"id\":\"" . $row['id'] . "\"}");
?>

<?php if($widget == "GuestbookWidget") { ?>

<div class="movable widget GuestbookWidget" id="widget-<?php echo $row['id']; ?>" style=" left: <?php echo $row['x']; ?>px; top: <?php echo $row['y']; ?>px; z-index: <?php echo $row['z']; ?>;">
<div class="<?php echo $row['skin']; ?>">
	<div class="widget-corner" id="widget-<?php echo $row['id']; ?>-handle">
		<div class="widget-headline"><h3>
<img src="<?php echo WWW.'/web-gallery'; ?>/images/myhabbo/icon_edit.gif" width="19" height="18" class="edit-button" id="widget-<?php echo $row['id']; ?>-edit" />
<script language="JavaScript" type="text/javascript">
Event.observe("widget-<?php echo $row['id']; ?>-edit", "click", function(e) { openEditMenu(e, <?php echo $row['id']; ?>, "widget", "widget-<?php echo $row['id']; ?>-edit"); }, false);
</script>
		<span class="header-left">&nbsp;</span><span class="header-middle">My Guestbook (<span id="guestbook-size">0</span>) <span id="guestbook-type" class="public"><img src="<?php echo WWW; ?>/images/groups/status_exclusive.gif" title="myhabbo.guestbook.unknown.private" alt="myhabbo.guestbook.unknown.private"/></span></span><span class="header-right">&nbsp;</span></h3>
		</div>	
	</div>
	<div class="widget-body">
		<div class="widget-content">
<div id="guestbook-wrapper" class="gb-public">
<ul class="guestbook-entries" id="guestbook-entry-container">
	<div id="guestbook-empty-notes">No notes.</div>
</ul></div>


<script type="text/javascript">	
	
		var gb<?php echo $row['id']; ?> = new GuestbookWidget('<?php echo time(); ?>', '<?php echo $row['id']; ?>', 500);
		var editMenuSection = $('guestbook-privacy-options');
		if (editMenuSection) {
			gb<?php echo $row['id']; ?>.updateOptionsList('public');
		}
	
</script>
		<div class="clear"></div>
		</div>
	</div>
</div>
</div>

<?php } else if($widget == "FriendsWidget") { ?>

<div class="movable widget FriendsWidget" id="widget-<?php echo $row['id']; ?>" style=" left: <?php echo $row['position_left']; ?>px; top: <?php echo $row['position_top']; ?>px; z-index: <?php echo $row['position_z']; ?>;">
<div class="<?php echo $row['skin']; ?>">
	<div class="widget-corner" id="widget-<?php echo $row['id']; ?>-handle">
		<div class="widget-headline"><h3>
<img src="http://xukys-hotel.com/web-gallery/images/myhabbo/icon_edit.gif" width="19" height="18" class="edit-button" id="widget-<?php echo $row['id']; ?>-edit" />
<script language="JavaScript" type="text/javascript">
Event.observe("widget-<?php echo $row['id']; ?>-edit", "click", function(e) { openEditMenu(e, <?php echo $row['id']; ?>, "widget", "widget-<?php echo $row['id']; ?>-edit"); }, false);
</script>
		<span class="header-left">&nbsp;</span><span class="header-middle">My friends (<span id="avatar-list-size">0</span>)</span><span class="header-right">&nbsp;</span></h3>
		</div>	
	</div>
	<div class="widget-body">
		<div class="widget-content">

<div id="avatar-list-search">
<input type="text" style="float:left;" id="avatarlist-search-string"/>
<a class="new-button" style="float:left;" id="avatarlist-search-button"><b>Search</b><i></i></a>
</div>
<br clear="all"/>

<div id="avatarlist-content">

<div class="avatar-widget-list-container">
No friends

<div id="avatar-list-info" class="avatar-list-info">
<div class="avatar-list-info-close-container"><a href="#" class="avatar-list-info-close"></a></div>
<div class="avatar-list-info-container"></div>
</div>

</div>

<div id="avatar-list-paging">
    0 - 0
<input type="hidden" id="pageNumber" value="0"/>
<input type="hidden" id="totalPages" value="0"/>
</div>

<script type="text/javascript">
</script>

</div>
		<div class="clear"></div>
		</div>
	</div>
</div>
</div>

<?php } else if($widget == "BadgesWidget") { ?>

<div class="movable widget BadgesWidget" id="widget-<?php echo $row['id']; ?>" style=" left: <?php echo $row['x']; ?>px; top: <?php echo $row['y']; ?>px; z-index: <?php echo $row['z']; ?>;">
<div class="<?php echo $row['skin']; ?>">
	<div class="widget-corner" id="widget-<?php echo $row['id']; ?>-handle">
		<div class="widget-headline"><h3>
<img src="http://xukys-hotel.com/web-gallery/images/myhabbo/icon_edit.gif" width="19" height="18" class="edit-button" id="widget-<?php echo $row['id']; ?>-edit" />
<script language="JavaScript" type="text/javascript">
Event.observe("widget-<?php echo $row['id']; ?>-edit", "click", function(e) { openEditMenu(e, <?php echo $row['id']; ?>, "widget", "widget-<?php echo $row['id']; ?>-edit"); }, false);
</script>
		<span class="header-left">&nbsp;</span><span class="header-middle">Placas y Recompensas</span><span class="header-right">&nbsp;</span></h3>
		</div>	
	</div>
	<div class="widget-body">
		<div class="widget-content">
    <div id="badgelist-content">
    <ul class="clearfix">
		<?php
		$getMyBadges = mysql_query("SELECT badge_id FROM user_badges WHERE user_id = '" . $my_id . "' LIMIT 6");
		if(mysql_num_rows($getMyBadges) > 0) {
		while($row = mysql_fetch_assoc($getMyBadges)) {
		?>
            <li style="background-image: url(<?php echo 'http://images.xukys-hotel.com/c_images/album1584'; ?>/<?php echo $row['badge_id']; ?>.gif)"></li>
		<?php } } else { ?>
			No tienes placas
		<?php } ?>
    </ul>


    </div>
		<div class="clear"></div>
		</div>
	</div>
</div>
</div>
<?php } else if($widget == "RoomsWidget") { ?>
<div class="movable widget RoomsWidget" id="widget-<?php echo $row['id']; ?>" style=" left: <?php echo $row['x']; ?>px; top: <?php echo $row['y']; ?>px; z-index: <?php echo $row['z']; ?>;">
<div class="<?php echo $row['skin']; ?>">
	<div class="widget-corner" id="widget-<?php echo $row['id']; ?>-handle">

		<div class="widget-headline"><h3>
		<?php if($inEdit) { ?>
		<img src="http://xukys-hotel.com/web-gallery/images/myhabbo/icon_edit.gif" width="19" height="18" class="edit-button" id="widget-<?php echo $row['id']; ?>-edit" />
		<script language="JavaScript" type="text/javascript">
		Event.observe("widget-<?php echo $row['id']; ?>-edit", "click", function(e) { openEditMenu(e, <?php echo $row['id']; ?>, "widget", "widget-<?php echo $row['id']; ?>-edit"); }, false);
		</script>
		<?php } else { ?><span class="header-left">&nbsp;</span><span class="header-middle">MIS SALAS</span><span class="header-right">&nbsp;</span><?php } ?></h3>
		</div>	
	</div>
	<div class="widget-body">
		<div class="widget-content">
    No tienes Salas
		<div class="clear"></div>
		</div>
	</div>

</div>
</div>
<?php } else if($widget == "RatingWidget") { ?>
<div class="movable widget RatingWidget" id="widget-<?php echo $row['id']; ?>" style=" left: <?php echo $row['x']; ?>px; top: <?php echo $row['y']; ?>px; z-index: <?php echo $row['x']; ?>;">
<div class="<?php echo $row['skin']; ?>">
	<div class="widget-corner" id="widget-<?php echo $row['id']; ?>-handle">
		<div class="widget-headline"><h3>
<img src="http://xukys-hotel.com/web-gallery/images/myhabbo/icon_edit.gif" width="19" height="18" class="edit-button" id="widget-<?php echo $row['id']; ?>-edit" />
<script language="JavaScript" type="text/javascript">
Event.observe("widget-<?php echo $row['id']; ?>-edit", "click", function(e) { openEditMenu(e, <?php echo $row['id']; ?>, "widget", "widget-<?php echo $row['id']; ?>-edit"); }, false);
</script>
		<span class="header-left">&nbsp;</span><span class="header-middle">Mis votos</span><span class="header-right">&nbsp;</span></h3>
		</div>	
	</div>
</div>
</div>
<?php } else if($widget == "GroupsWidget") { 
$getMyGroups = mysql_query("SELECT * FROM users_groups_memberships WHERE userID = '" . $my_id . "'");
$myGroups = mysql_num_rows($getMyGroups);
?>
<div class="movable widget <?php echo $row['var']; ?>" id="widget-<?php echo $row['id']; ?>" style=" left: <?php echo $row['position_left']; ?>px; top: <?php echo $row['position_top']; ?>px; z-index: <?php echo $row['position_z']; ?>;">
<div class="<?php echo $row['skin']; ?>">
	<div class="widget-corner" id="widget-<?php echo $row['id']; ?>-handle">
		<div class="widget-headline"><h3>
		<img src="http://xukys-hotel.com/web-gallery/images/myhabbo/icon_edit.gif" width="19" height="18" class="edit-button" id="widget-<?php echo $row['id']; ?>-edit" />
		<script language="JavaScript" type="text/javascript">
		Event.observe("widget-<?php echo $row['id']; ?>-edit", "click", function(e) { openEditMenu(e, <?php echo $row['id']; ?>, "widget", "widget-<?php echo $row['id']; ?>-edit"); }, false);
		</script>
		<span class="header-left">&nbsp;</span><span class="header-middle">Mis Grupos (<span id="groups-list-size">0</span>)</span><span class="header-right">&nbsp;</span></h3>
		</div>	
	</div>
	<div class="widget-body">
		<div class="widget-content">

<?php if($myGroups > 0) { ?>
<div class="groups-list-container">
<ul class="groups-list">
	<?php while($row = mysql_fetch_assoc($getMyGroups)) { 
	$groupName = $Users->getGroupData("name", $row['groupID']);
	?>
	<li title="<?php echo $groupName; ?>" id="groups-list-<?php echo $userId; ?>-<?php echo $row['groupID']; ?>">
		<div class="groups-list-icon"><a href="<?php echo PATH; ?>/groups/<?php echo $row['groupID']; ?>/id"><img src="<?php echo PATH; ?>/habbo-imaging/badge/<?php echo $row['badge']; ?>.gif"/></a></div>
		<div class="groups-list-open"></div>
		<h4>
		<a href="http://xukys-hotel.com/groups/<?php echo $row['groupID']; ?>/id"><?php echo $groupName; ?></a>

		</h4>
		<p>
		Grupo creado:<br /> 
		<b><?php echo $Users->getGroupData("created", $row['groupID']); ?></b>
		</p>
		<div class="clear"></div>
	</li>
	<?php } ?>
</ul>
</div>
<?php } else { ?>
<div class="groups-list-none">
No eres miembro de ningún Grupo
</div>
<?php } ?>

<div class="groups-list-loading"><div><a href="#" class="groups-loading-close"></a></div><div class="clear"></div><p style="text-align:center"><img src="http://xukys-hotel.com/web-gallery/images/progress_bubbles.gif" alt="" width="29" height="6" /></p></div>
<div class="groups-list-info"></div>

		<div class="clear"></div>
		</div>
	</div>
</div>
</div>

<script type="text/javascript">	
document.observe("dom:loaded", function() {
	new GroupsWidget('<?php echo $userId; ?>', '<?php echo $row['id']; ?>');
});
</script>
<?php } else if($widget == "RoomsWidget") { ?>
<div class="movable widget RoomsWidget" id="widget-<?php echo $row['id']; ?>" style=" left: <?php echo $row['position_left']; ?>px; top: <?php echo $row['position_top']; ?>px; z-index: <?php echo $row['position_z']; ?>;">
<div class="<?php echo $row['skin']; ?>">
	<div class="widget-corner" id="widget-<?php echo $row['id']; ?>-handle">

		<div class="widget-headline"><h3>
		<img src="http://xukys-hotel.com/web-gallery/images/myhabbo/icon_edit.gif" width="19" height="18" class="edit-button" id="widget-<?php echo $row['id']; ?>-edit" />
		<script language="JavaScript" type="text/javascript">
		Event.observe("widget-<?php echo $row['id']; ?>-edit", "click", function(e) { openEditMenu(e, <?php echo $row['id']; ?>, "widget", "widget-<?php echo $row['id']; ?>-edit"); }, false);
		</script>
		<span class="header-left">&nbsp;</span><span class="header-middle">MIS SALAS</span><span class="header-right">&nbsp;</span></h3>
		</div>	
	</div>
	<div class="widget-body">
		<div class="widget-content">
    No tienes Salas
		<div class="clear"></div>
		</div>
	</div>

</div>
</div>
<?php } else if($widget == "TraxPlayerWidget") { ?>
<div class="movable widget TraxPlayerWidget" id="widget-<?php echo $row['id']; ?>" style=" left: <?php echo $row['position_left']; ?>px; top: <?php echo $row['position_top']; ?>px; z-index: <?php echo $row['position_z']; ?>;">
<div class="<?php echo $row['skin']; ?>">
	<div class="widget-corner" id="widget-<?php echo $row['id']; ?>-handle">
		<div class="widget-headline"><h3>
		<img src="http://xukys-hotel.com/web-gallery/images/myhabbo/icon_edit.gif" width="19" height="18" class="edit-button" id="widget-<?php echo $row['id']; ?>-edit" />
		<script language="JavaScript" type="text/javascript">
		Event.observe("widget-<?php echo $row['id']; ?>-edit", "click", function(e) { openEditMenu(e, <?php echo $row['id']; ?>, "widget", "widget-<?php echo $row['id']; ?>-edit"); }, false);
		</script>
		<span class="header-left">&nbsp;</span><span class="header-middle">REPRODUCTOR</span><span class="header-right">&nbsp;</span></h3>
		</div>	
	</div>
	<div class="widget-body">
		<div class="widget-content">


No hay canciones seleccionadas


		<div class="clear"></div>
		</div>
	</div>
</div>
</div>
<?php } ?>