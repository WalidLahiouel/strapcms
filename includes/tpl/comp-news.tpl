<div class="habblet-container news-promo">		
	<div class="cbb clearfix notitle "> 				
		<div id="newspromo"> 
		
        <div id="topstories"> 
		<?php
		
		$getNews = dbquery("SELECT * FROM site_news ORDER BY timestamp DESC LIMIT 10");
		$c = 0;
		
		while ($n = mysql_fetch_assoc($getNews))
		{
			$disp = 'block';
			
			if ($c > 0)
			{
				$disp = 'none';
			}
		
	        echo '<div class="topstory" style="background-image: url(' . clean($n['topstory_image']) . '); display: ' . $disp . ';"> 
	            <h4>DERNI&Egrave;RE NEWS</h4> 
	            <h3><a href="' . WWW . '/articles/' . $n['id'] . '-' . $n['seo_link'] . '">' . $n['title'] . '</a></h3> 
	            <p class="summary"> 
	            ' . $n['snippet'] . '
	            </p> 
	            <p> 
	                <a href="' . WWW . '/articles/' . $n['id'] . '-' . $n['seo_link'] . '">En savoir plus &raquo;</a> 
	            </p> 
	        </div>';
			
			$c++;
		}
			
        echo '<div id="topstories-nav" style="display: none"><a href="#" class="prev">&laquo; Pr�c�dent</a><span>1</span> / ' . $c . '<a href="#" class="next">Suivant &raquo;</a></div>';
		
		?>		
		</div>
		
        <ul class="widelist"> 		
		<?php
		
		$getNews = dbquery("SELECT * FROM site_news ORDER BY timestamp DESC LIMIT 3,6");
		$oddEven = "odd";
		
		while ($n = mysql_fetch_assoc($getNews))
		{		
			if ($oddEven == "odd")
			{
				$oddEven = "even";
			}
			else
			{
				$oddEven = "odd";
			}

            echo '<li class="' . $oddEven . '"> 
                <a href="' . WWW . '/articles/' . $n['id'] . '-' . $n['seo_link'] . '">' . $n['title'] . ' &raquo;</a><div class="newsitem-date">' . clean($n['datestr']) . '</div> 
            </li>';         
		}
		
		?>
		
            <li class="last"><a href="/articles">Plus d'articles &raquo;</a></li>            
        </ul>
</div> 

<script type="text/javascript"> 
	document.observe("dom:loaded", function() { NewsPromo.init(); });
</script> 
	</div>

				</div> 
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script> 