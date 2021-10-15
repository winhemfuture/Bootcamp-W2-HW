<?php
    //Static defined a variable
    function staticInc()
    {
        static $a=0;
        $a++;
        echo "statik a = ".$a;
        echo "<br \>";
    }

    //Normal defined a variable
    function normalInc()
    {
        $a=0;
        $a++;
        echo "normal a = ".$a;
        echo "<br \>";
    }
    $i=0;
    while($i<10)
    {
        //if we run func 10 times
        //output show us statik a goes to 10 because its static always protect its value
        //Static variable hold your memory position 
        //but normal a cant hold its memory location 
        //its location change every call because of this 
        //its value always begin zero and goes to 1 not more

        staticInc();
        normalInc();
        echo "<br \>";
        $i++;
    }
    
 /* OUTPUT
    statik a = 1
    normal a = 1

    statik a = 2
    normal a = 1

    statik a = 3
    normal a = 1

    statik a = 4
    normal a = 1

    statik a = 5
    normal a = 1

    statik a = 6
    normal a = 1

    statik a = 7
    normal a = 1

    statik a = 8
    normal a = 1

    statik a = 9
    normal a = 1

    statik a = 10
    normal a = 1
*/
?>