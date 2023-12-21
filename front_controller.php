<?php
    switch (@$_GET['oldal']) {
        case 'edit':
            include ('root/index.html'); break;
        case 'post' :
            include ('root/Szolgáltatásaink.html'); break;
        case 'delete' :
            include ('root/about.html'); break;


    }
?>