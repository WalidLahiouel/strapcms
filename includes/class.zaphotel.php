<?php
	class zaphotel
	{
		public function GiveVip($username, $level)
		{
			switch($level)
			{
				case "2":
					$this->coins = '125000'; $this->pixels = '75000'; $this->points = '2'; $this->rank = '3'; break;
				case "3":
					$this->coins = '15000'; $this->pixels = '100000'; $this->points = '4'; $this->rank = '3'; break;
				case "4":
					$this->coins = '300000'; $this->pixels = '175000'; $this->points = '5'; $this->rank = '3'; break;
				case "5":
					$this->coins = '500000'; $this->pixels = '250000'; $this->points = '7'; $this->rank = '3'; break;
				case "6":
					$this->coins = '750000'; $this->pixels = '325000'; $this->points = '10'; $this->rank = '4'; break;
				case "7":
					$this->coins = '1000000'; $this->pixels = '500000'; $this->points = '12'; $this->rank = '4'; break;
				case "8":
					$this->coins = '1200000'; $this->pixels = '750000'; $this->points = '12'; $this->rank = '4'; break;
				case "9":
					$this->coins = '3000000'; $this->pixels = '150000'; $this->points = '20'; $this->rank = '4'; break;
				case "10":
					$this->coins = '5000000'; $this->pixels = '5000000'; $this->points = '50'; $this->rank = '4'; break;
			}
				
			if($level == '10')
			{
				$this->badge = 'G10';
			}
			else
			{
				$this->badge = 'GL' . $level;
			}
				
			$this->userId = mysql_result(mysql_query("SELECT id FROM users WHERE username = '" . $username . "'"), 0);
				
			mysql_query("UPDATE users SET credits = credits + '" . $this->coins . "' WHERE username = '" . $username . "'");
			mysql_query("UPDATE users SET activity_points = activity_points + '" . $this->pixels . "' WHERE username = '" . $username . "'");
			mysql_query("UPDATE users SET points = points + '" . $this->points . "' WHERE username = '" . $username . "'");
			
			mysql_query("UPDATE users SET rank = '" . $this->rank . "' WHERE username = '" . $username . "'");
			mysql_query("INSERT INTO user_badges (user_id, badge_id, badge_slot) VALUES ('" . $this->userId . "', '" . $this->badge . "', '0')");
		}
		
		public function AddCredits($username, $amt)
		{
			mysql_query("UPDATE users SET credits = credits + '" . $amt . "' WHERE username = '" . $username . "'");
		}
		
		public function AddPixels($username, $amt)
		{
			mysql_query("UPDATE users SET activity_points = activity_points + '" . $amt . "' WHERE username = '" . $username . "'");
		}
	}

?>