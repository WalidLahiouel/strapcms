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

$tpl->Write("<center><b><h2>ZAP HOTEL REFUND POLICY</b></h2><br></center>");
$tpl->Write("Zap Hotel provides no refunds for its services. All goods are delivered instantly via our electronic database server and API payment gateway. The one exception to the No Refund Policy is if there has been fraudulent info given or an unuthorized payment. By using Zap Hotel, you agree to this policy.");

$tpl->Write("<center><b><h2>ZAP HOTEL PRIVACY POLICY</b></h2><br></center>");
$tpl->Write("Here at Zap Hotel, we take your privacy seriously and will take all measures to protect your personal information.
<br /><br />
Any personal information received will be encrypted and is not stored in our database, apart from your password to our website. We will not sell or redistribute your information to anyone.");
$tpl->AddGeneric('process-template-bottom');
$tpl->AddGeneric('footer');

$tpl->SetParam('page_title', 'Refund Policy');

$tpl->Output();
?>

