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
			// require_once "menu.php";
			// $menuClass = new menuClass();
			// echo $menuClass->title;
			// $menuClass->menu();
		?>
	</body>


</html>