<div class="habblet-container ">
	<div id="external-link-container">
		<h2><img src="<?php echo WWW ?>/web-gallery/v2/images/registration/warning_sign.png"/> Avertissement de sécurité</h2>

		<p>Tu quittes %siteName% pour un autre site externe. Pour des raisons de sécurité envers ton compte %shortName%, souviens-toi de ne jamais donner ton mot de passe en dehors de %siteName%. Sois aussi sûr de télécharger des logiciels dont l'éditeur est quelqu'un de confiance.</p>

		<p><strong>%TargetLink%</strong></p>

		<p class="clearfix" style="padding: 0">
			<a href="#" class="new-button" onclick="ExternalClickHandler.clickCancel('/link_to.php?url=%TargetLink%'); return false;"><b>Annuler</b><i></i></a>
			<a href="/link_to.php?url=%TargetLink%" class="new-button red-button" onclick="ExternalClickHandler.clickContinue('/link_to.php?url=%TargetLink%'); return false;"><b>Continuer</b><i></i></a>
		</p>
	</div>
</div>

<!-- dependencies

-->