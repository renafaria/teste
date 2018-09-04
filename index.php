<?php
require_once dirname(__FILE__).'/controllers/device/read.php';
$devices = getDevices();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Teste MT4</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main class="container">
        <h1>Teste MT4</h1>
        <hr>
        <div class="row">
            <div class="col">
                <a href="views/create_device.php" class="btn btn-lg btn-primary btn_menus">Adicionar dispositivo</a>
            </div>
<!--            <div class="col">-->
<!--                <a href="views/#" class="btn btn-lg btn-primary btn_menus">SSH</a>-->
<!--            </div>-->
            <div class="col">
                <a href="views/#" class="btn btn-lg btn-primary btn_menus">Criptografia</a>
            </div>
            <div class="col">
                <a href="views/#" class="btn btn-lg btn-primary btn_menus">Hashes</a>
            </div>
        </div>
        <hr>
        <table class="table table-sm table-striped">
            <thead>
                <tr>
<!--                    <th>ID</th>-->
                    <th>IP</th>
                    <th>Hostname</th>
                    <th>Tipo</th>
                    <th>Fabricante</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($devices as $dispositivo){
                ?>
                <tr>
<!--                    <td>--><?php //echo $dispositivo['id']; ?><!--</td>-->
                    <td><?php echo $dispositivo['ip']; ?></td>
                    <td><?php echo $dispositivo['hostname']; ?></td>
                    <td><?php echo $dispositivo['tipo']; ?></td>
                    <td><?php echo $dispositivo['fabricante']; ?></td>
                    <td>
                        <a href="views/view_device.php?id=<?php echo $dispositivo['id']; ?>" class="btn btn-sm btn-success btn_funcoes">Visualizar</a>
                        <a href="views/update_device.php?id=<?php echo $dispositivo['id']; ?>" class="btn btn-sm btn-warning btn_funcoes">Editar</a>
                        <a href="#" data-href="controllers/device/delete.php?id=<?php echo $dispositivo['id']?>" data-toggle="modal" data-target="#confirm-delete" class="btn btn-sm btn-danger btn_funcoes">Excluir</a>
                        <a href="views/ssh_device.php?id=<?php echo $dispositivo['id']; ?>" class="btn btn-sm btn-secondary btn_funcoes">SSH</a>
                    </td>
                <tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <hr>
    </main>
<!-- MODAL EXCLUIR -->
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="ModalExclusao" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Confirmar
                </div>
                <div class="modal-body">
                    Deseja realmente excluir o dispositivo selecionado?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-success btn-ok">Sim</a>
                </div>
            </div>
        </div>
    </div>
<!-- FIM MODAL EXCLUIR -->
    <footer class="container">
        <p>&copy;2018 - Teste MT4</p>
    </footer>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>