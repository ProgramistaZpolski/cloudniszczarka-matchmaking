<?php
$fp = fopen('opponents.txt', 'w');
fwrite($fp, $_POST["opponent"]."\n";
fclose($fp);
?>