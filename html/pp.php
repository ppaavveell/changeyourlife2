<?php
	function test($d)
	{
		// $time_start = date('H:i:s', time()) ; // 10:00:00
		$flag = false;
		$time_start = time() ; // 10:00:00
		for ($i=0; $i < 1000000; $i++)
			{
				$str = md5($i);
				if ($str == $d)
				{
					$flag = true;
					break;
				}
			}
			// $time_end = date('H:i:s', time()); // 10:00:00
		$time_end = time(); // 10:00:00
		$time_total = $time_end - $time_start;
		if (!$flag)
		{
			$ii = "На локальном компьютере решение найдено не было!";
		}else
		{
			$ii = "Решение было найдено на локальном компьютере! Время поиска составило " . (($time_total)?($time_total):("менее")) . " секудны. Ответ: " . $i;
		}
		return array($ii);
	}

	$result = test($_POST["sData"]);
	$result2 = ["result" => $result];
	echo json_encode($result2);


?>