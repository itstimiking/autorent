<?php

    $autorentdb = new mysqli("127.0.0.1",'root','','autorentdb'); 

    if($autorentdb->connect_error){
        echo "AutorentDB connection error: ";
        exit();
    }