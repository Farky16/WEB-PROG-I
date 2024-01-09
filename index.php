<?php
    include('./root/index.html');
    include('./root/Bejelentkezes.html');
    include('./root/Elérhetőségeink.html');
    include('./root/Műveink.html');
    include('./root/Szolgáltatásaink.html');
   
        if (isset($_GET['oldal'])) {
            $requested_page = $_GET['oldal'];
        }
        else {
            $requested_page = 'fooldal';
        }

        switch($requested_page) {
            case "bejelentkezes":
                include("/Bejelentkezes.html");
                break;
                       
            case "fooldal":
                include("/index.html");
                break;
                           
            case "elerhetoseg":
                include("/Elérhetőségeink.html");
                break;
                        
            case "muveink":
                include("/Műveink.html");
                break;
                        
            case "szolgaltatas":
                include("/Szolgáltatásaink.html");
                break;
        }
?>