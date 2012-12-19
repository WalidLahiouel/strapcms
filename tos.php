<?php
require_once "global.php";

$tpl->Init();
$tpl->AddGeneric('head-init');
$tpl->AddIncludeSet('process-template');
$tpl->WriteIncludeFiles();
$tpl->AddGeneric('head-overrides-process');
$tpl->AddGeneric('head-bottom');
$tpl->AddGeneric('process-template-top');
$tpl->Write("<html><body background = '/images/bg.png'></body></html>");

$tpl->Write("<center><b><h2>ZAP HOTEL TERMS OF SERVICE</b></h2><br></center>");
$tpl->Write("We offer no refunds to any transactions related to Zap Hotel. Purchases made are final and cannot be exchanged or reversed. You agree not to chargeback or attempt to reverse the charges and doing so will result in a permanent ban from the hotel. By using Zap Hotel, you automatically agree to these terms.");
$tpl->AddGeneric('process-template-bottom');
$tpl->AddGeneric('footer');

$tpl->SetParam('page_title', 'Terms of Service');

$tpl->Output();
?>

