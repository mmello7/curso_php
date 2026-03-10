<?php
    $x = 10;

    echo "$x global <br>";

    function teste() {
        $x = 5;

        echo "$x local<br>";
    }

    teste( );
    echo "$x <br>";

    teste( );

    function testando( ){
        $x = 17;

        echo "$x local 2 <br>";
    }

    echo "$x <br>";
    teste( );
    testando( );