<?php

require_once dirname(dirname(dirname(__FILE__))).'/database.php';
require_once dirname(dirname(dirname(__FILE__))).'/models/deviceModel.php';

function addDevice(DeviceModel $device)
{
    $database = new Database();
    $database->connect();
    $query = "INSERT INTO dispositivos (ip, hostname, tipo, fabricante) VALUES ";
    $query .= "('". $database->escapeString($device->getIp()) ."', '". $database->escapeString($device->getHostname()) ."', ";
    $query .= "'". $database->escapeString($device->getTipo()) ."', '". $database->escapeString($device->getFabricante()) ."');";
    $database->execute($query);
    $database->disconnect();
}

if (isset($_POST)) {
    $device = new DeviceModel();
    $device->setIp($_POST['ip_field']);
    $device->setHostname($_POST['hostname_field']);
    $device->setTipo($_POST['tipo_field']);
    $device->setFabricante($_POST['fabricante_field']);
    addDevice($device);
    header("Location: ../../index.php");
}