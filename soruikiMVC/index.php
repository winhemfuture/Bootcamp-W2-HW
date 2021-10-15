<?php

    //include all necessary libs
    require __DIR__.'/database.php';
    require __DIR__.'/model.php';
    require __DIR__.'/controller.php';
    require __DIR__.'/route.php';

    //Route::run('/',function(){
    //    echo "Merhaba Dünya!";
    //});

    //run method need 3 parameters also work 2 
    //first directory / mean main dir
    //second mainpage file after @ call index function
    Route::run('/','mainpage@index');
    //third one using for pull data method get or post
    Route::run('/','mainpage@post','post');
?>