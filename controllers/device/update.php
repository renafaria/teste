<?php

require_once dirname(dirname(dirname(__FILE__))).'/database.php';
require_once dirname(dirname(dirname(__FILE__))).'/models/deviceModel.php';

function updateDevice(DeviceModel $device, $id) {
    $database = new Database();
    $database->connect();
    $query = "UPDATE dispositivos SET ip='". $database->escapeString($device->getIp()) ."', hostname='". $database->escapeString($device->getHostname()) ."', ";
    $query .= "tipo='". $database->escapeString($device->getTipo()) ."', fabricante='". $database->escapeString($device->getFabricante()) ."' ";
    $query .= "WHERE id=". $database->escapeString($id) .";";
    $database->execute($query);
    $database->disconnect();
}

if (isset($_POST)) {
    $device = new DeviceModel();
    $id = $_POST['id_field'];
    $device->setIp($_POST['ip_field']);
    $device->setHostname($_POST['hostname_field']);
    $device->setTipo($_POST['tipo_field']);
    $device->setFabricante($_POST['fabricante_field']);
    updateDevice($device, $id);
    header("Location: ../../index.php");
}