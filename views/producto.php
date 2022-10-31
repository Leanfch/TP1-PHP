<?PHP
$id = $_GET['id'] ?? FALSE;
$miObjeto = new Placa();
$producto = $miObjeto->productoID($id);
?>

<h1 class="text-center pt-5 my-5">Detalle de producto</h1>
<div class="container">
    <div class="row">
        <?PHP if (isset($producto)) { ?>
            <div class="col d-flex">
                <?php if ($producto->getCat() == "nvidia") { ?>
                    <div class="card mb-5 nvidia-card">
                    <?php } else { ?>
                        <div class="card mb-5 amd-card">
                        <?php } ?>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="img/placas-graficas/<?= $producto->getImagen() ?>" class="img-fluid rounded-start border-end my-5" alt="Placa gráfico <?= $producto->nombre_completo() ?>">
                            </div>
                            <div class="col-md-7 d-flex flex-column">
                                <div class="card-body flex-grow-0">
                                    <h2 class="fs-1 m-0 fw-bold text-center text-dark"><?= $producto->nombre_completo() ?></h2>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item fs-4"><strong>Ensamblador:</strong> <?= $producto->getEnsamblador() ?></li>
                                    <li class="list-group-item fs-4"><strong>Marca:</strong> <?= $producto->getMarca() ?></li>
                                    <li class="list-group-item fs-4"><strong>Tipo de conexión:</strong> <?= $producto->getTipo() ?></li>
                                    <li class="list-group-item fs-4"><strong>Cant. memoria:</strong> <?= $producto->getMemoria() ?>GB</li>
                                    <li class="list-group-item fs-4"><strong>Tipo de memoria:</strong> <?= $producto->getMemoria_tipo() ?></li>
                                    <li class="list-group-item fs-4"><strong>Características especiales:</strong> <?= $producto->getEspecial() ?></li>
                                </ul>
                                <div class="card-body">
                                    <div class="fs-1 mb-3 fw-bold text-center text-oka">$<?= $producto->precioFormat() ?></div>
                                    <a href="#" class="btn btn-oka w-100 fw-bold text-uppercase">Añadir al carrito</a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                <?PHP } ?>