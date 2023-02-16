<?php

echo "Order submitted";

$f = fopen("orders.json", "a");
fwrite($f, json_encode($_GET) . "\n");

fclose($f);
echo "Saved";

?>