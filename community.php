<?php
/*=======================================================================
| StrapCMS 2.2 - Perfect handshaking with the game for PhoenixEmu
| #######################################################################
| UberCMS - Advanced Website and Content Management System for uberEmu
| #######################################################################
| Copyright (c) 2010, Roy 'Meth0d'
| http://www.meth0d.org
| Copyright (c) 2012, Jonteh
| http://zaphotel.net
| Copyright (c) 2012, J�r�my 'Emetophobic'
| http://strapfamily.com
| Copyright (c) 2012, Walid 'Jack'
| http://retrodev.fr
| Copyright (c) 2012, Anthony 'Anthony93260'
| http://cola-hotel.net
| #######################################################################
| StrapCMS is part of StrapFamily Distribution, coded part by Jonteh
| from uberCMS 2.0.1, coded part by Jack and Anthony93260.
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

define('TAB_ID', 5);
define('PAGE_ID', 7);

require_once "global.php";
define("SideBarAd", true);
$tpl->Init();

$tpl->AddGeneric('head-init');

$tpl->AddIncludeSet('generic');
$tpl->AddIncludeFile(new IncludeFile('text/css', '%web_gallery%/styles/rooms.css', 'stylesheet'));
$tpl->AddIncludeFile(new IncludeFile('text/javascript', '%web_gallery%/static/js/rooms.js'));
$tpl->AddIncludeFile(new IncludeFile('text/javascript', '%web_gallery%/static/js/moredata.js'));
$tpl->WriteIncludeFiles();

$tpl->AddGeneric('head-overrides-generic');
$tpl->AddGeneric('head-bottom');
$tpl->AddGeneric('generic-top');
	

$tpl->Write('<div id="column1" class="column">');
if(vembaEnabled) { $tpl->AddGeneric("generic-adtop"); }
$tpl->AddGeneric('comp-randomhabbos');
//$tpl->AddGeneric('comp-hotrooms');
$tpl->Write('</div>');

$tpl->Write('<div id="column2" class="column">');
if(vembaEnabled) { $tpl->Write("<br /><br /><br /><br /><br /><br /><br />"); }
$tpl->AddGeneric('comp-news');
if(vembaEnabled) { $tpl->AddGeneric('generic-undernews'); }
$tpl->AddGeneric('comp-twitter');								
$tpl->Write('</div>');

$tpl->AddGeneric('generic-column3');
$tpl->AddGeneric('footer');

$tpl->SetParam('page_title', 'Communaut�');
$tpl->SetParam('body_id', 'home');

$tpl->Output();

?>