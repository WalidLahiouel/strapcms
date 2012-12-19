<?php

if (!defined('UBER') || !UBER)
{
	exit;
}

dbquery("UPDATE user_stats SET DailyRespectPoints = '3'");

?>