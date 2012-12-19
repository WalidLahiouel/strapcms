<?php
	require_once "global.php";
	
	if(isset($_POST["Register"]))
	{
		$username = filter($_POST["name"]);
		$password = md5($_POST["password"]);
		$cpassword = md5($_POST["cpassword"]);
		$email = filter($_POST["email"]);
		
		if($users->IsNameTaken($username))
		{
			define("ERROR", "That username is taken");
		}
		else if($users->IsNameBlocked($username))
		{
			define("ERROR", "That username is not allowed.");
		}
		else if(!$users->IsValidName($username))
		{
			define("ERROR", "Invalid username");
		}
		else
		{
			if($password != $cpassword)
			{
				define("ERROR", "Passwords must match");
			}
			else if(!$users->IsValidEmail($email))
			{
				define("ERROR", "Your email is incorrect.");
			}
			else
			{
				$users->add($username, $password, $email, 1, 'hd-180-1.ch-210-66.lg-270-82.sh-290-91.hr-100-', 'M');
			
				// Log user in
				$_SESSION['SHOW_WELCOME'] = true;
				$_SESSION['UBER_USER_N'] = $username;
				$_SESSION['UBER_USER_H'] = $password;
				
				// Redirect user to welcome page
				header("Location: /rportal.php");
				exit;
			}
		}
	}	
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <meta name="author" content="Oliver Robson" />

    <title>Zap: Register an account.</title>
    <link href="images/css/register.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="center static relative">
	<div class="contentBox">
		<div class="boxHeader">Register at Zap Hotel</div>
		<div class="subHeader"></div>
		<form method="post">
			<div class="box1">
				<div class="left">
					<label for="name">Name</label>
						<br />
					<input type="text" name="name" id="name" style="width:160px" />
						<br />
					<label class="info">Choose a username (Usernames such as MOD-, ADM- &amp; VIP- will be banned)</label>
						<br /><br /><br /><br />
					<label for="password">Password</label>
						<br />
					<input type="password" name="password" id="password" style="width:200px" />
						<br />
					<label class="info">Choose a password</label>
						<br /><br /><br /><br />
					<label for="email">Email</label>
						<br />
					<input type="text" name="email" id="email" style="width:240px" />
						<br />
					<label class="info">Enter your email address</label>
				</div>
				<div class="right">
					<label for="cpassword">Retype Password</label>
						<br />
					<input type="password" name="cpassword" id="cpassword" style="width:260px" />
						<br />
					<label class="info">Verify your password</label>
						<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
						

					<input type="submit" value="Register" name="Register"/>
										<?php if(defined("ERROR")){ ?>
					<font size='2' color='red'><?php echo ERROR; ?></font> <?php } ?>
				</div>
			</div>
		</form>
	</div>
</div>
</body>
</html>