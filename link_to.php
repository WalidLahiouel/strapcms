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
	
$url = null;

if(isset($_GET['url']))
{
	$url = strtolower($_GET['url']);

	if (!StartsWith($url, "www."))
	{
		$url = "www." . $url;
	}

	$url = str_replace("www.", "http://www.", $url);
	$url = str_replace("WWW.", "http://WWW.", $url);

	header("Location: " . $url);
	exit;
}

function StartsWith($Haystack, $Needle){
    // Recommended version, using strpos
    return strpos($Haystack, $Needle) === 0;
}

?>