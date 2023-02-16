<?php

$f = fopen("orders.json", "a");
fwrite($f, json_encode($_GET) . "\n");

fclose($f);
echo json_encode($_GET);

?>