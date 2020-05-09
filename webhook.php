<?php

// $update = json_decode(file_get_contents('php://input'), JSON_OBJECT_AS_ARRAY);


$update = json_decode(file_get_contents('php://input'), JSON_OBJECT_AS_ARRAY);



file_put_contents(__DIR__.'/log.txt', file_get_contents('php://input'));

$file = 'log.txt';

session_start(); 
$_SESSION['value1'] = $update; 



// var_dump($_SESSION['value1']);

 // ETC... echo "<input type='text' name='value1' value='".$_SESSION['value1']."' />"; echo "<input type='text' name='value2' value='".$_SESSION['value2']."' />"; 


// $url    = 'php://input';

//     $data   = file_get_contents($url);

//     if ( ! empty($data)) {
//         $contents = json_decode(html_entity_decode($data), TRUE);

//         echo '<pre>';
//         print_r($contents['response']);
//         echo '</pre>';
//     }