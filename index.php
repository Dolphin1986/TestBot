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
		<img src="<?php echo $update['img_url01'];?>">
	</body>

</html>