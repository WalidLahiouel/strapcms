<?php

function fixText($str, $clean = false)
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