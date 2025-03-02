<?php 

$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd',
]; //evite fazer isso por questões de segurança e de não funcionamento

foreach ($array as $item) {
    echo $item . PHP_EOL;
}

