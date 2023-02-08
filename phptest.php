<?php

    echo "Hi <b>Brooke</b>, Why are you late???"; //have a ";" after every line
    echo "And you too Coen!!!";
    echo "Hello" .  $_GET["name"]; //says "Array"
    //print_r($_GET); //prints out contents of Array 
    
    $f = fopen("test.json", "a");
    fwrite($f, "This is a file."); 
    fclose($f);

?>
