<?php
// add information to my json file in my terminal, the a means "add" instead of completely replacing each time I hit submit
$f = fopen("orders.json", "a");
// writes the data to the json file
fwrite($f, json_encode($_GET) . "\n");

fclose($f);
// gets the time that the submit button is pushed (epoch time)
$_GET["Time"] = time();
// echos what is recorded so that I know the information was saved
echo json_encode($_GET);
echo json_encode($_GET["Item"]);
echo json_encode($_GET["Quantity"]);


$inventory["Pop Tart"] = 15;
$inventory["Gold Fish"] = 20;
$inventory["Motts"] = 40;

$f = fopen("inventory.json", "a");
fwrite($f, json_encode($inventory) . "\n");
fclose($f);
echo json_encode($inventory);
?>