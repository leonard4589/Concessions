<?php

    echo "Hi <b>Brooke</b>, Why are you late???"; //have a ";" after every line
    echo "And you too Coen!!!<br>";
    echo "Hello" .  $_GET["name"]; //says "Array"
    print_r($_GET); //prints out contents of Array 
    
    foreach ($_GET as $id){
        echo $id . "==>" . $_GET[$id] . "<br>";
    }

    $f = fopen("test.json", "a");
    fwrite($f, "This is a file."); 
    fclose($f);

?>
