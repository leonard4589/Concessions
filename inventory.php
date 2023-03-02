<?php

$f = fopen("inventory.json");
fread($f);
echo fread($f);
fclose($f);

?>