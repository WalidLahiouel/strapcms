<?php
	$fr_val = $users->GetUserVar(USER_ID, "block_newfriends");
	if($fr_val == 1) { $formval = $fr_val . '" checked=checked"'; } else { $formval = $fr_val; }
    
    $fr_val_2 = $users->GetUserVar(USER_ID, "hide_online");
	if($fr_val_2 == 1) { $formval_2 = $fr_val_2 . '" checked=checked"'; } else { $formval_2 = $fr_val_2; }
?>
<div class="habblet-container" style="float:left; width: 560px;"> 
<div class="cbb clearfix settings"> 
 
<h2 class="title">Mes Préférences</h2> 
<div class="box-content"> 
	<b>Mes Préférences</b> <br />
	Tu peux changer tes préférences ici. <br /> <br />

<?php if(isset($_POST["SET_NEW_VALUES"])) {
	$val = filter($_POST["block_fr_h"]) & filter($_POST["hide_online_h"]);
	if($fr_val == "1") {
		dbquery("UPDATE users SET block_newfriends = '0' WHERE id = '" . USER_ID . "'");
	} 
	else if($fr_val == "0") {
		dbquery("UPDATE users SET block_newfriends = '1' WHERE id = '" . USER_ID . "'");
	}
    else if($fr_val_2 == "1") {
        dbquery("UPDATE users SET hide_online = '0' WHERE id = '" . USER_ID . "'");
    }
    else if($fr_val_2 == "0") {
        dbquery("UPDATE users SET hide_online = '1' WHERE id = '" . USER_ID . "'");
    }
	
 ?> 
 
 	<div class="rounded rounded-green">
		Tes changements ont bien été pris en compte.<br />
	</div>
	<div>&nbsp;</div>
	
<?php
	}
?>
	
<form method="post">
<input type="checkbox" name="block_fr" value="<?php echo $fr_val; ?>" <?php if($fr_val == '1') { echo 'checked="checked"'; } ?> align="left" /> Bloquer les invitations en tant qu'amis <br />
<input type="hidden" name="block_fr_h" value="<?php echo $formval; ?>"> <br />
<input type="checkbox" name="hide_online" value="<?php echo $fr_val_2; ?>" <?php if($fr_val_2 == '1') { echo 'checked="checked"'; } ?> align="left" /> Ne plus me montrer en ligne <br />
<input type="hidden" name="hide_online_h" value="<?php echo $formval_2; ?>"> <br />

<br />
<input type="submit" class="new-button" value="Sauvegarder" name="SET_NEW_VALUES" />
</form>
</div> 

</div> 
</div> 