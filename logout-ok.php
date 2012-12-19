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

require_once "global.php";

$tpl->Init();

$tpl->AddGeneric('head-init');
$tpl->AddIncludeSet('process-template');
$tpl->WriteIncludeFiles();
$tpl->AddGeneric('head-overrides-process');
$tpl->AddGeneric('head-bottom');

$tpl->Write('<script language="JavaScript" type="text/javascript"> 
	document.logoutPage = true;
	</script>');

$tpl->AddGeneric('process-template-top');

$tpl->Write('<div class="action-confirmation flash-message"> 
	<div class="rounded"> 
		<b>You have successfully signed out</b>
	</div> 
</div>');

$tpl->Write('<div style="text-align: center"> 
	
	<div style="width:100px; margin: 10px auto"><a href="#" id="logout-ok" class="new-button fill"><b>OK</b><i></i></a></div>

</div>');

$tpl->AddGeneric('process-template-bottom');

$tpl->Write('<script type="text/javascript"> 
	Event.observe(\'logout-ok\', \'click\', function(e) {
		Event.stop(e);
			document.location.href=\'%www%\';
	});
 
    Cookie.erase("habboclient");
    Cookie.erase("friendlist");
</script>');

$tpl->AddGeneric('footer');

$tpl->SetParam('page_title', 'Sign out');
$tpl->SetParam('body_id', 'logout');

$tpl->Output();

?>