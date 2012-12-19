<?php
	class ZapDataNetwork
	{
		// Function to check if a cdn is offline. Use IP or http:// method for fsockopen as $link.
		public function CDNOnline($link)
		{
			if(@fsockopen($link, 80, $errno, $errstr, 1)) // Check if the connection fails
			{
				return true; // Connection suceeded
			}
			return false; // Connection failed
		}
		
		// Function to serve a CDN to each user
		public function AssignCDN()
		{			
			return "zap.mn";			
		}		
	}
	
?>