<?php
define('DB_SERVER', "ap-cdbr-azure-east-c.cloudapp.net");
define('DB_USERNAME', "b0392d5389b46e");
define('DB_PASSWORD', "f8a2e516");
define('DB_DATABASE',"CMM007ALDB-1419172");
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if(!$db){
    echo "Cant connect to database" . mysqli_error();
}
?>