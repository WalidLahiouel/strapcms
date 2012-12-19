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
	
	class UberTwo
	{
		public function updateUserVar($userid, $variable, $newvalue) {
			dbquery("UPDATE `users` SET `" . $variable . "` = '" . $newvalue . "' WHERE `id` = '" . $userid . "'");
		}
	}

?>