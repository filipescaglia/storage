<?php

define("ENVIRONMENT", "development");
//define("ENVIRONMENT", "production");

if(ENVIRONMENT == "development") {
    define("BASE_URL", "http://localhost/storage/");
    define("DBNAME", "storage");
    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBPASS", "");
} else {

}