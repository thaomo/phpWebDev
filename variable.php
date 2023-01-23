<?php

class Variables {
    $numOne = 12;
    $numTwo = 3;

    function printNum() {
        echo '.$numOne';
        echo '.$numTwo';
    }
}

$printCmd = new Variables();
$printCmd.printNum();

?>