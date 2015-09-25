<html>
	<title>Мой сайт</title>
	<head>
		<link rel="stylesheet" type="text/css" href="/css/1.css">
		<script type="text/javascript" src="/js/jquery-2.1.4.min.js" ></script>
		<script type="text/javascript" src="/js/func.js" ></script>
	</head>
	<body>
		<p><h1><em>Здесь будет содержаться контент по поддрержанию здорового образа жизни!</em></h1></p>
		<hr>
		<div id="total_field">
			<div id="result_field">
				</div>
			</div>
		</div>
		<div class="my_buttons" >
			<?php
				for ($i=0; $i < 10; $i++)
				 {
					echo '<button style="height: 45px; width: 45px;" class="buttons" id="btn_' . $i . '" >'. $i . '</button>';
				}
			?>
		</div>




		<?php
			function str_search($path, $extension, $str)
			{
			        $file_arr = array();
			        foreach (glob(rtrim($path, '/')."/*.".$extension) as $filename)
			        {
			                if(strstr(file_get_contents($filename), $str) != false)
			                $file_arr[] = $filename;
			        }
			        return $file_arr;
			}

			if($handle = opendir("H:\\") )
			{
				var_dump($handle);
				echo "<br>Файлы:<br>";
				//while (false !== ($file = scandir($handle)))
				//{
				$file = scandir($handle);
					print_r($file);
					//str_search('my_dir', 'файл.txt', 'строка поиска');
				//}
			}
			//str_search('my_dir', 'файл.txt', 'строка поиска');
		?>
	</body>


</html>

<script type="text/javascript">
$('button.buttons').css("background-color", "blue").css("font-size", "30px");
	// alert($("*").size());
</script>