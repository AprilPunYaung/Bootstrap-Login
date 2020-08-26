<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_NAME','login_form');
define('DB_PASSWORD','');

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if(mysqli_connect_error())
{
    die("connection fail");
}

?>