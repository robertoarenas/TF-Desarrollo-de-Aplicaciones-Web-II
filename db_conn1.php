<?php

$databaseHost='localhost';
$databaseUsername='root';
$databaseName='db_consult';
$databasePassword='';

$conn1=mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);

if(!$conn1){
    echo '!Error de conexión¡';
}

?>