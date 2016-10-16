<?php
   define('DB_SERVER', 'localhost');
   define('DB_PORT', 3306);
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'root');
   define('DB_DATABASE', 'dirharvest_lab');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE,DB_PORT);
?>
