<?php
/*=======================================================================
| UberCMS - Advanced Website and Content Management System for uberEmu
| #######################################################################
| Copyright (c) 2010, Roy 'Meth0d' & Jonty McIntyre
| http://www.meth0d.org
| #######################################################################
| This program is free software: you can redistribute it and/or modify
| it under the terms of the GNU General Public License as published by
| the Free Software Foundation, either version 3 of the License, or
| (at your option) any later version.
| #######################################################################
| This program is distributed in the hope that it will be useful,
| but WITHOUT ANY WARRANTY; without even the implied warranty of
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
| GNU General Public License for more details.
\======================================================================*/

class uberCore
{
	public $config;
	public $execStart;
	
	public function __construct()
	{
		$this->execStart = microtime(true);
	}	
	
	public static function CheckBetaKey($keyCode)
	{
		return (mysql_num_rows(dbquery("SELECT null FROM betakeys WHERE keyc = '" . filter($keyCode) . "' AND qty > 0 LIMIT 1")) > 0) ? true : false;
	}
	
	public static function EatBetaKey($keyCode)
	{
		dbquery("UPDATE betakeys SET qty = qty - 1 WHERE keyc = '" . filter($keyCode) . "' LIMIT 1");
	}
	public static function zapHash($text)
	{
		return sha1(md5($text));
	}
	public static function CheckCookies()
	{
		if (LOGGED_IN)
		{
			return;
		}
	
		if (isset($_COOKIE['rememberme']) && $_COOKIE['rememberme'] == "true" && isset($_COOKIE['rememberme_token']) && isset($_COOKIE['rememberme_name']))
		{
			$name = filter($_COOKIE['rememberme_name']);
			$token = filter($_COOKIE['rememberme_token']);
			$find = dbquery("SELECT id,username FROM users WHERE username = '" . $name . "' AND password = '" . $token . "' LIMIT 1");
			
			if (mysql_num_rows($find) > 0)
			{
				$data = mysql_fetch_assoc($find);
				
				$_SESSION['UBER_USER_N'] = $data['username'];
				$_SESSION['UBER_USER_H'] = $token;
				$_SESSION['set_cookies'] = true; // renew cookies
				
				header("Location: " . WWW . "/security_check");
				exit;				
			}
		}
	}
	
	public static function FormatDate()
	{
		return date('j F Y, h:i:s A');
	}
	
	public function UberHash($input = '')
	{
		return md5($input);
	}
	
	public static function GenerateTicket($seed = '')
	{
		$ticket = "ST-";
		$ticket .= sha1($seed . 'Uber' . rand(118,283));
		$ticket .= '-' . rand(100, 255);
		$ticket .= '-uber-fe' . rand(0, 5);
		
		return $ticket;
	}

	public static function FilterInputString($strInput = '')
	{
		return mysql_real_escape_string(stripslashes(trim($strInput)));
	}
	
	public static function FilterSpecialChars($strInput, $allowLB = false)
	{
		$strInput = str_replace(chr(1), ' ', $strInput);
		$strInput = str_replace(chr(2), ' ', $strInput);
		$strInput = str_replace(chr(3), ' ', $strInput);
		$strInput = str_replace(chr(9), ' ', $strInput);
		
		if (!$allowLB)
		{
			$strInput = str_replace(chr(13), ' ', $strInput);
		}
		
		return $strInput;
	}
	
	public static function CleanStringForOutput($strInput = '', $ignoreHtml = false, $nl2br = false)
	{
		$strInput = stripslashes(trim($strInput));

		if (!$ignoreHtml)
		{
			$strInput = htmlentities($strInput);
		}
		
		if ($nl2br)
		{
			$strInput = nl2br($strInput);
		}

		return $strInput;
	}

	public static function SystemError($title, $text)
	{
		echo "<font face='verdana'><center>UberCMS has encountered an error <br /> " . $text . " </font></center>";
		exit;		
	}
	
	public function ParseConfig()
	{
		$configPath = config_directory . 'system_config.php';
		
		if (!file_exists($configPath))
		{
			$this->systemError('Configuration Error', 'The configuration file could not be located at ' . $configPath);
		}
		
		require_once $configPath;
		
		if (!isset($config) || count($config) < 2)
		{
			$this->systemError('Configuration Error', 'The configuration file was located, but is in an invalid format. Data is missing or in the wrong format.');
		}
		
		$this->config = $config;
		
		define('WWW', $this->config['Site']['www']);
	}
	
	public static function GetSystemStatusString($statsFig)
	{
		$amt = number_format(mysql_result(dbquery("SELECT `users_online` FROM `server_status`"), 0));
		
		switch (uberCore::getSystemStatus())
		{
			case 2:
			case 0:	return $amt . " " . regOnlineText;
				
			case 1:
			
				if (!$statsFig)
				{
					return $amt . " " . regOnlineText;
				}
				else
				{
					return  "<b><font color='black'> " . $amt  . '</font color></b> ' . regOnlineText;
				}
		
			default:
			
				return "Unknown";
		}
	}
	
	public static function GetSystemStatus()
	{
		return intval(mysql_result(dbquery("SELECT status FROM server_status LIMIT 1"), 0));
	}
	
	public static function GetUsersOnline()
	{
		return intval(mysql_result(dbquery("SELECT users_online FROM server_status"), 0));
	}
	
	public static function GetMaintenanceStatus()
	{
		return mysql_result(dbquery("SELECT maintenance FROM site_config LIMIT 1"), 0);
	}
	
	public function Mus($header, $data = '')
	{
		if ($this->config['MUS']['enabled'] == "false" || $this->getSystemStatus() == "0")
		{
			return;
		}
		
		$musData = $header . chr(1) . $data;
		
		$sock = @socket_create(AF_INET, SOCK_STREAM, getprotobyname('tcp'));
		@socket_connect($sock, $this->config['MUS']['ip'], intval($this->config['MUS']['port']));
		@socket_send($sock, $musData, strlen($musData), MSG_DONTROUTE);	
		@socket_close($sock);
	}

	
	public static function AddBan($type, $value, $reason, $expireTime, $addedBy, $blockAppeal)
	{
		dbquery("INSERT INTO bans (id,bantype,value,reason,expire,added_by,added_date,appeal_state) VALUES (NULL,'" . $type . "','" . $value . "','" . $reason . "','" . $expireTime . "','" . $addedBy . "','" . date('d/m/Y H:i') . "','" . (($blockAppeal) ? '0' : '1') . "')");
	}
	 public static function fixText($str, $quotes = true, $clean = false, $ltgt = false, $transform = false, $guestbook = false)
    {
		$str = str_replace("&Acirc;", "¬", $str);
        $str = str_replace("¬°", "°", $str);
        $str = str_replace("¬ø", "ø", $str);
        $str = str_replace("Ìë", "—", $str);
        $str = str_replace("√±", "Ò", $str);
        $str = str_replace("ÌÅ", "¡", $str);
        $str = str_replace("√°", "·", $str);
        $str = str_replace("Ìâ", "…", $str);
        $str = str_replace("√©", "È", $str);
        $str = str_replace("Ìì", "”", $str);
        $str = str_replace("√≥", "Û", $str);
        $str = str_replace("Ìö", "⁄", $str);
        $str = str_replace("√∫", "˙", $str);
        $str = str_replace("Ìç", "Õ", $str);
        $str = str_replace("√§", "‰", $str);
        $str = str_replace("≠", "", $str);
        $str = str_replace("√", "Ì", $str);
        $str = str_replace(")", "&#x29;", $str);
        $str = str_replace("(", "&#x28;", $str);
		$str = str_replace("¬•", "•", $str);
		$str = str_replace("\\\\r\\\\n", "<br />", $str);
		$str = str_replace("\\\\\\\\r\\\\\\\\n", "<br />", $str);
        $str = str_replace("\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\'", "&apos;", $str);
        $str = str_replace("\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;", "&#x22;", $str);
        $str = str_replace("\'", "'", $str);
        $str = str_replace('\"', '"', $str);
        $str = str_replace("\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"", "&#x22;", $str);
        $str = str_replace("\\\\\\\\\\\\\\\\r\\\\\\\\\\\\\\\\n", "<br />", $str);
        $str = str_replace('\\\\n', "<br />", $str);
        $str = str_replace('\\\\\\\\\\\\"', '"', $str);
        $str = str_replace('\\\\r\\\\n', "<br />", $str);
        $str = str_replace('\\\\\\\\r\\\\\\\\n', "<br />", $str);
		$str = str_replace('\r\n', "<br />", $str);
		$str = str_replace('\\', "", $str);
        
        if ($quotes) {
            $str = str_replace('"', "&#x22;", $str);
            $str = str_replace("'", "&apos;", $str);
        }
        
        
        
        if ($clean) {
            $str = str_replace("—", "N", $str);
            $str = str_replace("Ò", "n", $str);
            $str = str_replace("¡", "A", $str);
            $str = str_replace("·", "a", $str);
            $str = str_replace("…", "E", $str);
            $str = str_replace("È", "e", $str);
            $str = str_replace("”", "O", $str);
            $str = str_replace("Û", "o", $str);
            $str = str_replace("⁄", "U", $str);
            $str = str_replace("˙", "u", $str);
            $str = str_replace("Õ", "I", $str);
            $str = str_replace("Ì", "i", $str);
        }
        
        if ($ltgt) {
            $str = str_replace("<", "&lt;", $str);
            $str = str_replace(">", "&gt;", $str);
        }
        
        if ($transform) {
            $str = str_replace("'", '"', $str);
        }
		
		if($guestbook) {
			$str = str_replace("&lt;br /&gt;", '<br />', $str);
			$str = str_replace("&lt;b&gt;", '<b>', $str);
			$str = str_replace("&lt;/b&gt;", '</b>', $str);
			$str = str_replace("&lt;u&gt;", '<u>', $str);
			$str = str_replace("&lt;/u&gt;", '</u>', $str);
			$str = str_replace("&lt;i&gt;", '<i>', $str);
			$str = str_replace("&lt;/i&gt;", '</i>', $str);
			$str = str_replace("&lt;/i&gt;", '<br />', $str);
			$str = preg_replace("/\&lt;a href=\"(.*?)\"\&gt;(.*?)\&lt;\/a&gt;/is", "<a href=\"$1\" target=\"_blank\">$2</a>", $str);
			$str = preg_replace("/\&lt;div class=\"bbcode-quote\"\&gt;(.*?)\&lt;\/div&gt;/is", "<div class=\"bbcode-quote\">$1</div>", $str);
			$str = preg_replace("/\&lt;span style=\"(.*?)\"\&gt;(.*?)\&lt;\/span&gt;/is", "<span style=\"$1\">$2</span>", $str);
			$str = preg_replace("/\&lt;span style=\"font-size: 14px\"\&gt;(.*?)\&lt;\/span&gt;/is", "<span style=\"font-size: 14px\">$1</span>", $str);
		}
        
        
        
        return $str;
    }
    
    public static function CheckComment($comment = '')
    {
		$comment = strtolower($comment);
	
        $denied  = array(
            'puto',
			'puta',
            'mierda',
            'aaaaaaaaaaaaaaaaaaaaaaaa',
            'cabrones',
            'http',
            '.com',
            '.org',
            '.net',
            '.info'
        );
        $allowed = array(
            'youtube',
            'facebook',
            'xukys',
            'google'
        ); 
        
        foreach ($denied as $deny) {
            if (strstr($comment, $deny)) {
                foreach ($allowed as $allow) {
                    if (strstr($comment, $allow)) {
                        return true;
                    }
                }
                
                uberCore::AddPermBan('user', $_SESSION['UBER_USER_N'], $comment);
                return false;
            }
            
        }
        
        return true;
    }
    
    
    
    public static function GenRandom()
    {
        return substr(md5(uniqid(rand())), 0, 15);
    }
    
    
    public static function BBcode($texto)
    {
        $texto = htmlentities($texto);
        $a     = array(
            "/\[i\](.*?)\[\/i\]/is",
            "/\[b\](.*?)\[\/b\]/is",
            "/\[u\](.*?)\[\/u\]/is",
            "/\[quote\](.*?)\[\/quote\]/is",
            "/\[url=(.*?)\](.*?)\[\/url\]/is",
			"/\[color=red\](.*?)\[\/color\]/is",
			"/\[color=orange\](.*?)\[\/color\]/is",
			"/\[color=yellow\](.*?)\[\/color\]/is",
			"/\[color=green\](.*?)\[\/color\]/is",
			"/\[color=cyan\](.*?)\[\/color\]/is",
			"/\[color=blue\](.*?)\[\/color\]/is",
			"/\[color=gray\](.*?)\[\/color\]/is",
			"/\[color=black\](.*?)\[\/color\]/is",
			"/\[size=large\](.*?)\[\/size\]/is",
			"/\[size=small\](.*?)\[\/size\]/is"
        );
        $b     = array(
            "<i>$1</i>",
            "<b>$1</b>",
            "<u>$1</u>",
            "<div class=\"bbcode-quote\">$1</div>",
            "<a href=\"$1\" target=\"_blank\">$2</a>",
			"<span style=\"color: #d80000\">$1</span>",
			"<span style=\"color: #fe6301\">$1</span>",
			"<span style=\"color: #ffce00\">$1</span>",
			"<span style=\"color: #6cc800\">$1</span>",
			"<span style=\"color: #00c6c4\">$1</span>",
			"<span style=\"color: #0070d7\">$1</span>",
			"<span style=\"color: #828282\">$1</span>",
			"<span style=\"color: #000000\">$1</span>",
			"<span style=\"font-size: 14px\">$1</span>",
			"<span style=\"font-size: 9px\">$1</span>"
        );
        $texto = preg_replace($a, $b, $texto);
        $texto = nl2br($texto);
        return $texto;
    }

	public static function GenerateRandom($length = 0, $letters = true, $numbers = false, $other = false)
	{
		$data = "";
		$possible = "";
		$i = 0;
		
		if($letters)
		{
			$possible .= "abcdefhijkl"; 
		}
		
		if($numbers)
		{
			$possible .= "0123456789";
		}
		
		if($other)
		{
			$possible .= "ABCDEFHIJKL@%&^*/(){}";
		}
		
		while ($i < $length) 
		{ 
			$char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
			$data .= $char;
			$i++;
		}
		return $data;
	}
}
?>
