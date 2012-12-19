<?php
function file_get_contents_curl($url) {
	$ch = curl_init();
	
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Set curl to return the data instead of printing it to the browser.
	curl_setopt($ch, CURLOPT_URL, $url);
	
	$data = curl_exec($ch);
	curl_close($ch);
	
	return $data;
}

function fixTextT($str, $clean = false)
	{
		$str = str_replace("ยก","ก",$str);
		$str = str_replace("ยฟ","ฟ",$str);
		$str = str_replace("ํ‘","ั",$str);
		$str = str_replace("รฑ","๑",$str);
		$str = str_replace("ํ","ม",$str);
		$str = str_replace("รก","แ",$str);
		$str = str_replace("ํ","ษ",$str);
		$str = str_replace("รฉ","้",$str);
		$str = str_replace("ํ“","ำ",$str);
		$str = str_replace("รณ","๓",$str);
		$str = str_replace("ํ","ฺ",$str);
		$str = str_replace("รบ","๚",$str);
		$str = str_replace("ํ","อ",$str);
		$str = str_replace("ร","ํ",$str);
//		$str = str_replace("\'","'",$str);
//		$str = str_replace('\"','"',$str);
	
		if($clean)
		{
			$str = str_replace("ั","N",$str);
			$str = str_replace("๑","n",$str);
			$str = str_replace("ม","A",$str);
			$str = str_replace("แ","a",$str);
			$str = str_replace("ษ","E",$str);
			$str = str_replace("้","e",$str);
			$str = str_replace("ำ","O",$str);
			$str = str_replace("๓","o",$str);
			$str = str_replace("ฺ","U",$str);
			$str = str_replace("๚","u",$str);
			$str = str_replace("อ","I",$str);
			$str = str_replace("ํ","i",$str);
		}
	
		return $str;
	}

?>