<?PHP

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$infoAdicional = $_POST['infoAdicional'];

?>
<h1 class="text-center fs-1 mt-5 pt-5">Datos</h1>
<div class="container d-flex justify-content-center">
    <div class="card text-dark p-3 fs-3 mb-5">
        <ul class="list-unstyled">
            <li>El campo nombre contiene: <strong><?= $nombre ?></strong></li>
            <li>El campo apellido contiene: <strong><?= $apellido ?></strong></li>
            <li>El campo dirección contiene: <strong><?= $direccion ?></strong></li>
            <li>El campo email contiene: <strong><?= $email ?></strong></li>
            <li>El campo celular contiene: <strong><?= $celular ?></strong></li>
            <li>El campo información adicional contiene: <strong><?= $infoAdicional ?></strong></li>
        </ul>
    </div>
</div>