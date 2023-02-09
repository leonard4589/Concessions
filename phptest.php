<?php

    echo "Hi <b>Brooke</b>, Why are you late???"; //have a ";" after every line
    echo "And you too Coen!!!<br>";
    echo "Hello" .  $_GET["name"] . "<p>"; //says "Array"
    print_r($_GET); //prints out contents of Array 
    echo "<p>";

    foreach ($_GET as $id => $val){
        echo $id . "==>" . $val . "<br>";
    }

    echo '<button type="button">Input!</button>'; 

    $f = fopen("test.json", "a");
    fwrite($f, "This is a file. \n"); 
    fwrite($f, json_encode($_GET) . "\n");
    fclose($f);
    echo "Saved";



    
?>
