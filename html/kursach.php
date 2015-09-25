<?php

	function distinct_array($a, $b=132)
	{
		static $aDigits = array();
		$time_start = date('H:i:s', time()) ; // 10:00:00

		for ($i=3; $i < $a; $i++)
		{
			for ($j=3; $j < $b; $j++)
			{
				$aDigits[] = pow($i, $j);
			}
		}
		$aDigits = array_unique($aDigits);
		ini_set('date.timezone', 'Europe/Minsk');
		$time_end = date('H:i:s', time()); // 10:00:00
		return array(count($aDigits), $time_start, $time_end);
	}
	 if (isset($_POST["ii"]))
	 {
	 	$uu = distinct_array($_POST["ii"]);
	 	$data = ["result" => $uu[0], "ti_start" => $uu[1], "ti_end" => $uu[2]];
	 	echo json_encode($data);
	 }
	 else
	 {
?>
	<!DOCTYPE html>
	<html>
		<head>
			<title>
			</title>
				<link rel="stylesheet" type="text/css" href="/css/1.css">
				<script type="text/javascript" src="/js/jquery-2.1.4.min.js" ></script>
				<script type="text/javascript" src="/js/func.js" ></script>
		</head>
		<body>
			Введите значение  <input id="14" style="width: 60px;"></input>
			<button value="Выполнить на сервере" name="local" onclick="on_server()">Выполнить на сервере</button>
			<button value="Выполнить на локальном компьютере" onclick="on_local()">Выполнить на локальном компьютере</button>
			<div id="result" ></div>
			<div id="ti_start" ></div>
			<div id="ti_end" ></div>
		</body>
	</html>
	<div border="1"  style="height: 150px; border-color: azure; border: 2px; width: 150px; right: 10%; margin-right:50px;">
		<span id="timer" style="height: 150px; border-color: azure; border: 2px; width: 150px; right: 10%;background-color:#ebebeb;"><?php echo date('H:i:s', time()); ?></span>
	</div>


<script type="text/javascript">
	function on_local ()
	{
		//console.log(getElementsByName('local'));
		 var ff = $('#14').val();
		 // console.log(ff);

		 $.ajax(
		 {
		 	type: "POST",
		 	dataType: "json",
		 	url: "http://changeyourlife/kursach.php",
		 	data: {
		 		ii: ff
		 	},
		 	success: function(data){
		 		$("#result").html(data.result);
		 		$("#ti_start").html(data.ti_start);
		 		$("#ti_end").html(data.ti_end)
		 	}
		 })
	}
	function on_server ()
	{
		//console.log(getElementsByName('local'));
		 var ff = $('#14').val();
		 // console.log(ff);
		 $.ajax(
		 {
		 	type: "POST",
		 	dataType: "json",
		 	url: "http://changeyourlife/kursach.php",
		 	data: {
		 		ii: ff
		 	},
		 	success: function(data){
		 		$("#result").html(data.result);
		 		$("#ti_start").html(data.ti_start);
		 		$("#ti_end").html(data.ti_end)
		 	}
		 })
	}

	function timer()
	{
		console.log($("#timer").html().split(":"));

	}
	$(document).ready(function(e)
	{
		setTimeout('timer()',500);
		//timer();   				// Это запуск ф-ции инициализации, а в ней все фукции.
		//alert("Boom2!");
	});
	var explode = function()
	{
  		//alert("Boom!");
	};
	setTimeout(explode, 200);

</script>
<?php
 }
?>