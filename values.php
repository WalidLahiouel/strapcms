<?php
/*=======================================================================
| UberCMS - Advanced Website and Content Management System for uberEmu
| #######################################################################
| Copyright (c) 2010, Roy 'Meth0d'
| http://www.meth0d.org
| #######################################################################
| This program is free software: you can redistribute it and/or modify
| it under the terms of the GNU General Public License as published by
| the Free Software Foundation, either version 3 of the License, or
| (at your option) any later version.
| #######################################################################
| This program is distributed in the hope that it will be useful,
| but WITHOUT ANY WARRANTY; without even the implied warranty of
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
| GNU General Public License for more details.
\======================================================================*/
require_once "global.php";

if(USER_ID=="-1")
{
	Header("Location: index.php");
	//die("You need to log in."); // place holder
}

define('TAB_ID', 212);
define('PAGE_ID', 222);

$tpl->Init();

$tpl->AddGeneric('head-init');

$tpl->AddIncludeSet('generic');
$tpl->AddIncludeFile(new IncludeFile('text/css', 'http://zimages.zaphotel.net/%web_build%/web-gallery/styles/newcredits.css', 'stylesheet'));
$tpl->AddIncludeFile(new IncludeFile('text/javascript', 'http://images.zaphotel.net/%web_build%/web-gallery/static/js/newcredits.js'));
$tpl->WriteIncludeFiles();

$tpl->AddGeneric('head-overrides-generic');
$tpl->AddGeneric('head-bottom');
$tpl->AddGeneric('generic-top');

$tpl->Write('<div id="column2" class="column">');
// $tpl->AddGeneric('comp-club-teaser');
$tpl->AddGeneric('comp-rareright');
$tpl->Write('</div>');

$tpl->Write('<div id="column1" class="column">');
$tpl->AddGeneric('comp-rarevalues');
// $tpl->AddGeneric('comp-vip-members');
$tpl->Write('</div>');

$tpl->AddGeneric('generic-column3');
$tpl->AddGeneric('footer');

$tpl->SetParam('page_title', 'Rare Values');
$tpl->SetParam('body_id', 'home');

$tpl->Output();


?>