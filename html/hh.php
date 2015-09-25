<?php

/*Задача 3

Запись n! обозначает число равное произведению n*(n-1)*(n-2)*...*1 и называется факториал.
Например, 6! = 6*5*4*3*2*1 = 720.
Сумма всех цифр в факториале 6 равна 7+2+0=9

Найдите сумму всех цифр в 1!*/

function fact($digit)
{
	static $itog = 1;
	$itog *= $digit;
	$digit--;
	if($digit != 1) fact($digit);
	return $itog;
}

//echo fact(171);
/* Задача 4

Рассмотрим все возможные числа ab для 1<a<6 и 1<b<6:
22=4, 23=8, 24=16, 25=32 32=9, 33=27, 34=81, 35=243 42=16
, 43=64, 44=256, 45=1024, 52=25, 53=125, 54=625, 55=3125
Если убрать повторения, то получим 15 различных чисел.

Сколько различных чисел ab для 2<a<149 и 2<b<126?*/

function distinct_array($a, $b)
{
	static $aDigits = array();
	echo $time6 = date('H:i:s', time()) . "<br>"; // 10:00:00

	for ($i=3; $i < $a; $i++)
	{
		for ($j=3; $j < $b; $j++)
		{
			$aDigits[] = pow($i, $j);
		}
	}
	$aDigits = array_unique($aDigits);
	ini_set('date.timezone', 'Europe/Minsk');
	echo $time6 = date('H:i:s', time()) . "<br>"; // 10:00:00
	return count($aDigits);
}

 echo distinct_array(100, 136);

/*Задача 5

Если мы возьмем 47, перевернем его и сложим, получится число 121 — палиндром.

Если взять 349 и проделать над ним эту операцию три раза, то тоже получится палиндром:
349 + 943 = 1292
1292 + 2921 = 4213
4213 + 3124 = 7337

Найдите количество положительных натуральных чисел меньших 13332 таких,
что из них нельзя получить палиндром за 50 или менее применений описанной операции.*/

function Count_poly()
{
	for($jj = 10; $jj < 13332; $jj++)
	{
		$ss = [$jj];
		$no_poly = 0;
		for($yy=0; $yy < 50; $yy++)
		{
			$ss1 = "";
			$str_arr = implode("", $ss);
			$ggg = array();

			for ($i = 0; $i < strlen($str_arr); $i++)
			{
				$ggg[] = $str_arr[$i];
			}
			foreach (array_reverse($ggg) as $value)
			{
				$ss1 .= $value;
			}
			$ff = (int)$str_arr + (int)$ss1;
			//echo $str_arr. "<br>";
			//echo $ss1. "<br>";
			$ff = strval($ff);
			$OneDigit = array();
			$TwoDigit = array();
			for ($i=0; $i < strlen($ff); $i++)
			{
				$OneDigit[] = $ff[$i];
			}
			$TwoDigit = array_reverse($OneDigit);
			//printr($OneDigit);
			//printr($TwoDigit);
			if ($OneDigit == $TwoDigit)
			{
				//echo $str_arr . "  ------   " . $ff . " - Можно получить полиндром! <br>";
				break;
			}
			else
			{
				//echo $str_arr . "Нет!  " . $yy. " <br>";
				$ss = [$ff];
				$no_poly++;
			}
			if ($no_poly == 50)
			{
				$aNo_poly[] = $jj;
			}
		}
	}
	//printr($aNo_poly);
	return count($aNo_poly);
}

//echo Count_poly();


/*Задача 1

Сумма ряда 1^1 + 2^2 + 3^3 + ... + 1010 = 10405071317, десять последних цифр: 0405071317.

Найдите 10 последних цифр в конечной сумме ряда 1^1 + 2^2 + 3^3 + ... + 1377^1377.*/
function summa_poslednich_decyati_chisel($chislo)
{
	$summa = 0;
	for ($i=1; $i <= $chislo ; $i++)
	{
		$summa += pow($i, $i);
	}
	return $summa;
}
// echo summa_poslednich_decyati_chisel(1000);




function summa_chisel($kol)
{
	$first_digit = $kol;
	$aFirst_digit = array();
	$aTwo_digit = array();
	$dec = 1;
	$summa = 0;
	for ($i= strlen($first_digit) - 1; $i >= 0 ; $i--)
	{
		$aFirst_digit[] = $first_digit[$i];
	}

	foreach ($aFirst_digit as $value)
	{
		$summa += $value * (int)$first_digit * $dec;
		$dec *= 10;
	}
	return $summa;
}

 // echo summa_chisel(10);



	$aData = array();
	$aData = [1, 1];
	printr($aData);
	echo "kjhkjhjkhjk";

