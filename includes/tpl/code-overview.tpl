<?php
	// Lets get down to business and get the codes
	$q1 = dbquery("SELECT * FROM vip_codes WHERE purchased_by = '" . USER_NAME . "' AND redeemed = '0'");
	$q2 = dbquery("SELECT * FROM vip_codes WHERE redeemed = '1' AND purchased_by = '" . USER_NAME . "'");
?>
<div class="habblet-container ">		
<div class="cbb clearfix red "> 
<h2 class="title">Your codes</h2>
<center>
<h2>Un-used codes</h2><br />
<?php 
	if(!mysql_num_rows($q1)) { echo "You don't have any codes."; } else {
	while($a1 = mysql_fetch_assoc($q1)) { ?>
Code: <b><?php echo $a1['key']; ?></b> | Product: <b><?php echo $a1['product']; ?></b> <?php } } ?>
<br />
<br />
<h2>Redeemed codes</h2><br />
<table><tr><td><b>Product</b></td><td align='center' width='150'><b>Purchased by</b></td><td><b>Redeemed by</b></td></tr>
<?php if(!mysql_num_rows($q2)) { echo "You don't have any redeemed codes."; } else {
	while($a2 = mysql_fetch_assoc($q2)) { ?>
<td><?php echo $a2['product']; ?></td> <td align='center' width='150'><?php echo $a2['purchased_by']; ?></td> <td align='right'><?php echo $a2['redeemed_by']; ?></td></tr> <?php } } ?>
<br />
</table>
</center>
</div></div>