<?php
	/*
	  	     |
		.   .|---.,---.,---.
		|   ||   ||---'|     	UberCMS 2.0
		`---'`---'`---'`
			UberCMS
			Coded originally by Meth0d (2010-2011)
			Continued by Jonty (2011-now)
			
			Build 2.0.0 SS, Public
	*/

require_once "global.php";

define("FP", true);

if (!isset($_GET["novote"]) && $voting['thehabbos_enabled'] == true && $voting['disable_index_vote'] == false) {
	header("Location: http://votingapi.com/vote.php?username=" . $voting['thehabbos_username'] . "&api=" . $voting['thehabbos_returnurl']);
}
else if (LOGGED_IN)
{
	header("Location: " . WWW . "/me");
	exit;
}

$tpl->Init();

$tpl->SetParam('page_title', 'Handshake the game');
$tpl->SetParam('credentials_username', '');

$tpl->AddGeneric('head-init');
$tpl->AddIncludeSet('frontpage');
$tpl->WriteIncludeFiles();
$tpl->AddGeneric('head-overrides-fp');
$tpl->AddGeneric('head-bottom');

$frontpage = new Template('page-fp');
$frontpage->SetParam('login_result', '');

if (isset($_POST['credentials_username']) && isset($_POST['credentials_password']))
{
	$frontpage->SetParam('credentials_username', $_POST['credentials_username']);

	$credUser = filter($_POST['credentials_username']);
	$credPassword = $_POST['credentials_password'];

	$errors = array();
	
	if (strlen($_POST['credentials_username']) < 1)
	{
		$errors[] = "Please enter your username";
	}
	
	if (strlen($_POST['credentials_password']) < 1)
	{
		$errors[] = "Please enter your password";
	}
	
	if (count($errors) == 0)
	{		
		if ($users->ValidateUser($credUser, $core->uberHash($credPassword))) {
			if(mysql_result(mysql_query("SELECT newcrypto FROM users WHERE username = '" . $credUser . "'"), 0) == "0") {
				mysql_query("UPDATE users SET password = '" . $users->UserHash($credPassword, $credUser) . "' WHERE username = '" . $credUser . "'");
				mysql_query("UPDATE users SET newcrypto = '1' WHERE username = '" . $credUser . "'");
			}
		}
		
		$credPass = $users->UserHash($credPassword, $credUser);
		
		if ($users->ValidateUser($credUser, $credPass))
		{
			if (isset($_POST['page']))
			{
				$reqPage = filter($_POST['page']);
				$pos = strrpos($reqPage, WWW);
			
				if ($pos === false || $pos != 0)
				{
					die("<b>Security warning!</b> A malicious request was detected that tried redirecting you to an external site. Please proceed with caution, this may have been an attempt 									   	to steal your login details. <a href='" . WWW . "'>Return to site</a>");
				}
				else
				{
					$_SESSION['page-redirect'] = $reqPage;
				}
			}
		
			
			$_SESSION['UBER_USER_N'] = $users->GetUserVar($users->Name2id($credUser), 'username');
			$_SESSION['UBER_USER_H'] = $credPass;
			
			if (isset($_POST['_login_remember_me']))
			{
				$_SESSION['set_cookies'] = true;
			}
			
			header("Location: " . WWW . "/me");
			exit;
		}
		else
		{
			$errors[] = "Incorrect password";
		}
	}

	if (count($errors) > 0)
	{
		$loginResult = '<div class="action-error flash-message"><div class="rounded"><ul>';

		foreach ($errors as $err)
		{
			$loginResult .= '<li>' . $err . '</li>';
		}
		
		$loginResult .= '</ul></div></div>';
		
		$frontpage->SetParam('login_result', $loginResult);
	}
}

$tpl->AddTemplate($frontpage);
$tpl->AddGeneric('footer');

$tpl->Output();
?>