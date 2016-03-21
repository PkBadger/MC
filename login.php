<?php
    if (!isset($_SERVER['PHP_AUTH_USER'])) {
        header("WWW-Authenticate: Basic realm=\"Private Area\"");
        header("HTTP/1.0 401 Unauthorized");
        print "Necesitas credenciales validas para entrar!\n";
        exit;
    } else {
        if (($_SERVER['PHP_AUTH_USER'] == 'admin') && ($_SERVER['PHP_AUTH_PW'] == 'Movimiento2016.')) {
            
        } else {
            header("WWW-Authenticate: Basic realm=\"Private Area\"");
            header("HTTP/1.0 401 Unauthorized");
            print "Necesitas credenciales validas para entrar!\n";
            exit;
        }
    }
?>