<?php
$facts = json_decode(file_get_contents("css-color-names.json"));
echo $array[array_rand($facts)];
?>
