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
				Введите значение md5  <input id="14" style="width: 260px;" name="pass"></input>
				<!-- <input type="submit" value="Зашифровать" name="code_pass" /> -->
				<button value="Начать поиск!" onclick="on_local()" >Начать поиск!</button>

		</body>
	</html>
	<div border="1"  style="height: 150px; border-color: azure; border: 2px; width: 150px; right: 10%; margin-right:50px;">
		<span id="timer" style="height: 150px; border-color: azure; border: 2px; width: 150px; right: 10%;background-color:#ebebeb;"><?php echo date('H:i:s', time()); ?></span>
		<span id="timer2" style="height: 150px; border-color: azure; border: 2px; width: 150px; right: 10%;background-color:#ebebeb;"><?php echo md5(3002700); ?></span>
		<span id="timer2" style="height: 150px; border-color: azure; border: 2px; width: 150px; right: 10%;background-color:#ebebeb;"><?php echo md5(81762); ?></span>
	</div>



<script type="text/javascript">
	function on_local()
	{
		//console.log($("#14").val());
		var pass = $("#14").val();

		$.ajax(
		 {
		 	type: "POST",
		 	dataType: "json",
		 	url: "http://changeyourlife/pp.php",
		 	data: {
		 		sData: pass
		 	},
		 	success: function(data)
		 	{
		 		alert(data.result);
		 	}
		 })
		$.ajax(
		 {
		 	type: "POST",
		 	dataType: "json",
		 	url: "http://172.16.0.5/hh2",
		 	data: {
		 		sData: pass
		 	},
		 	success: function(data)
		 	{
		 		alert(data.result);
		 	}
		 })

	}
</script>
