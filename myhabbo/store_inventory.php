<?php
ob_start();
if (!defined('NOWHOS')) {
    define('NOWHOS', true);
} //!defined('NOWHOS')
if (!defined('Xukys')) {
    define('Xukys', true);
} //!defined('Xukys')
require_once('../global.php');
$my_id = USER_ID;
$sql   = mysql_query("SELECT credits from users where id = '" . USER_ID . "' LIMIT 1");
$myrow = mysql_fetch_array($sql);

$type = $gtfo->cleanWord($_POST['type']);

$MyStickers    = "";
$getCategorys  = mysql_query("SELECT * FROM site_items_categorys");
$getMyStickers = mysql_query("SELECT * FROM site_inventory_items WHERE userId = '" . $my_id . "' AND type = 'Sticker'");
?>
<div style="position: relative;">
<div id="webstore-categories-container">
	<h4>Categories:</h4>
	<div id="webstore-categories">
<ul class="purchase-main-category">
		<li id="maincategory-1-stickers" class="selected-main-category webstore-selected-main">
			<div>Stickers</div>
			<ul class="purchase-subcategory-list" id="main-category-items-1">
			<?php
$c = 0;
while ($row = mysql_fetch_assoc($getCategorys)) {
    $c++;
?>
				<li id="subcategory-1-<?php
    echo $row['id'];
?>-stickers" class="subcategory<?php
    if ($c == "1") {
        echo "-selected";
    } //$c == "1"
?>">
					<div><?php
    echo $row['name'];
?></div>
				</li>
			<?php
} //$row = mysql_fetch_assoc($getCategorys)
?>
			</ul>
		</li>
		<li id="maincategory-2-backgrounds" class="main-category-no-subcategories">
			<div>Wallpapers</div>
			<ul class="purchase-subcategory-list" id="main-category-items-2">
				<li id="subcategory-2-52-backgrounds" class="subcategory">
					<div>store.subcategory.wallpapers</div>
				</li>
			</ul>
		</li>
		<li id="maincategory-6-stickie_notes" class="main-category-no-subcategories">
			<div>Notes</div>
			<ul class="purchase-subcategory-list" id="main-category-items-6">
				<li id="subcategory-6-54-stickie_notes" class="subcategory">
					<div>store.subcategory.all</div>
				</li>
			</ul>
		</li>
</ul>

	</div>
</div>

<div id="webstore-content-container">
	<div id="webstore-items-container">
		<h4>Select an item by clicking on it</h4>
		<div id="webstore-items"><ul id="webstore-item-list">
	<?php
require_once('store_inventory_items.php');
?>
</div>
	</div>
	<div id="webstore-preview-container">
		<div id="webstore-preview-default"></div>
		<div id="webstore-preview"></div>
	</div>
</div>

<div id="inventory-categories-container">
	<h4>Categories:</h4>
	<div id="inventory-categories">
<ul class="purchase-main-category">
	<li id="inv-cat-stickers" class="selected-main-category-no-subcategories">
		<div>Stickers</div>
	</li>
	<li id="inv-cat-backgrounds" class="main-category-no-subcategories">
		<div>Wallpapers</div>
	</li>
	<li id="inv-cat-widgets" class="main-category-no-subcategories">
		<div>Widgets</div>
	</li>
	<li id="inv-cat-notes" class="main-category-no-subcategories">
		<div>Notes</div>
	</li>
</ul>

	</div>
</div>

<div id="inventory-content-container">
	<div id="inventory-items-container">
		<h4>Select an item by clicking on it</h4>
		<div id="inventory-items"><ul id="inventory-item-list">
	<?php
require_once('store_inventory_items.php');
?>
</ul></div>
	</div>
	<div id="inventory-preview-container">
		<div id="inventory-preview-default"></div>
		<div id="inventory-preview"><h4>&nbsp;</h4>

<div id="inventory-preview-box"></div>

<div id="inventory-preview-place" class="clearfix">
	<div class="clearfix">
		<a href="#" class="new-button" id="inventory-place"><b>Place</b><i></i></a>
	</div>
</div>

</div>
	</div>
</div>

<div id="webstore-close-container">
	<div class="clearfix"><a href="#" id="webstore-close" class="new-button"><b>Close</b><i></i></a></div>
</div>
</div>
<?php
ob_end_flush();
?>