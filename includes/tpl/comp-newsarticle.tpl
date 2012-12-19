<?php
// Commit by Jack on 19/12/2012
// Commit by Emetophobic on 19/12/2012
$_SESSION['id'] = $users->GetUserVar(USER_ID, 'id');
?>
<div class="habblet-container ">        
<div class="cbb clearfix notitle ">
   
                           
    <div id="article-wrapper">
   
        <h2>%news_article_title%</h2>
       
        <div class="article-meta">
       <!-- AddThis Button BEGIN -->
 
<a class="addthis_button" href="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4ebdb2543389fee2"><img src="http://s7.addthis.com/static/btn/v2/lg-share-fr.gif" width="125" height="16" alt="Bookmark and Share" style="border: 0pt none; position: absolute; top: 40px; left: 627px;"/></a><script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=xa-4c7e121e0f7f8c8b"></script>
 
<!-- AddThis Button END -->
 
           <?php if ($news_article_id > 0) { ?>
            %news_article_date%
            %news_category%
        <?php } ?>
        </div>
       
        <?php if (strlen(trim($news_article_summary)) > 0) { ?>        
        <p class="summary">
       
            %news_article_summary%
       
        </p>
        <?php } ?>
       
        <div class="article-body">
       
        %news_article_body%
               
                </div>
               
                <div class="article-body">
               
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
<?php
if(isset($_POST['post_comment']))
  $posted_on = date("M j, Y g:i A");
 if (! isset($_POST['comment'])) {
  $_POST['comment'] = ''; 
}
 
$comment = strip_tags ($_POST['comment']);
if($comment == NULL){
    $error_message = 'Le champ est vide.<br /><br />';
  }else{
if (LOGGED_IN)
{
    mysql_query("INSERT INTO site_news_comments (article, userid, comment, posted_on) VALUES ('".$news_article_id."', '".$_SESSION['id']."', '".$comment."', '".$posted_on."');");
    $error_message = 'Tu as bien laissé un commentaire.<br /><br />';
  }
}
?>
 
<div class="habblet-container ">
  <div class="cbb clearfix notitle ">
    <div id="article-wrapper"><h2>Poster un commentaire</h2>
      <div class="article-meta"></div>
      <div class="article-body">  
        <form action="" method="post">
        <textarea name="comment" maxlength="500"></textarea><br /><br />
        <input type="submit" name="post_comment" value="Réagir!" />
        </form>
      </div>
    </div>
  </div>
</div>
<style type="text/css">
input[type="text"], input[type="password"] {
  background-color: #F1F1F1;
  border: 1px solid #999999;
  width: 175px;
  padding: 5px;
  font-family: verdana;
  font-size: 10px;
  color: #666666;
}
input[type="submit"] {
  background-color: #F1F1F1;
  border: 1px solid #999999;
  padding: 5px;
  font-family: verdana;
  font-size: 10px;
  color: #666666;
}
textarea {
  background-color: #F1F1F1;
  border: 1px solid #999999;
  padding: 5px;
  width: 517px;
  height: 70px;
  font-family: verdana;
  font-size: 10px;
  color: #666666;
}
select {
  background-color: #F1F1F1;
  border: 1px solid #999999;
  padding: 5px;
  font-family: verdana;
  font-size: 10px;
  color: #666666;
}
</style>
<?php
$getComments = dbquery("SELECT * FROM site_news_comments WHERE article='" . $news_article_id . "'"); // Find all comments 
    $count = mysql_num_rows($getComments); // Results 
    $pages = ceil($count / 5); // Calculate pages 
    $offset = $pages - 1;         // 
    $offset = $offset * 5;      // Comments per page 
    $getComments = dbquery("SELECT * FROM site_news_comments WHERE article = '" . $news_article_id . "' ORDER BY id ASC LIMIT 5 OFFSET " . $offset);
?>
<div class="habblet-container ">
  <div class="cbb clearfix notitle ">
    <div id="article-wrapper"><h2>Commentaires (<?php echo mysql_num_rows($getComments); ?>)</h2>
      <div class="article-meta"></div>
      <div class="article-body">
        <?php
        if(mysql_num_rows($getComments) == 0){
          echo 'Désolé mais il n\'y a aucune réaction sur cet article!';
        }else{
          echo '<table width="528px">';
          while($Comments = mysql_fetch_array($getComments)){
          $getUserInfo = mysql_query("SELECT * FROM users WHERE id = '".$Comments['userid']."'");
          $userInfo = mysql_fetch_array($getUserInfo);
                  echo '
                  <tr>
                    <td width="90px" valign="top">
                      <div style="float:left"><img src="http://www.habbr.info/habbo-imaging/avatarimage?figure='.$userInfo['look'].'&size=b&direction=2&head_direction=3&gesture=sml&size=m"></div>
                      ';
                      if($userInfo['rank'] > 5){
                        echo '<div style="position: absolute; z-index:1"><img src="%www%/images/ADM.gif"></div>';
                     }
                 echo '
                </td>
                    <td width="427px" valign="top">
                      <strong>RE: %news_article_title%</strong><br /><br />'.$Comments['comment'].'
                    </td>
                  </tr>
          <tr>
                    <td width="90px" valign="top">
                    </td>
            <td width="427px" align="right">
              <i>Posté par: <strong><a href="#">'.$userInfo['username'].'</a></strong> le '.$Comments['posted_on'].'</i><br /><br />
            </td>
          </tr>';
          }
          echo '</table>';
        }
        ?>
        <?php
        if ($pages == 1) 
            { 
                echo "Première page&nbsp;&nbsp;"; 
            } 
             
            else 
            { 
                echo "<a href='articles?id=" . $news_article_id . "&page=" . 1 . "'>First</a>&nbsp;&nbsp;"; 
            } 

for ($i = 1; $i <= $pages; $i++) 
        { 
            if (($pages + 4) >= $i && ($pages - 4) <= $i) 
            { 
                if ($i != $pages) 
                { 
                    echo'<a name="pages" href="' . WWW . '/articles?id=' . $articleid . '&page='.$i.'">'.$i.'</a>&nbsp;&nbsp;'; 
                } 
                else  
                {  
                    echo "<b>" . $i . "</b>&nbsp;&nbsp;";  
                }  
            } 
        } 
            if ($pages == $pages) 
            { 
                echo "Dernière page"; 
            } 
             
            else 
            { 
                echo "<a href='article.php?id=" . $articleid . "&page=" . $pages . "'>Last</a>"; 
            }
            ?>
      </div>
    </div>
  </div>
</div>
                <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>