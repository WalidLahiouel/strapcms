



<body id="register"> 
<div id="overlay"></div> 
<div id="container" class="phase-0" style="margin-top: 10px;"> 
    <p class="phishing-warning">Vérifie bien que l'adresse URL ci-dessus est bien %www%. Si ce n'est pas le cas, stoppe tout immédiatement</p> 
	<div class="register-container clearfix"> 
	    <div class="register-header">Rejoins l'histoire %siteName% !</div> 
	  <div id="register-content"> 
	  
        <div id="subheader">Remplis les champs pour débuter ton inscription
</div> 
 
<div class="register-container-bottom-end register-content clearfix">
<div id="auth-providers" class="auth-providers"> 
           <p>Si tu as un compte réservé par le personnel de HabboStrap ou si tu est un invité VIP merci de taper la clé de réservation délivré par un des membres du personnel lors d'une invitation par e-mail</p>
            <div id="name-field-container"> 
                <div class="field field-habbo-name"> 
                  <label for="habbo-name"><b>Clé de réservation</b></label> 
                  <input type="text" id="habbo-name" size="32" value="" name="bean.reservationKey" class="text-field" maxlength="32" style="width: 95px; float: left;">
                    <div id="name-suggestions"> 
                    </div>              
                  <p class="help">Clé délivrée par e-mail auprès d'un membre de l'équipe HabboStrap.</p> 
                </div> 
			</div>
            <div id="name-field-container"> 
                <div class="field field-habbo-name"> 
                  <label for="habbo-name"><b>Pseudo</b></label> 
                  <input type="text" id="habbo-name" size="32" value="" name="bean.reservationName" class="text-field" maxlength="32" style="width: 140px; float: left;">
                    <div id="name-suggestions"> 
                    </div>              
                  <p class="help">Le pseudo du joueur qui vous est réservé.</p>
                </div> 
			</div>
            <div id="name-field-container"> 
                <div class="field field-habbo-name"> 
                  <label for="habbo-name"><b>E-mail</b></label> 
                  <input type="text" id="habbo-name" size="32" value="" name="bean.reservationMail" class="text-field" maxlength="32" style="width: 200px; float: left;">
                    <div id="name-suggestions"> 
                    </div>              
                  <p class="help">Confirmez l'adresse e-mail qui sera lié à votre compte HabboStrap.</p>
                </div> 
			</div>
            
            <div class="field field-tos">
			
				<input id="tos" value="accept" type="checkbox" id="password" name="bean.tos" %post-tos-check%/>J'ai lu et accepté les conditions d'utilisation</a>.
			
			</div>
</div>

<div id="register-page" style="clear: left" class="phase-0 clearfix">  
	<div class="phase-0"> 
		<form action="/register_submit" method="post" id="phase-0-form"> 
            
			<div id="error-messages-container"> 
			%error-messages-holder%
			</div> 
			
			<div id="name-field-container"> 
                <div class="field field-habbo-name"> 
                  <label for="habbo-name"><b>Pseudo Habbo</b></label> 
                  <input type="text" id="habbo-name" size="32" value="%post-name%" name="bean.avatarName" class="text-field" maxlength="32"/> 
                  <a href="#" class="new-button" id="check-name-btn"><b>Vérifier</b><i></i></a> 
                  <input type="submit" name="checkNameOnly" id="check-name" value="Check"/>
                    <div id="name-suggestions"> 
                    </div>              
                  <p class="help">Choisis un pseudo unique, sans préfixe (MOD-, ADM-) et sans fake.</p> 
                </div> 
			</div> 
			<div class="field field-password"> 
			  <label for="password"><b>Mot de passe</b></label> 
			  <input type="password" id="password" size="35" name="bean.password" value="%post-pass%" class="password-field" maxlength="32"/> 
			  <p class="help">Ton mot de passe doit contenir au minimum 6 caractères</p> 
			</div> 
			
			<div class="field field-password2"> 
			  <label for="password2"><b>Retape ton mot de passe</b></label> 
			  <input type="password" id="password2" size="35" name="bean.retypedPassword" value="" class="password-field" maxlength="32"/> 
			  <p class="help">Vérifie ton mot de passe</p> 
			</div> 
			
			<div class="field field-email"> 
			  <label for="email"><b>Email</b></label> 
			  <input type="text" id="email" size="35" name="bean.email" value="%post-mail%" class="text-field" maxlength="48"/> 
			  <p class="help">Entrer ton adresse e-mail, ne t'inquiètes pas nous detestons aussi le spam.</p> 
			</div> 
							
			<div class="field field-parent-email"> 
			  <label for="parent-email">Parent or guardian's email address</label> 
			  <input type="text" id="parent-email" size="35" name="bean.parentEmail" value="" class="text-field" maxlength="128"/> 
			  <p class="help">Because you are under 16 and in accordance with industry best practice guidelines, we require your parent or guardian's email address.</p> 
			</div> 
			
            <div class="field field-parent-permission"> 
            </div> 
			
			
			<div class="field field-tos">
			
				<input id="tos" value="accept" type="checkbox" id="password" name="bean.tos" %post-tos-check%/>J'ai lu et accepté les conditions d'utilisation</a>.
			
			</div>
 
            <a href="#" class="new-button" id="next-btn"><b>Démarrer!</b><i></i></a> 
            <input type="submit" id="next" value="Create account" /><a href="%www%/register/cancel">Retour sur HabboStrap</a> 
 
		</form> 
	
	</div>
	
</div> 
<script type="text/javascript"> 
    L10N.put("embedded_registration.errors.header", "Veuillez remplir les champs manquant");
    L10N.put("register.error.password_required", "Entrez un mot de passe");
    L10N.put("register.error.retyped_password_required", "Retapez votre de mot de passe");
    L10N.put("register.error.retyped_password_notsame", "Aucune correspondance de mot de passe");
    L10N.put("register.error.password_length", "Votre mot de passe est trop long");
    L10N.put("register.error.password_chars", "Votre mot de passe est trop court");
	SimpleRegistration.initRegistrationUI("/");
</script> 
 
        </div> 
    </div> 
    <div class="register-container-bottom"></div> 