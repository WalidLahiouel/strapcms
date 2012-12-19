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
| Copyright (c) 2012, Jérémy 'Emetophobic'
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
	
require_once "global.php";

$tpl->Init();
$tpl->AddGeneric('head-init');
$tpl->AddIncludeSet('process-template');
$tpl->WriteIncludeFiles();
$tpl->AddGeneric('head-overrides-process');
$tpl->AddGeneric('head-bottom');
$tpl->AddGeneric('process-template-top');
$tpl->Write("<html><body background = '/images/bg.png'></body></html>");

$tpl->Write("<center><b><h2>HABBO HOTEL DISCLAIMER</b></h2><br></center>");
$tpl->Write("By entering this website, you electronically sign a legal binding contract, agreeing that you are in no way afilliated with Sulake Corporation, or Habbo Hotel incorporated. You also agree by entering this site you will not take ANY action against this website for it's contents. The contents within this site are privately held, and are not open to private parties or businesses. Violating this contract may result in legal action.<br>
<br>
The owners of this website are in no way responsible for the content within. The contents belong to their makers, and were not made by the creators of this site. This site is merely a resource available to those looking for something specific, and nothing more. Should you use the contents of this site, you do so of your own will. The makers of the content of this site, may be subject to prosecution in a court of law, however it is not the responsibility of this site's owner(s) to prosecute anyone.
<br><br>
By using this website, you may be incriminating yourself. The people who use this website, do so anonymously, and can not be prosecuted for any purpose. This owner(s) of this website's soul intention is to educate it's users. It's owner(s) are in no way active in this website. it is a community of it's own, and self-sustained. There are no fees, dues, charges, promises, guarantees, warranties, or ensurances made for this site.
<br><br>
Any staff of Sulake, or it's affiliates enters this website, they violate these terms, and by entering, they electronically sign this legal binding contract, affirming that they meet the requirements, and in no way violate the terms of said contract. Should they still enter this site, they agree to take no action against said website, and if charges should be pressed, they give up the right to use this website's contents as evidence in any court of law. Violation of this contract can and will result in legal action, including a law suit, or criminal persecution.
<br><br>
IF you do not agree to these terms and conditions, and refuse to sign this contract, we ask that you disregard anything you have read or seen on this website, and leave immediately. If you can not meet the conditions of this contract, you may not enter, and by doing so knowingly, you violate this contract, giving us the right to take legal action, at your expense.");
$tpl->AddGeneric('process-template-bottom');
$tpl->AddGeneric('footer');

$tpl->SetParam('page_title', 'Disclaimer');

$tpl->Output();
?>

