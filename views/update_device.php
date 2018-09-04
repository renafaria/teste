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
    <h1>Editar Dispositivo - <?php echo $device['id']; ?></h1>
    <hr>
    <form id="form_add_device" action="../controllers/device/update.php" method="post">
        <input type="hidden" name="id_field" value="<?php echo $device['id']; ?>">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="ip_field">IP</label>
                    <input type="text" class="form-control" id="ip_field" name="ip_field" placeholder="Endereço IP" value="<?php echo $device['ip']?>" maxlength="15" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="hostname_field">Hostname</label>
                    <input type="text" class="form-control" id="hostname_field" name="hostname_field" placeholder="Hostname" value="<?php echo $device['hostname']?>" maxlength="100" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="tipo_field">Tipo</label>
                    <select class="form-control" id="tipo_field" name="tipo_field">
                        <option <?php echo ($device['tipo'] === 'Servidor') ? 'selected' : ''; ?> value="Servidor">Servidor</option>
                        <option <?php echo ($device['tipo'] === 'Roteador') ? 'selected' : ''; ?> value="Roteador">Roteador</option>
                        <option <?php echo ($device['tipo'] === 'Switch') ? 'selected' : ''; ?> value="Switch">Switch</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="fabricante_field">Fabricante</label>
                    <input type="text" class="form-control" id="fabricante_field" name="fabricante_field" placeholder="Fabricante" value="<?php echo $device['fabricante']?>" maxlength="100" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button id="btn_add_device" type="submit" class="btn btn-success btn_menus">Gravar</button>
            </div>
            <div class="col">
                <a href="../index.php" id="btn_home" class="btn btn-primary btn_menus">Início</a>
            </div>
        </div>
    </form>
    <hr>
</main>
<footer class="container">
    <p>&copy;2018 - Teste MT4</p>
</footer>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
