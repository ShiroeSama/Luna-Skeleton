<?php

    /**
     * --------------------------------------------------------------------------
     *   @Copyright : License MIT 2017
     *
     *   @Author : Alexandre Caillot
     *   @WebSite : https://www.shiros.fr
     *
     *   @File : database.php
     *   @Created_at : 12/03/2018
     *   @Update_at : 24/05/2018
     * --------------------------------------------------------------------------
     */

    /*
    |--------------------------------------------------------------------------
    | Database Configuration
    |--------------------------------------------------------------------------
    |
    */

    $Database = [

        /*
        |--------------------------------------------------------------------------
        | Database Connexion
        |--------------------------------------------------------------------------
        |
        |   Information and login IDs about de databass
        |
        |   'dbHost' => Database server ip
        |   'dbName' => Database name
        |   'dbUser' => Login ID (Username)
        |   'dbPass' => Password
        |
        */

        'Connexion' => [
            'dbHost' => '',
            'dbName' => '',
            'dbUser' => '',
            'dbPass' => ''
        ],
    ];

    /*
    |--------------------------------------------------------------------------
    | Return Database Configuration
    |--------------------------------------------------------------------------
    |
    */

    return $Database;
?>