<?php

    $db['db_host'] = "localhost";
    $db['db_user'] = "root";
    $db['db_pass'] = "";
    $db['db_name'] = "php_blog";

    foreach ( $db as $key => $value ) {
        define( strtoupper( $key ), $value );
    }

    $connect = mysqli_connect( DB_HOST, DB_USER, DB_PASS, DB_NAME );

    if ( $connect ) {
        //echo "Database Connected";
    } else {
        die( "Database Connection Failed" . mysqli_error( $connect ) );
    }

?>