<?php
require_once dirname(dirname(__FILE__)).'/controllers/device/read.php';
$device = getDeviceById($_GET['id']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Teste MT4</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<main class="container">
    <h1>Dispositivo - <?php echo $device['id']; ?></h1>
    <hr>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="ip_field">IP</label>
                    <input type="text" class="form-control" id="ip_field" name="ip_field" placeholder="Endereço IP" value="<?php echo $device['ip']; ?>" disabled>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="hostname_field">Hostname</label>
                    <input type="text" class="form-control" id="hostname_field" name="hostname_field" placeholder="Hostname" value="<?php echo $device['hostname']; ?>" disabled>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="tipo_field">Tipo</label>
                    <input type="text" class="form-control" id="tipo_field" name="tipo_field" placeholder="Tipo" value="<?php echo $device['tipo']; ?>" disabled>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="fabricante_field">Fabricante</label>
                    <input type="text" class="form-control" id="fabricante_field" name="fabricante_field" placeholder="Fabricante" value="<?php echo $device['fabricante']; ?>" disabled>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="../index.php" id="btn_home" class="btn btn-primary btn_menus">Início</a>
            </div>
        </div>
    <hr>
</main>
<footer class="container">
    <p>&copy;2018 - Teste MT4</p>
</footer>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>