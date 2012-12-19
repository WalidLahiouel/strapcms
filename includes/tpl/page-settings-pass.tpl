<?php
 
        // Password changing script for UberCMS
        // Recoded: 6th March 2012.
        // Copyright (c) Jonty M
        // Another recode: 19/12/2012
        // Copyright (c) Walid 'Jack'
       
        if(isset($_POST["submit"])) {
        if(isset($_POST["old_password"]) && isset($_POST["password_one"]) && isset($_POST["password_two"]))
        {
                // Process the $_POST data, encrypt it so it cannot be exploited & prepare it so
                // it can be compared with the hash in the database.
                $user['old_password'] = $users->UserHash($_POST["old_password"], strtolower(USER_NAME));
                $user['new_pass_one'] = $users->UserHash($_POST["password_one"], strtolower(USER_NAME));
                $user['new_pass_two'] = $users->UserHash($_POST["password_two"], strtolower(USER_NAME));
               
                // Get the users variables from the database
                $user['current_password'] = mysql_result(mysql_query("SELECT password FROM users WHERE username = '" . USER_NAME . "'"), 0);
               
                if($user['old_password'] == $user['current_password'])
                {
                        if($user['new_pass_one'] == $user['new_pass_two'])
                        {
                                mysql_query("UPDATE users SET password = '" . $user['new_pass_two'] . "' WHERE username = '" . USER_NAME . "'");
                                $_SESSION["UBER_USER_N"] = USER_NAME;
                                $_SESSION["UBER_USER_H"] = $user['new_pass_two'];
                               
                                define('success', "Password changed successfully.");
                        }
                        else
                        {
                                define('error', "Your new passwords need to match.");
                        }
                }
                else
                {
                        define('error', "Your old password doesn't match with the one we have on our records.");
                }
        }
        else
        {
                define('error', "Please fill in all the fields.");
        }
}
 
?>
<div class="habblet-container" style="float:left; width: 560px;">
<div class="cbb clearfix settings">
 
<h2 class="title">Changer ton mot de passe</h2>
<div class="box-content">
<?php
if(defined('success'))
{
        ?>
        <div class="rounded rounded-green">
                <?php echo success; ?><br />
        </div>
        <div>&nbsp;</div>
<?php
}
else if(defined('error'))
{
        ?>
        <div class="rounded rounded-red">
                <?php echo error; ?><br />
        </div>
        <div>&nbsp;</div>
<?php
}
?>
 
<p>Ne change surtout pas de mot de passe sur les conseils de quelqu'un!</p>
 
<div class="settings-step">
 
        <h4>1.</h4>
        <div class="settings-step-content">
 
<h3>Indique tes donn&eacute;es</h3>
 
<form method="post" action="">
 
<p>
 <label for="currentpassword">Mot de passe actuel</label><br />
 <input type="password" size="32" name="old_password">
</p>
 
 
        </div>
</div>
<div class="settings-step">
 
        <h4>2.</h4>
        <div class="settings-step-content">
 
<h3>Entre un nouveau mot de passe</h3>
 
<p>Ton nouveau mot de passe doit faire au moins 6 caract&egrave;res - en minuscules ou majuscules - et inclure un chiffre.</p>
 
<p>
<label for="pass">Nouveau mot de passe</label><br />
<input type="password" size="32" name="password_one">
</p>
 
<p>
<label for="confpass">Nouveau mot de passe (oui encore!)</label><br/>
<input type="password" size="32" name="password_two">
</p>
 
</div>
        </div>
 
<div class="settings-buttons">
<div style="text-align: right;"><input type="submit" value="Enregistrer" name="submit" class="submit" /></div>
</div>
 
</form>
</div>
 
</div>
</div>