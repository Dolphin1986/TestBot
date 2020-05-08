<?php

// include 'webhook.php';

$update = json_decode(file_get_contents('php://input'), JSON_OBJECT_AS_ARRAY);

file_put_contents(__DIR__.'/log.txt', file_get_contents('php://input'));

var_dump($update);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Test Slider</title>
</head>
	
	<body>
		<h1>Тут должна быть картинка:</h1>
		<img src = '<?=$update['img_url01']?>'>
		<a href="/log.txt">log.txt</a>
	</body>

</html>