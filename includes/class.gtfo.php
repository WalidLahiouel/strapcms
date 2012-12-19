<?php
//define('Xukys', true);
include 'class.xukys.php';
/*
 * Name: GTFOLammers Clean system
 * Authors: Xt3mP & FahD
 * Version: 1.0 BETA
 */
class GtfoClean
{
    function cleanWord($word)
    {
        $this->word = $word;
        @$this->word = strip_tags($this->word, '<br><br />');	
        //$this->word = htmlentities($this->word, ENT_IGNORE, "ISO-8859-1");	
        $this->word = mysql_real_escape_string($this->word);	
        $this->word = addslashes($this->word);	
		$this->word = fixTextT($this->word);
        return $this->word;
    }
    
    function cleanSystem($type = null)
    {
        $this->allowed = array('strip_tags', 'htmlentities', 'mysql_real_escape_string', 'addslashes', 'all');
        $this->containers = array('GET', 'POST', 'COOKIE');
        $this->type = (!in_array($type, $this->allowed)) ? 'all' : $type;
        foreach($this->containers as $this->container)
        {
            @eval("\$_GTFO = \$_".$this->container.";");
            if(!empty($_GTFO))
            {
                foreach($_GTFO as $this->wordId => $this->wordValue)
                {
                    switch($this->type)
                    {
                        case 'strip_tags':
                            $this->wordCleaned = strip_tags($this->wordValue);
                        break;
                            
                        case 'htmlentities':
                            $this->wordCleaned = htmlentities($this->wordValue);
                        break;
                        
                        case 'mysql_real_escape_string':
                            $this->wordCleaned = mysql_real_escape_string($this->wordValue);
                        break;
                        
                        case 'addslashes':
                            $this->wordCleaned = addslashes($this->wordValue);
                        break;
                        
						case 'fixText';
							$this->wordCleaned = fixText($this->wordValue);
						break;
						
                        case 'all':	
                            $this->wordCleaned = $this->cleanWord($this->wordValue);
                        break;
                    }
                    $_GTFO[$this->wordId] = $this->wordCleaned;
                }
            }
            @eval("\$_".$this->container." = \$_GTFO;");
        }
    }
}

?>