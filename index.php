<?php

include 'webhook.php';

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

	</body>

</html>