<?php

require_once dirname(dirname(dirname(__FILE__))).'/database.php';

function getDevices(){
    $database = new Database();
    $database->connect();
    $query = "SELECT id, ip, hostname, tipo, fabricante FROM dispositivos ORDER BY id ASC;";
    $resultado = $database->execute($query);
    return $database->fetch_all($resultado);
}

function getDeviceById($id){
    $database = new Database();
    $database->connect();
    $query = "SELECT id, ip, hostname, tipo, fabricante FROM dispositivos WHERE id =". $id ." LIMIT 1;";
    $resultado = $database->execute($query);
    return $database->fetch_all($resultado)[0];
}