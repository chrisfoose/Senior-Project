<<<<<<< HEAD
<?php 

/**
configuration for database connection
*/
$host = "localhost:3308";
$username="root";
$password="";
$dbname="example";
$dsn="mysql:host=$host;dbname=$dbname";
$options=array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
=======
<?php 

/**
configuration for database connection
*/
$host = "localhost:3308";
$username="root";
$password="";
$dbname="example";
$dsn="mysql:host=$host;dbname=$dbname";
$options=array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
>>>>>>> 2137a63106319fa1f2a1f66fbc6cb04df0b9287a
            );