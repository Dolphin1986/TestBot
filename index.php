<?php

$update = json_decode(file_get_contents('php://input'), JSON_OBJECT_AS_ARRAY);

print_r($update);

echo "Привет это update - ". $update['img_url01'];
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