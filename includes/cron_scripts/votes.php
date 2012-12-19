<?php

if (!defined('UBER') || !UBER)
{
	exit;
}

dbquery("UPDATE users SET has_voted = '0'");

?>