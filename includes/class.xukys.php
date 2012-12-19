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
		$str = str_replace("¡","�",$str);
		$str = str_replace("¿","�",$str);
		$str = str_replace("�","�",$str);
		$str = str_replace("ñ","�",$str);
		$str = str_replace("�","�",$str);
		$str = str_replace("á","�",$str);
		$str = str_replace("�","�",$str);
		$str = str_replace("é","�",$str);
		$str = str_replace("�","�",$str);
		$str = str_replace("ó","�",$str);
		$str = str_replace("�","�",$str);
		$str = str_replace("ú","�",$str);
		$str = str_replace("�","�",$str);
		$str = str_replace("�","�",$str);
//		$str = str_replace("\'","'",$str);
//		$str = str_replace('\"','"',$str);
	
		if($clean)
		{
			$str = str_replace("�","N",$str);
			$str = str_replace("�","n",$str);
			$str = str_replace("�","A",$str);
			$str = str_replace("�","a",$str);
			$str = str_replace("�","E",$str);
			$str = str_replace("�","e",$str);
			$str = str_replace("�","O",$str);
			$str = str_replace("�","o",$str);
			$str = str_replace("�","U",$str);
			$str = str_replace("�","u",$str);
			$str = str_replace("�","I",$str);
			$str = str_replace("�","i",$str);
		}
	
		return $str;
	}

?>