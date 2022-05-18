<?php

$databaseHost='localhost';
$databaseUsername='root';
$databaseName='db_users';
$databasePassword='';

$conn=mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);

if(!$conn){
    echo '!Error de conexión¡';
}

?>



