<?php
    //$GLOBALS
    //$_SERVER
    //$_POST
    //$_GET
    $x=10;
    $y=20;

    function multipication(){
        $mul=$GLOBALS['x'] * $GLOBALS['y'];
        echo $mul;
    }
    multipication();

?>