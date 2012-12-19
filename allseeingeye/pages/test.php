<?php
if (!defined('IN_HK') || !IN_HK)
{
    exit;
}

if (!HK_LOGGED_IN || !$users->hasFuse(USER_ID, 'fuse_housekeeping_catalog'))
{
    exit;
}

require_once "top.php";            
$name = '';
echo("Username: <input type=\"text\" name=\"username\" size=\"25\">");

require_once "bottom.php";
?>