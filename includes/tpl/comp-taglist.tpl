	<div class="habblet" id="my-tags-list"> 
	
	<?php
	
	$tags = uberUsers::GetUserTags(USER_ID);
	$tagCount = count($tags);	
	
	if ($tagCount > 0)
	{
		echo '<ul class="tag-list make-clickable">' . LB;
		
		foreach ($tags as $id => $tag)
		{
			echo '                    <li><a href="%www%/tag/' . $tag . '" class="tag" style="font-size:10px">' . $tag . '</a> 
                        <div class="tag-id" style="display:none">' . $id . '</div><a class="tag-remove-link"
                        title="Remove tag"
                        href="#"></a></li>' . LB;
		}
		
		echo '</ul>' . LB;
	}
	
	if ($tagCount >= 20)
	{
		echo '<div class="add-tag-form">Limite de tags atteinte, retire-en pour en ajouter de nouveau.</div>';
	}
	else
	{
		echo '<form method="post" action="/myhabbo/tag/add" onsubmit="TagHelper.addFormTagToMe();return false;" > 
    <div class="add-tag-form clearfix"> 
		<a  class="new-button" href="#" id="add-tag-button" onclick="TagHelper.addFormTagToMe();return false;"><b>Ajouter</b><i></i></a> 
        <input type="text" id="add-tag-input" maxlength="20" style="float: right"/> 
        <em class="tag-question">';
		
		$possibleQuestions = Array();
		$possibleQuestions[] = "Quel est ton plat préféré?";
		$possibleQuestions[] = "Quel est ton acteur préféré?";
		$possibleQuestions[] = "Quel genre de musique tu écoutes?";
		$possibleQuestions[] = "Quel est ton sport favoris?";
		$possibleQuestions[] = "Quel est ton actrice préféré?";
		$possibleQuestions[] = "Quelle est ta couleur préférée?";
		$possibleQuestions[] = "Quel est ton groupe préféré?";
		$possibleQuestions[] = "Quel est ta série TV favorite?";
		$possibleQuestions[] = "Quel équipe de football supporte-tu?";
		$possibleQuestions[] = "Je sais que tu adore Emetophobic, ajoute son pseudo en tag";
		$possibleQuestions[] = "Ton cartoon favoris?";
		$possibleQuestions[] = "Quel est ton jeu vidéo favoris?";
		$possibleQuestions[] = "Quel est ton passe temps favoris?";
		$possibleQuestions[] = "Avec quel humeur viens-tu jouer à HabboStrap?";
		$possibleQuestions[] = "Quel est ton film préféré?";
		$possibleQuestions[] = "Quel est le moment de l'année que tu préfères?";		
		
		echo $possibleQuestions[rand(0, count($possibleQuestions) - 1)];
		

		echo '</em> 
    </div> 
    <div style="clear: both"></div> 
    </form>';
	}
	
	?>

</div> </div>
 
<script type="text/javascript"> 
<?php if (!isset($habbletmode)){ echo 'document.observe("dom:loaded", function() {'; } ?>
    TagHelper.setTexts({
        tagLimitText: "Limite de tags atteinte, retire-en pour en ajouter de nouveau.",
        invalidTagText: "Tag invalide",
        buttonText: "OK"
    });
	
<?php

if (isset($habbletmode))
{
	echo 'TagHelper.bindEventsToTagLists();';
}
else
{
    echo "TagHelper.init('" . USER_ID . "');";
	echo "});";
}

?>
</script> 