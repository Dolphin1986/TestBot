<?php

$update = json_decode(file_get_contents('php://input'), JSON_OBJECT_AS_ARRAY);

echo "Привет это update - ". $update;

