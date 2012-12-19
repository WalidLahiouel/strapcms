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

	// Site Settings
	//		- WWW (The full URL of your site. Eg. www.mydomain.com. Doesn't end in a slash (/))
	$config['Site']['www'] = "http://localhost";
	
	// Emulator Settings
	//		- Emu (Can be Butterfly or Phoenix ; respective to the emulator on your hotel)
	$config['Emulator']['Emu'] = "Phoenix";

	// MySQL Settings
	//		- Hostname (The Hostname of your MySQL server. Usually 127.0.0.1.)
	//		- Username (The username you have to your MySQL server. Default is root.)
	//		- Password (The password to your MySQL username. I can't tell you this.)
	//		- Database (The name of your database your data is in.)
	$config['MySQL']['hostname'] = "127.0.0.1";
	$config['MySQL']['username'] = "root";
	$config['MySQL']['password'] = "sonmamwhcha";
	$config['MySQL']['database'] = "phoenix3";

	// MUS Settings
	//		- Enabled (Do you want to enable MUS?)
	//		- IP (The ip you want to send mus connections to)
	//		- Port (The port you want to send mus connections to)
	$config['MUS']['enabled'] = "true";
	$config['MUS']['ip'] = "127.0.0.1";
	$config['MUS']['port'] = "30001";
	
	// ***********************************************
	// PLEASE REMEMBER TO CONFIGURE UBERCMS_CONFIG.PHP
	// ***********************************************


?>