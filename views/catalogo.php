<?PHP
$miObjeto = new Placa();
$catalogo = $miObjeto->catalogo_completo();

?>

<h1 class="text-center pt-5 my-5">Todos los productos</h1>
<div class="container">
  <div class="row mb-5">

    <?PHP
    if (count($catalogo)) { ?>
      <?PHP foreach ($catalogo as $placa) { ?>
        <!-- HTML CARDS -->
        <div class="d-flex justify-content-center col-sm-6 col-xs-12 col-lg-4 col-xl-3">
          <?php if ($placa->getEnsamblador() == "Nvidia GeForce") { ?>
            <div class="card nvidia-card m-2" style="width: 20rem;">
            <?php } else { ?>
              <div class="card amd-card m-2" style="width: 20rem;">
              <?php } ?>
              <img src="img/placas-graficas/<?= $placa->getImagen() ?>" class="card-img-top p-3" alt="Placa <?PHP $placa->nombre_completo() ?>">
              <div class="card-body">
                <h2 class="card-title text-dark text-center my-3 fs-3"><?= $placa->nombre_completo() ?></h2>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><strong>Cant. memoria:</strong> <?= $placa->getMemoria() ?> GB</li>
                  <li class="list-group-item"><strong>Tipo de memoria:</strong> <?= $placa->getMemoria_tipo() ?></li>
                  <li class="list-group-item"><strong>Características especiales:</strong> <?= $placa->getEspecial() ?></li>
                </ul>
                <div class="card-body">
                  <div class="fs-3 text-dark text-center">$<?= $placa->precioFormat() ?></div>
                </div>
                <a class="btn btn-dark text-center align-center w-100 fs-4" href="index.php?sec=producto&id=<?= $placa->getId(); ?>">Más detalles</a>
              </div>
              </div>
            </div>
          <?PHP } ?>
        <?PHP } else { ?>
          <div class="col">
            <h2 class="text-center mb-5">No se encontraron productos.</h2>
          </div>
        <?PHP } ?>