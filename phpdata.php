<?php

$f = fopen("orders.json", "a");
fwrite($f, json_encode($_GET) . "\n");

fclose($f);

$_GET["time"] = time();
echo json_encode($_GET);

?>