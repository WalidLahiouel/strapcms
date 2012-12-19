<style type="text/css"> 
#badge-back { position: absolute; left: 90px; top: 85px; }
#new-personal-info .enter-hotel-btn { position: absolute; top: -10px; right: 20px; padding: 28px 0; background:  url(); !important;  }
</style> 
<div class="habblet-container ">		
	
						<div id="new-personal-info" style="background-image:url(%www%/images/htlview_gb.png)"> 
     <div class="enter-hotel-btn">
        <div class="open enter-btn">
                <a href=%www%/client target="uberClientWnd" onclick="HabboClient.openOrFocus(this); return false;">ENTRER<i></i></a>
            <b></b>
        </div>
    </div>
    
 
	<div id="habbo-plate"> 
		<a href="%www%/profile"> 
				<img alt="%habboName%" src="http://habbr.info/habbo-imaging/avatarimage?figure=%look%" /> 
		</a> 
	</div> 
 
	<div id="habbo-info"> 
		<div id="motto-container" class="clearfix">			
			<strong>%habboName%:</strong> 
			<div>
			<?php
			
			if (strlen($motto) == 0)
			{
				$motto = "Quelle est ton humeur du jour?";
			}
			
			echo '<span title="' . $motto . '">' . $motto . '</span>';
			echo '<p style="display: none"><input type="text" maxlength="60" name="motto" value="' . $motto . '"/></p>';
				
			?>
			
				
			</div> 
		</div> 
		<div id="motto-links" style="display: none"><a href="#" id="motto-cancel">Annuler</a></div> 
	</div> 
	
	<ul id="link-bar" class="clearfix"> 		
		<li class="credits"> 
			<a href="%www%/credits">%creditsBalance%</a> Cr&eacute;dits
		</li>		
		<!--<li class="club"> 
            <span id="clubdaysleft" style="display:none"> 
                <a href="%www%/credits/club">0</a> 
                Club days left
            </span> 
            <span id="joinclub"> 
                %clubStatus%
            </span> 
		</li>-->
		    <li class="activitypoints"> 
			    <a href="%www%/credits/pixels">%pixelsBalance%</a> Pixels
		    </li>
	</ul> 
	
	<div id="habbo-feed"> 
		<ul id="feed-items">  
			<li class="small" id="feed-lastlogin">
			Derni&egrave;re connexion:
			<?php echo date('D, d M Y H:i:s', $users->GetUserVar(USER_ID, 'last_online')); ?>
			</li>
			<li class="contributed" style="background-image: url('http://images.habbo.com/c_images/album1584/VIP.gif') !important; padding-left: 65px; padding-bottom: 25px;">
			<b>Pourquoi n'est-tu pas encore VIP?</b><br>En devenant un VIP tu obtiens acc&egrave;s &agrave; des commandes tels que :push, :pull ou encore :moonwalk et bien d'autres, profite &eacute;galement d'un catalogue sp&eacute;cialement conçu pour vous.<br>Convaincu? <a href="%www%/shop/online/subs/vip">Clique ici &raquo;</a> pour devenir VIP.
			</li>
		</ul> 
	</div> 
	<p class="last"></p> 
</div> 
 
<script type="text/javascript"> 
	HabboView.add(function() {
		L10N.put("personal_info.motto_editor.spamming", "Don\'t spam me, bro!");
		PersonalInfo.init("");
	});
</script> 
	
						
							
					
				</div> 
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>