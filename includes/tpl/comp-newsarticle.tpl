<?php 
$_SESSION['id'] = $users->GetUserVar(USER_ID, 'id'); 

?> 
<div class="habblet-container "> 
<div class="cbb clearfix notitle "> 


<div id="article-wrapper"> 

<h2>%news_article_title%</h2> 

<div class="article-meta"> 
<?php if ($news_article_id > 0) { ?> 
%news_article_date% 
%news_category% 
<?php } ?> 
</div> 
<p>
%news_article_summary% 

</p> 

<div class="article-body"> 

%news_article_body% 
<div id="fb-root"></div>
<script>(function(d){
  var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
  js = d.createElement('script'); js.id = id; js.async = true;
  js.src = "//connect.facebook.net/en_US/all.js#appId=247482251955636&xfbml=1";
  d.getElementsByTagName('head')[0].appendChild(js);
}(document));</script>
<div class="fb-like" data-href="http://facebook.com/%facebook%" data-send="false" data-width="450" data-show-faces="false"></div>
</div> 

<?php if ($news_article_id > 0) { ?> 
<script type="text/javascript" language="Javascript"> 
document.observe("dom:loaded", function() { 
$$('.article-images a').each(function(a) { 
Event.observe(a, 'click', function(e) { 
Event.stop(e); 
Overlay.lightbox(a.href, "Image is loading"); 
}); 
}); 

$$('a.article-%news_article_id%').each(function(a) { 
a.replace(a.innerHTML); 
}); 
}); 
</script> 
<?php } ?> 

</div> 

</div> 
</div> 

<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>