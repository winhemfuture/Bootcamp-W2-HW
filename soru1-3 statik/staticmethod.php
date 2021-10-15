<?php

    class A{
        //static func part of a class and for using it
        //We dont need creat an object
        public static function sayYes()
        {
            echo "Yes!";
        }

        //normal function cant accecible 
        public function sayNo()
        {
            echo "No :(";
        }
    }
    //we can use static method like this we dont need creat an object
    //static function call with classname::staticFunctionName
    echo A::sayYes();

    //Normal functions cannot be used outside unless we create  an object.
    $a = new A();
    echo "<br \>";
    $a->sayNo();

 /* OUTPUT
    Yes!
    No :(
*/

?>