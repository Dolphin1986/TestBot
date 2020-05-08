<?php

$update = json_decode(file_get_contents('php://input'), JSON_OBJECT_AS_ARRAY);

print_r($update);

echo "Привет это update - ". $update['img_url01'];

