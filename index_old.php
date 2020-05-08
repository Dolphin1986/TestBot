<?php

include 'webhook.php';

print_r($update);

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