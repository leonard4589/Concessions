<?php

$f = fopen($inventory);
fread($f);
echo fread($f);
fclose($f);

?>