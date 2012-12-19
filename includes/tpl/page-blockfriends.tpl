<div class="habblet-container" style="float:left; width: 560px;"> 
<div class="cbb clearfix settings"> 
 
<h2 class="title">Block Friend Requests</h2> 
<div class="box-content"> 

<?php if ($updateResult == 1) { ?>
	<div class="rounded rounded-green">
		Success! Account Settings are Updated!<br />
	</div>
	<div>&nbsp;</div>
<?php } ?>

<?php if ($updateResult == 2) { ?>
	<div class="rounded rounded-red">
		Error! Missing Fields and/or Invalid Entries!<br />
	</div>
	<div>&nbsp;</div>
<?php } ?>

Block Friends is a secure page in which a user may change his/her Friend Request Setting. For security purposes, you must know the existing password and/or the security pin of the account before proceeding.

<br>
<br>

<form method="post" action="">
<table>
<tr>
<td>Current Password <?php if ($error == 1) { ?> <span style="color:red; font-size:10px;">* The password did not match or was invalid.</span> <?php } ?></td>
</tr>
<tr>
<td><input type="password" name="cpassword"></td>
</tr>
<tr>
<td><span style="color:#c0bdbd;">To ensure you're the account owner and other security purposes, enter your current password.</span><br><br></td>
</tr>
<tr>
<td></td>
</tr>

<tr>
<td> </td>
</tr>
<tr>
<td>Friend Request</td>
</tr>

<tr>
<td><select name="block">
  	<option value="1">Block</option>
  	<option value="0">Unblock</option>
 	</select></td>
</tr>

<tr>
<td><span style="color:#c0bdbd;">Please select if you want to Block or Unblock Friend Requests.</span><br><br></td>
</tr>

<tr>
<td>Confirm Block Friend Request</td>
</tr>
   
<tr>
<td><select name="rblock">
  	<option value="1">Block</option>
  	<option value="0">Unblock</option>
  	</select></td>
</tr>
<tr>
<td><span style="color:#c0bdbd;">Please reconfirm if you want to Block or Unblock Friend Requests.</span><br><br></td>
</tr>



<tr>
<td><input type="submit" name="submit"></td>
</tr>
</table>
</form>
</div> 

</div> 
</div> 