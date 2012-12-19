<?php
define('Xukys', true);
require_once 'global.php';

if(isset($_GET['id'])) {
	if(is_numeric($_GET['id'])) {
			$startid = $gtfo->cleanWord($_GET['id']);
			if($startid == USER_ID) {
			
			$sql = mysql_query("SELECT id from users where id = '".$startid."'");
				if(mysql_num_rows($sql) == '1') {

				if(isset($_SESSION['startSessionEditGroup'])) {
							unset($_SESSION['startSessionEditGroup']);
						}
				
				$_SESSION['startSessionEditHome'] = USER_ID;
				header('Location: /home/'.$_SESSION['UBER_USER_N'].'/');

			}
		}
	}
}

?>