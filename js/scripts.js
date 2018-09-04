$('.btn-excluir-device').click(function () {
   $('#id_device_field').val($(this).attr('id'));
   $('#form_delete_device').submit();
});
$('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});

// SSH

$('#btn_autenticar_ssh').click(function () {
    var dados = $('#form_ssh_device').serialize();
    $.ajax({
        method: 'POST',
        url: "http://localhost:8000/controllers/device/ssh.php",
        data : dados,
        dataType: "text",
        success: function (response) {
            console.log(response);
        }
    });
});