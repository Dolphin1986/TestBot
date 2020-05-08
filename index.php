<?php

$update = json_decode(file_get_contents('php://input'));

echo "Привет это update - ". $update;

