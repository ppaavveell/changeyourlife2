<?php
	function perebor($value2, $flag=0)
	{
		if (flag == 0)
		{

			for ($i=0; $i < 10000; $i++)
			{
				$str = md5($i);
				if ($str == $value2)
				{
					echo $i . "  from LOCAL" ;
					break;
				}
			}
		}
		else
		{
			for ($i=10001; $i < 1000000; $i++)
			{
				$str = md5($i);
				if ($str == $value2)
				{
					echo $i . "  FROM server" ;
					break;
				}
			}
		}

		return $i;
	}

	if (isset($_POST["pass2send"]))
	 {
		//echo "----" .md5($_POST["pass2send"]) . "----" ;
	 	perebor($_POST["pass2send"], $_POST["server"]);

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
				Введите значение  <input id="14" style="width: 260px;" name="pass"></input>
				<input type="submit" value="Зашифровать" name="code_pass" />
				<button value="Выполнить на локальном компьютере" onclick="on_local()" >Выполнить на локальном компьютере</button>
				<div id="result" ></div>
				<div id="ti_start" ></div>
				<div id="ti_end" ></div>
		</body>
	</html>
	<div border="1"  style="height: 150px; border-color: azure; border: 2px; width: 150px; right: 10%; margin-right:50px;">
		<span id="timer" style="height: 150px; border-color: azure; border: 2px; width: 150px; right: 10%;background-color:#ebebeb;"><?php echo date('H:i:s', time()); ?></span>
	</div>



<script type="text/javascript">
	function on_local()
	{
		console.log($("#14").val());
		var pass = $("#14").val();
		$.ajax(
		 {
		 	type: "POST",
		 	dataType: "json",
		 	url: "http://changeyourlife/kursach_pass.php",
		 	data: {
		 		pass2send: pass,
		 		server: 0
		 	},
		 	success: function(data){
		 	}
		 })
		$.ajax(
		 {
		 	type: "POST",
		 	dataType: "json",
		 	url: "http://changeyourlife/kursach_pass2.php",
		 	data: {
		 		pass2send: pass,
		 		server: 1
		 	},
		 	success: function(data){
		 	}
		 })

	}
</script>

<?php
 }
?>