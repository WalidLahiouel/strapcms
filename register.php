<?php
/*=======================================================================
| UberWeb - Lightweight site system for Uber
| #######################################################################
| Copyright (c) 2009, Roy 'Meth0d'
| http://www.meth0d.org
| #######################################################################
| This program is free software: you can redistribute it and/or modify
| it under the terms of the GNU General Public License as published by
| the Free Software Foundation, either version 3 of the License, or
| (at your option) any later version.
| #######################################################################
| This program is distributed in the hope that it will be useful,
| but WITHOUT ANY WARRANTY; without even the implied warranty of
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
| GNU General Public License for more details.
\======================================================================*/

require_once "global.php";

if (mysql_num_rows(mysql_query("SELECT * FROM users WHERE ip_last = '" . $_SERVER["REMOTE_ADDR"] . "'")) > 19)
{
	die('<h1>Ohoh!</h2><hr>Tu as un peu trop de compte non?. Désolé mais ce n\'est plus possible pour toi d\'en avoir plus.');
}

if (LOGGED_IN)
{
	header("Location: " . WWW . "/me");
	exit;
}

$tpl->SetParam('error-messages-holder', '');
$tpl->SetParam('post-name', '');
$tpl->SetParam('post-pass', '');
$tpl->SetParam('post-tos-check', '');
$tpl->SetParam('post-mail', '');

if (isset($_GET['doSubmit']))
{
	if (isset($_POST['checkNameOnly']) && $_POST['checkNameOnly'] == 'true')
	{
		//$name = $_POST['bean_avatarName'];
		$name = filter($_POST['bean_avatarName']); 

		echo '                <div class="field field-habbo-name">
                  <label for="habbo-name"><b>Pseudo Habbo</b></label>
                  <input type="text" id="habbo-name" size="32" value="' . clean($name) . '" name="bean.avatarName" class="text-field" maxlength="32"/>
                  <a href="#" class="new-button" id="check-name-btn"><b>Vérifier</b><i></i></a> 
                  <input type="submit" name="checkNameOnly" id="check-name" value="Vérifier"/>
                    <div id="name-suggestions">';

		if ($users->IsNameTaken($name))
		{
			echo '<div class="taken"><p>Désolé, mais le pseudo <strong>' . clean($name) . '</strong> est déjà pris!</p></div>';
		}
		else if ($users->IsNameBlocked($name))
		{
			echo '<div class="taken"><p>Désolé, ce pseudo est réservé ou non-autorisé.</p></div>';
		}
		else if (!$users->IsValidName($name))
		{
			echo '<div class="taken"><p>Désolé, mais le pseudo est invalide, il ne peut contenir uniquement que des lettres, chiffres et les caractères spéciaux "@,!,.".</p></div>';
		}
		else
		{
			echo '<div class="available"><p>Le pseudo <strong>' . clean($name) . '</strong> est disponible.</p></div>';
		}
							
		echo '                    </div>              
                  <p class="help">Votre pseudo peut contenir lettres, chiffres et les symboles "@,!,.".</p>
                </div>';
		
		exit;
	}
	else if (isset($_POST['bean_avatarName']))
	{
		$registerErrors = Array();
	
		$name = filter($_POST['bean_avatarName']);
		$password = $_POST['bean_password'];
		$password2 = $_POST['bean_retypedPassword'];
		$email = filter($_POST['bean_email']);
		//$dob_day = $_POST['bean_day'];
		//$dob_month = $_POST['bean_month'];
		//$dob_year = $_POST['bean_year'];
		//$lang = $_POST['bean_lang'];
		
		$tpl->SetParam('post-name', $name);
		$tpl->SetParam('post-pass', $password);
		$tpl->SetParam('post-mail', $email);
		
		if (strlen($name) < 1 || strlen($name) > 32)
		{
			$registerErrors[] = "Ton pseudo doit faire de 1 à 32 caractères en longueur.";
		}
		
		if ($users->IsNameTaken($name))
		{
			$registerErrors[] = "Désolé, ce nom est déjà pris.";
		}	
		else if ($users->IsNameBlocked($name))
		{
			$registerErrors[] = "Désolé, ce pseudo est réservé ou non-autorisé.";
		}
		else if (!$users->IsValidName($name))
		{
			$registerErrors[] = "Désolé, mais le pseudo est invalide, il ne peut contenir uniquement que des lettres, chiffres et les caractères spéciaux '@,!,.'.";
		}
		
		if (strlen($password) < 6)
		{
			$registerErrors[] = "Ton mot de passe doit contenir au minimum 6 caractères.";
		}
		
		if ($password != $password2)
		{
			$registerErrors[] = "Les mot de passes ne correspondent pas, essaye de nouveau.";
		}
		
		if (!$users->IsValidEmail($email))
		{
			$registerErrors[] = "Adresse e-mail invalide.";
		}
		
		/*if (!is_numeric($dob_day) || !is_numeric($dob_month) || !is_numeric($dob_year) || $dob_day <= 0 || $dob_day > 31 ||
			$dob_month <= 0 || $dob_month > 12 || $dob_year < 1900 || $dob_year > 2010)
		{
			$registerErrors[] = "Please enter a valid date of birth.";
		}
		*/
		if (!isset($_POST['bean_tos']) || $_POST['bean_tos'] != "accept")
		{
			$registerErrors[] = "Tu doit avoir lu et accepté les conditions d'utilisations et la charte de protection des données personnelles avant de pouvoir créer un Habbo.";
		}
		else
		{
			$tpl->SetParam('post-tos-check', 'checked');
		}
		
		/*if (strtolower($lang) != "yes, i will speak english" && strtolower($lang) != "yes, i will speak english.")
		{
			$registerErrors[] = "You must verify you will speak English to creat an account.";
		}*/
		
		if (count($registerErrors) <= 0)
		{			
			// Add user
			$users->add($name, $users->UserHash($password, $name), $email, 1, 'hd-180-1.ch-210-66.lg-270-82.sh-290-91.hr-100-', 'M');
			mysql_query("UPDATE users SET newcrypto = '1' WHERE username = '" . $name . "'");
			
			// Log user in
			$_SESSION['SHOW_WELCOME'] = true;
			$_SESSION['UBER_USER_N'] = $name;
			$_SESSION['UBER_USER_H'] = $users->UserHash($password, $name);
			
			// Redirect user to welcome page
			header("Location: /client");
			exit;
		}
		else
		{
			$errResult = '<div class="error-messages-holder"> 
				<h3>Veuillez fixer les erreurs ci-dessous.</h3> 
				<ul>';
			
			foreach ($registerErrors as $err)
			{
				$errResult .= '<li><p class="error-message">' . $err . '</p></li>';
			}
			
			$errResult .= '</ul></div>';
		
			$tpl->SetParam('error-messages-holder', $errResult);
		}
	}
}

$tpl->Init();

$tpl->AddGeneric('head-init');
$tpl->AddIncludeSet('register');
$tpl->WriteIncludeFiles();
$tpl->AddGeneric('head-bottom');
$tpl->AddGeneric('page-register');
$tpl->AddGeneric('footer');

$tpl->SetParam('page_title', 'Rejoins notre histoire!');

$tpl->Output();

?>