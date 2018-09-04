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
    <h1>SSH Dispositivo - <?php echo $device['id']; ?></h1>
    <hr>
    <div class="row">
        <div class="col">
            <label><b>IP:</b></label>
            <label><?php echo $device['ip']; ?></label>
        </div>
        <div class="col">
            <label><b>Hostname:</b></label>
            <label><?php echo $device['hostname']; ?></label>
        </div>
        <div class="col">
            <label><b>Tipo:</b></label>
            <label><?php echo $device['tipo']; ?></label>
        </div>
        <div class="col">
            <label><b>Fabricante:</b></label>
            <label><?php echo $device['fabricante']; ?></label>
        </div>
    </div>
    <br>
    <form id="form_ssh_device" action="../controllers/device/ssh.php" method="post">
        <input type="hidden" name="ip_field" value="<?php echo $device['ip']; ?>">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="user_field">Usuário</label>
                    <input type="text" class="form-control" id="user_field" name="user_field" placeholder="Usuário" value="" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="password_field">Senha</label>
                    <input type="text" class="form-control" id="password_field" name="password_field" placeholder="Senha" value="" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <button type="button" id="btn_autenticar_ssh" class="btn btn-success btn_menus">Autenticar</button>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <a href="../index.php" type="button" class="btn btn-primary btn_menus">Início</a>
                </div>
            </div>
        </div>
    </form>
    <hr>

    <hr>
</main>
<footer class="container">
    <p>&copy;2018 - Teste MT4</p>
</footer>
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/scripts.js"></script>
</body>
</html>
