<?php
define('Xukys', true);
define('NOWHOS', true);
define('MUST_LOG', true);

require '../global.php';

if(isset($_POST['groupId']) && is_numeric($_POST['groupId']) && isset($_POST['anAccountId']) && is_numeric($_POST['anAccountId']))
$groupId = $gtfo->cleanWord($_POST['groupId']);
$AccountId = $gtfo->cleanWord($_POST['anAccountId']);

$checkMember = mysql_num_rows(dbquery("SELECT null FROM groups_memberships WHERE userid = '".$AccountId."' AND groupid = '".$groupId."' LIMIT 1;"));

if($checkMember > 0) {

$memberQuery = dbquery("SELECT id,look,username,motto,account_created FROM users WHERE id = '".$AccountId." LIMIT 1'");
if(mysql_num_rows($memberQuery) > 0) {
$data = mysql_fetch_array($memberQuery);

?>
<div class="avatar-list-info-container">
	<div class="avatar-info-basic clearfix">
		<div class="avatar-list-info-close-container"><a href="#" class="avatar-list-info-close" id="avatar-list-info-close-<?php echo $data['id']; ?>"></a></div>
		<div class="avatar-info-image">
			
			<img src="includes/imager.php?figure=<?php echo $data['look']; ?>&amp;size=b" alt="<?php echo $data['username']; ?>" />
		</div>
<h4><a href="/home/<?php echo $data['username']; ?>"><?php echo $data['username']; ?></a></h4>
<p>
<a href="<?php echo WWW; ?>/client" target="c0f14adbac8007cd664016827f5ebc02eff85b7d" onclick="HabboClient.openOrFocus(this); return false;">
	<?php
	if(!$users->IsUserOnline($data['id'])) {
	?>
	<img src="<?php echo WWW; ?>/web-gallery/images/myhabbo/profile/habbo_offline.gif" />
	<?php } else { ?>
	<img src="<?php echo WWW; ?>/web-gallery/images/myhabbo/profile/habbo_online_anim.gif" />
	<?php } ?>
</a>
</p>
<p>Zap created on: <b><?php echo substr($data['account_created'], 0, 11); ?></b></p>
<p><a href="/home/<?php echo $data['username']; ?>" class="arrow">Ver Página</a></p>
<p class="avatar-info-motto"><?php echo fixText($data['motto'], true, false, true, false, false); ?></p>
	</div>
	<div class="avatar-info-rights clearfix">
		<div>

		</div>
	</div>
</div>
<?php
	}
}
?>