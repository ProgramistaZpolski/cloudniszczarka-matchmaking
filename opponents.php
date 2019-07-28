<?php
$fn = fopen("opponents.txt","r");
$result = fgets($fn);
echo $fn;
array_splice($result, 0, 1);
file_put_contents('opponents.txt', $result);
fclose($fn);
?>