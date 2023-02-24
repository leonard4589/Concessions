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


  // get information from the url parameters if one of the parameters in called 'name'
  if (!empty($_GET['picoID'])){
        
    $_GET["time"] = time();
    $_GET['saved'] = True;

    //save info to database file
    $dbFileName = 'pico_' . $_GET['picoID'] . '.json';

    $file = fopen($dbFileName, 'a');
    fwrite($file, json_encode($_GET)."\n");
    fclose($file);
    //send the information back as confimration
    echo json_encode($_GET);
} else {
    echo "DATA NOT SAVED";
    
}

?>