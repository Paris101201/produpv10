<?php

    //define("BASE_URL", "http://localhost/ProdUpV10/");
    const BASE_URL = "http://localhost/ProdUpV10/";

    //Zona horaria
    date_default_timezone_set('America/Mexico_City');

    //Variables globales para conexion a la BD
    const DB_HOST = "localhost";
    const DB_NAME = "db_produp";
    const DB_USER = "root";
    const DB_PASSWORD = "";
    const DB_CHARSET = "charset=utf8";

    //Delimitadores decimal y millar. Ejem: 24,000.00
    const SPD = ".";
    const SPM = ",";

    //Simbolo de moneda
    const SMONEY = "$";

?>