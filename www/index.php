<?php
	$a=14/0;
?>
<html>
<head>
	<title>Software Fruit</title>
	<style>
		body {font-family: Arial,Helvetica,sans-serif; font-size: 14px; color:#0000FF;}

	</style>
</head>
<body>
	Software Fruit Landing Pages
	<?php 
	echo 'ROOT_PATH is '.getenv('ROOT_PATH')."<br>";
	echo 'LIB_PATH is '.getenv('LIB_PATH')."<br>";
	echo 'SERVICES_PATH is '.getenv('SERVICES_PATH')."<br>";
	echo 'UTILS_PATH is '.getenv('UTILS_PATH')."<br>";
	echo 'CONFIG_PATH is '.getenv('CONFIG_PATH')."<br>";
	echo 'WWW_PATH is '.getenv('WWW_PATH')."<br>";
	?>
</body>
</html>