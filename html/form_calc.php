<!DOCTYPE html>
<html>
<head>
	<title>
		Калькулятор
	</title>
	<link rel="stylesheet" type="text/css" href="/css/1.css">
	<script type="text/javascript" src="/js/jquery-2.1.4.min.js" ></script>
	<script type="text/javascript" src="/js/func.js" ></script>
</head>
<body >
	<table class="total_table" width="320" height="361" border="0" style="border-collapse:collapse; margin-left: 100px; margin-top: 30px;box-shadow: 0 0 10px rgba(0,0,0,1); /* Параметры тени */" >
		<!--1 -->
		<tr height="7%" valign="top" bgcolor="#DCEDF0" class="tmp_field" >
			<td colspan="2" id="tmp_field" style="padding-right: 15px; padding-top: 9px;">

			</td>
		</tr>
		<!-- 2-->
		<tr height="11%" valign="top" bgcolor="#E0EDF0" style="border-left:2px solid black; border-right:2px solid black; border-bottom:2px solid #D2E9EE;">
			<td colspan="2" id="total_field">

			</td>
		</tr>
		<!-- 3-->
		<tr valign="top" style="border-left:2px solid black; border-right:2px solid black; background-color: #C0DDE4;">
			<td colspan="2" style="margin-bottom: 5px;"  >
				<?php
					for ($i=0; $i < 10; $i++)
					{
						if($i % 5 == 0 and $i != 0) echo "<br>";
						switch ($i)
						{
							case 0:
								$val = "MC";
								break;
							case 1:
								$val = "MR";
								break;
							case 2:
								$val = "MS";
								break;
							case 3:
								$val = "M+";
								break;
							case 4:
								$val = "M-";
								break;
							case 5:
								$val = "←";
								break;
							case 6:
								$val = "CE";
								break;
							case 7:
								$val = "C";
								break;
							case 8:
								$val = "±";
								break;
							case 9:
								$val = "¬";
								break;

						}
						echo '<button class="spec_but" id="btn_' . $val . '" >'. $val . '</button>';
					}
				?>
			</td>
		</tr>

		<!-- 4left-->
		<tr>
			<td width="59%" valign="top" margin-left="10" style="border-left:2px solid black;border-bottom:2px solid black; background-color: #C0DDE4;" >
				<?php
					for ($i=1; $i < 10; $i++)
					{
						if(($i + 2) % 3 == 0 and $i != 0) echo "<br>";
						echo '<button class="buttons" id="btn_' . $i . '" >'. $i . '</button>';
					}
					echo '<button id="btn_0" class="buttons" style="height: 36px; width: 109px; margin-left: 9px;" >0</button>';
					echo '<button id="btn_comma" class="buttons" >,</button>';
				?>
			</td>
			<td valign="top" style="border-right:2px solid black;border-bottom:2px solid black; background-color: #C0DDE4;">
				<?php
					echo '<button id="btn_div" class="spec_button" style="height: 36px; width: 49px; margin-left: -2px; margin-top: 18px;">/</button>';
					echo '<button id="btn_mod" class="spec_button"  style="height: 36px; width: 49px; margin-left: 9px; margin-top: 18px;">%</button>';
					echo '<button id="btn_mul" class="spec_button">*</button>';
					echo '<button id="btn_1_x" class="spec_button" style="height: 36px; width: 49px; margin-left: 9px; margin-top: 9px;">1/x</button>';
					echo '<button id="btn_minus" class="spec_button">-</button>';
					echo '<button id="btn_equal" class="spec_button" style="height: 36px; width: 49px; margin-left: 9px; margin-top: 9px;">=</button>';
					echo '<button id="btn_plus" class="spec_button">+</button>';
				?>
			</td>
		</tr>
		<!-- -->

		<!-- -->
	</table>
<!-- 	<table style="border-collapse:collapse;" height="300" width="250" >
		<tr valign="top" style="border-top:1px solid black; border-left:1px solid black;">
			<td height="7%" colspan="2" >
				1
			</td>
		</tr>
		<tr valign="top" style="border-left:1px solid black;">
			<td height="15%" colspan="2">
				2
			</td>
		</tr>
		<tr valign="top" colspan="2" style="border-left:1px solid black;">
			<td rowspan="2" style=" border-bottom: 1px solid black;">
				3

			</td>
			<td rowspan="2" style=" border-bottom: 1px solid black;">
				4
			</td>
			<td valign="bottom" >
			6
			</td>
		</tr> -->

	</table>
</body>
</html>