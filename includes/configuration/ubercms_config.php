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
	
	// UberCMS Configuration for regular system use
	// Part 2/2

	// Reverse Proxy & Cloudflare Settings
	//		- Reverse Proxy (do you have nginx mirroring or forwarding the content from an apache backend?)
	//		- Cloudflare (do you have cloudflare enabled on your domain or subdomain the cms is on?)
	$reverseproxy['enabled'] = false;
	$cloudflare['enabled'] = false;
	
	// Blocking VPN services
	//		- Block VPNs
	$vpn['block'] = true;
	$vpn['block_message'] = "You can't come on here Mr. VPN";
	
	// VPN Block list
	// 	- Blocked hosts (How this works is you enter part of the hostname eg hotspotshield that you dont want accessing the site, i've included examples)
	$vpn['blocked_hosts'] = array(
	'hotspotshield',
	'anchorfree'
	);
	
	// Basic Site Settings
	//		- Site Name (Your Hotel name)
	//		- Short name (Hotels short name)
	//		- Master ID (The ID of the person who owns the server, there can be only 1.)
	//		- Enable ID Flagging (If someone disputes a VIP purchase or fails a pin code, terminate the account)
	//		- Enable Pincodes (Enable a PIN code on entry to the client for ranks minrank+)
	//		- Pincode (The 4 digit combination key.)
	//		- Pincode minrank (The minimum rank to hit the combination lock upon client entry)
	$site['name'] = "HabboStrap";
	$site['short_name'] = "Habbo";
	$site['master_id'] = "1";
	$site['enable_id_flagging'] = false;
	$site['enable_pincodes'] = false;
	$site['pincode'] = '1111';
	$site['pincode_minrank'] = '5';
	$site['contact_email'] = "support@habbostrap.com";
	$site['twitter_account'] = "iminemymind";
	$site['facebook_account'] = "HabboStrap";
	
	// Voting settings
	//		- TheHabbos (Do you want to enable TheHabbos voting?)
	//		- TheHabbos username (What is your hotels username on TheHabbos?)
	//		- TheHabbos return url (Where do you want your users to return to? Replace / with !)
	//		- TheHabbos disable index voting (Do you want to disable index voting?)
	$voting['thehabbos_enabled'] = false;
	$voting['thehabbos_username'] = 'Zappy123';
	$voting['thehabbos_returnurl'] = 'http:!!127.0.0.1!?novote';
	$voting['disable_index_vote'] = false;

	// Server settings
	//		- Butterfly SSO system enabled (Do you use the Butterfly server by Martinmine?)
	//		- Phoenix SSO system enabled (Do you want to enable Phoenix's secure sessions?)
	//		- Default Motto (What is the default motto you want users to have?)
	//		- Default Credits (What is the default credits you want to have?)
	//		- Default Look (What is the default look you want to have?)
	//		- Default room (What is the room you want users to go to on their first visit)
	//		- Default rank (What is the default rank of new users)
	$server['butterfly_sso'] = false;
	$server['phoenix_secure_sessions'] = false;
	$server['default_motto'] = "Welcome to HabboStrap!";
	$server['default_credits'] = 0;
	$server['default_pixels'] = 25000;
	$server['default_look'] = "";
	$server['default_room'] = "8";
	$server['default_rank'] = "1";
	
	// Client settings
	//		- Server IP (The ip your emulator is listening on)
	//		- Server Port (The port your emulator is listening on)
	//		- Productdata (Where your productdata is located)
	//		- Furnidata (Where your furnidata is located)
	//		- External Texts (Where your external texts are located)
	//		- External Variables (Where your external variables are located)
	//		- SWF Base Directory (The directory your Habbo.swf is in)
	//		- Habbo.swf (The location of Habbo.swf)
	//		- Client Starting (The text you want to display when the client loads.)
	$client['connection_info_host'] = "127.0.0.1";
	$client['connection_info_port'] = "30000";
	$client['productdata_load_url'] = "http://localhost/phxswfs/productdata.txt";
	$client['furnidata_load_url'] = "http://localhost/phxswfs/furnidata.txt";
	$client['external_texts_txt'] = "http://localhost/phxswfs/external_flash_texts.txt";
	$client['external_variables_txt'] = "http://localhost/phxswfs/external_variables.txt";
	$client['swf_base_dir'] = "http://localhost/phxswfs/";
	$client['habbo_swf'] = "http://localhost/phxswfs/Habbo.swf";
	$client['client_starting'] = "Please wait, Habbo is starting.";
	
	// Website front-end settings
	//		- Footer Links (What you want to display in the links area of the footer.)
	//		- Footer text (What text you want under the links area of the footer. I would appreciate the credits be kept there :D)
	//		- Online users text (What the frontpage says in the speech bubble for users online)
	//		- Online users text (What the rest of the site says for users online)
	$frontend['footer_links'] = "<a href='%www%'>Accueil</a> | <a href='%www%/refund_policy'>Conditions d'utilisation</a> | <a href='http://habbostrap.com'>HabboStrap News Portal</a> | <a href='http://strapfamily.com'>StrapFamily</a> | <a href='mailto:support@habbostrap.com'>Support client</a> | <a href='mailto:advertising@habbostrap.com'>Publicité</a>";
	$frontend['footer_text'] = "HabboStrap est propulsé par StrapCMS 2.1.0.108-uberdev & Phoenix Emulator 3.10.0.14824<br>Habbo, le mot Bobba ainsi que le Habbo.swf core sont toute propriété de Sulake Corporation Oy.<br>HabboStrap Hotel est un réseau du groupe StrapFamily, tout droit réservés<br>StrapFamily est un groupe indépendant fondé par Jérémy 'Emetophobic' Castellano 2012-2013";
	$frontend['online_text_fp'] = "players online now!";
	$frontend['online_text_reg'] = "Habbos connect&eacute;s";
	
	// Vemba Ads Settings - I needed this personally so I added it for you. www.Vemba.com to sign up.
	//		- Enable Vemba ads (Do you want to enable Vemba ads?)
	//		- Vemba ID (User id/site number for vemba.com)
	$vemba['enable'] = false;
	$vemba['id'] = "33";
	
	// Misc Settings
	//		- Housekeeping Login Footer (The footer you want on HK login page)
	//		- Housekeeping login phrase (The text you want on the HK login page)
	//		- Maintenance text (What you want to show on the orange area on the maintenance page)
	$misc['hk_login_footer'] = "Powered by AllSeeingEye. Copyright &copy; 2010-2012 Meth0d & Emetophobic";
	$misc['hk_login_phrase'] = "Welcome to the HabboStrap Housekeeping";
	$misc['maintenance_text'] = "Habbo is currently under an expected maintenance break. Please stay calm and keep your hair on, we'll be back soon.";
	$misc['staff_about'] = "The Habbo staff are here to enhance your experience on our hotel. They host events, and keep the environment safe. You can recognise a staff member by their badge.";
	
	// Imaging settings
	//		- Web Gallery location (Where your images are hosted, no ending slash)
	//		- C Images location (Where your c_images are hosted, no ending slash)
	$imaging['web_gallery'] = "http://localhost/web-gallery";
	$imaging['c_images'] = "http://localhost/phxswfs/c_images";
	
?>