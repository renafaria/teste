<?php

require_once dirname(dirname(dirname(__FILE__))).'/database.php';
require_once dirname(dirname(dirname(__FILE__))).'/models/deviceModel.php';

function deleteDevice($id)
{
    $database = new Database();
    $database->connect();
    $query = "DELETE FROM dispositivos WHERE id='". $database->escapeString($id) ."'";
    $database->execute($query);
    $database->disconnect();
}

if (isset($_GET)) {
    $id = $_GET['id'];
    deleteDevice($id);
    header("Location: ../../index.php");
}