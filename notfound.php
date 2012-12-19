<?php

require_once "global.php";

$tpl->Init();
$tpl->AddGeneric('head-init');
$tpl->AddIncludeSet('process-template');
$tpl->WriteIncludeFiles();
$tpl->AddGeneric('head-overrides-process');
$tpl->AddGeneric('head-bottom');
$tpl->AddGeneric('process-template-top');

$tpl->Write("<h3>404 Page not found</h3><br>");
$tpl->Write("Oops! The page you are looking for is not found. The page might have been removed, had its name changed, or is temporarily unavailable.<br><br>Be sure that the address is spelled and formatted correctly. If you reached this page by clicking a link,  please send an email to <a href='mailto:msg.tk@live.com'><b><u>support@zaphotel.net</b></u></a> describing the page and what link took you there.");

$tpl->AddGeneric('process-template-bottom');
$tpl->AddGeneric('footer');

$tpl->SetParam('page_title', 'Page not found');

$tpl->Output();
?>