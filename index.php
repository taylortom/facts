<?php
$facts = json_decode(file_get_contents("facts.json"));
echo $array[array_rand($facts)];
?>
