<?php

include 'webhook.php';

$file_01 = './test_log.txt';

print_r($update);



var_dump (file_get_contents($file_01, true));


?>


<!DOCTYPE html>
<html>
<head>
	<title>Test Slider</title>
</head>
	
	<body>
		<h2>Текст сообщения вот: <?=$update['txt_massage']?></h2>
		<br>
		<h1>Тут должна быть картинка:</h1>
		<img src = '<?=$update['img_url01']?>'>
		<a href="/log.txt">log.txt</a>
	</body>

</html>